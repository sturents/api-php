<?php

namespace SturentsLib\Api\Models;

class Error
{
	/**
	 * @var string
	 */
	private $error;


	/**
	 * @return string
	 */
	public function getError()
	{
		return $this->error;
	}


	/**
	 * @param string $error
	 *
	 * @return $this
	 */
	public function setError($error)
	{
		$this->error = $error;

		return $this;
	}
}

