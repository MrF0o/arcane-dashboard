<?php

namespace App\Helpers;

class ChatCompletion
{
	public array $tools;
	public array $messages;

	public string $model = "gpt-4-turbo";

	/**
	 * @param array $tools
	 */
	public function setTools(array $tools): void
	{
		$this->tools = $tools;
	}

	/**
	 * @param array $messages
	 */
	public function setMessages(array $messages): void
	{
		$this->messages = $messages;
	}

	public function send()
	{
		return OpenAI::sendCompletion($this);
	}
}