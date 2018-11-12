<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * The requested GET entities did not exist for the property manager
 * or sub-resource requested
 */
class GetError extends SwaggerModel
{
	/**
	 * Another error message not related to authenticaiton
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
