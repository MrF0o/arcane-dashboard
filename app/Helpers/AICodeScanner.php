<?php

namespace App\Helpers;

use App\Models\ScanResult;
use App\Models\Site;
use Illuminate\Support\Facades\Http;

class AICodeScanner extends OpenAI
{

	private string $endpoint;

	public array $tools = [
		[
			"type" => "function",
			"function" => [
				"name" => "_listDocumentRoot",
				"description" => "Get the current filesystem of the website",
			]
		],
		[
			"type" => "function",
			"function" => [
				"name" => "_getFileContent",
				"description" => "Get the content of a text file",
				"parameters" => [
					"type" => "object",
					"properties" => [
						"path" => [
							"type" => "string",
							"description" => "the file path relative to the document root"
						]
					],
					"required" => [
						"path"
					]
				]
			]
		],
		[
			"type" => "function",
			"function" => [
				"name" => "_getWebsiteLanguage",
				"description" => "Get the programming language",
			]
		],
		[
			"type" => "function",
			"function" => [
				"name" => "_addScanResult",
				"description" => "store Scan result in db",
				"parameters" => [
					"type" => "object",
					"properties" => [
						"start_offset" => [
							"type" => "integer",
							"description" => "number of characters from the beginning of the file till 'snippets'"
						],
						"end_offset" => [
							"type" => "integer",
							"description" => "the size of 'snippets'"
						],
						"snippets" => [
							"type" => "string",
							"description" => "the vulnerable code"
						],
						"file_path" => [
							"type" => "string",
							"description" => "the path of the file"
						],
						"title" => [
							"type" => "string",
							"description" => "short vulnerability title"
						],
						"note" => [
							"type" => "string",
							"description" => "a short note about the vulnerability and how to fix it"
						],
					],
					"required" => [
						"file_path",
						"start_offset",
						"end_offset",
						"title",
						"snippets",
						"note"
					]
				]
			]
		]
	];

	public array $messages = [];

	public function _listDocumentRoot()
	{
		$res = Http::post($this->endpoint . '/_listDocumentRoot', [
			'doc_root' => $this->site->document_root,
			'ignore_names' => ["vendor", "node_modules", ".env", ".git", ".idea", ".gitignore", "artisan", "composer.json", "package.json", "package-lock.json"],
			'ignore_extensions' => ["css", "js", "png", "jpg", "jpeg", "txt", "xml", "html"],
		]);

		return $res->json("files");
	}

	public function _getFileContent($path): string
	{
		try {
			$res = Http::post($this->endpoint . '/_getFileContent', [
				'file_path' => $path
			]);

			return $res->body();
		} catch (\Exception $e) {
			dump($e);
		}
	}

	public function _getWebsiteLanguage()
	{
		return 'php';
	}

	public function _addScanResult(int $start_offset, int $end_offset, string $snippets,  string $file_path, string $note, string $title, int $scan_id)
	{
		$result = new ScanResult([
			'start_offset' => $start_offset,
			'end_offset' => $end_offset,
			'file_path' => $file_path,
			'scan_id' => $scan_id,
			'ai_note' => $note,
			'title' => $title,
			'vulnerable_snippets' => $snippets,
		]);
		$result->save();
	}

	public function getVulnerableSnippets($start_offset, $end_offset, $path): string
	{
		try {
			$res = Http::post($this->endpoint . '/_fileSnippets', [
				'file_path' => $path,
				'start_offset' => $start_offset,
				'end_offset' => $end_offset
			]);
			dump($res->body());
			return $res->body();
		} catch (\Exception $e) {
			dump($e);
		}
	}


	public function tools(): array
	{
		return $this->tools;
	}

	public function messages(): array
	{
		return $this->messages;
	}

	public function addSystemMessage($content)
	{
		$this->messages[] = [
			'role' => 'system',
			'content' => $content
		];
	}

	public function addUserMessage($content)
	{
		$this->messages[] = [
			'role' => 'user',
			'content' => $content
		];
	}

	public function addToolMessage($id, $content, $name)
	{
		$this->messages[] = [
			'tool_call_id' => $id,
			'role' => 'tool',
			'content' => $content
		];
	}


	public function __construct(public Site $site)
	{
		$this->endpoint = $this->site->domain . ':' . $this->site->port;
	}
}