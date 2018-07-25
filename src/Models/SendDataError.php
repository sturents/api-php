<?php

namespace SturentsLib\Api\Models;

/**
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
}

