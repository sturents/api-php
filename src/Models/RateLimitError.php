<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * This endpoint is rate limited. Please try again after the specified time
 */
class RateLimitError extends SwaggerModel
{
	/**
	 * Message indicating the rate limit has been exceeded and when to try again
	 * @var string
	 */
	protected $error = '';


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
