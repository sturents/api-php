<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * There were problems with the input data in the request body.
 * These will be described in the "messages" field of the response
 */
class SendDataError
{
	/**
	 * Keyed by field name (collapsed using . characters)
	 * @var string[]
	 */
	private $messages;


	/**
	 * @return string[]
	 */
	public function getMessages()
	{
		return $this->messages;
	}


	/**
	 * @param string[] $messages
	 *
	 * @return $this
	 */
	public function setMessages(array $messages)
	{
		$this->messages = $messages;

		return $this;
	}


	/**
	 * @param string $message
	 *
	 * @return $this
	 */
	public function addMessage($message)
	{
		$this->messages[] = $message;

		return $this;
	}
}

