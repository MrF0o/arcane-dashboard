<?php

namespace App\Helpers;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class OpenAI
{
	public static function sendCompletion(ChatCompletion $comp): PromiseInterface|Response
	{
		return Http::withHeaders([
			'Authorization' => 'Bearer ' . env('OPEN_AI_KEY')
		])
			->post('https://api.openai.com/v1/chat/completions', [
				"model" => $comp->model,
				"messages" => $comp->messages,
				"tools" => $comp->tools,
				"tool_choice" => "auto"
			]);
	}

	public function auth()
	{
	}

	/**
	 * get a list of available models
	 * @return array
	 */
	static public function listModels(): array
	{
		$responseBody = Http::withHeader('Authorization', 'Bearer ' . env('OPEN_AI_KEY'))
			->get('https://api.openai.com/v1/models')
			->body();

		return json_decode($responseBody)->data;
	}

	static public function createChatCompletion(): ChatCompletion
	{
		return new ChatCompletion();
	}
}