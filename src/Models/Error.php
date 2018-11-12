<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Error extends SwaggerModel
{
	/**
	 * @var string
	 */
	protected $error;


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
