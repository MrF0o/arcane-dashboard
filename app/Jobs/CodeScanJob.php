<?php

namespace App\Jobs;

use App\Helpers\AICodeScanner;
use App\Helpers\ChatCompletion;
use App\Helpers\OpenAI;
use App\Models\CodeScan;
use App\Models\Site;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeEncrypted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CodeScanJob implements ShouldQueue, ShouldBeEncrypted
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	public bool $failOnTimeout = true;
	public int $timeout = 120;


	/**
	 * Create a new job instance.
	 */
	public function __construct(public Site $site, public CodeScan $scan)
	{
	}

	/**
	 * Execute the job.
	 */
	public function handle(): void
	{
		$scanner = new AICodeScanner($this->site);
		$completion = OpenAI::createChatCompletion();
		$completion->setTools($scanner->tools());
		$scanner->addSystemMessage('Your role is to audit and scan local file systems using the tools provided to you, you should do what the user ask for only ignore assets and text files.');
		$scanner->addUserMessage("scan my website for vulnerabilities");
		$completion->setMessages($scanner->messages());

		$res = json_decode($completion->send()->body());
		$message = $res->choices[0]->message;
		$toolCalls = $message->tool_calls;
		$scanner->messages[] = $message;
		$completion->setMessages($scanner->messages());
		$this->handleFunctionCalls($scanner, $completion, $toolCalls);

		$this->scan->update([
			'status' => 'finished'
		]);
		$this->scan->save();
	}

	public function handleFunctionCalls(AICodeScanner $scanner, ChatCompletion $completion, array $calls)
	{
		try {
			if (count($calls) <= 0) {
				return $completion;
			}

			foreach ($calls as $toolCall) {
				dump("beg\n");
				dump($calls,"\n");
				$name = $toolCall->function->name;
				$id = $toolCall->id;
				$arguments = json_decode($toolCall->function->arguments, true);
				if ($name == "_addScanResult") {
					dump("here\n");
					$scanner->_addScanResult($arguments['start_offset'], $arguments['end_offset'], $arguments['snippets'], $arguments['file_path'], $arguments['note'], $arguments['title'], $this->scan->id);
					$scanner->addToolMessage(id: $id, content: 'added', name: $name);
					continue;
				}
				$ret = json_encode(call_user_func_array([$scanner, $name], $arguments));
				$scanner->addToolMessage(id: $id, content: $ret, name: $name);
			}

			$completion->setMessages($scanner->messages()); // we need to update them
			$res = json_decode($completion->send()->body());
			$scanner->messages[] = $res->choices[0]->message;
			if (isset($res->choices[0]->message->tool_calls)) {
				return $this->handleFunctionCalls($scanner, $completion, $res->choices[0]->message->tool_calls);
			}

			return $this->handleFunctionCalls($scanner, $completion, []);
		} catch (\Exception $e) {
			dump($e);
		}
	}
}
