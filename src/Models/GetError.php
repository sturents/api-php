<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * 400 - you didn't supply correct query string fields for your chosen
 *       use case (see auth features of each endpoint)
 * 404 - the property manager or channel does not exist, or the
 *       property manager does not have any properties
 */
class GetError extends SwaggerModel
{
	/**
	 * Informs that the provided "landlord" query string was incorrect
	 * @var string
	 */
	protected $landlord;

	/**
	 * Indicates an issue with the provided "auth" key
	 * @var string
	 */
	protected $auth;

	/**
	 * Another error message not related to authenticaiton
	 * @var string
	 */
	protected $error;


	/**
	 * @return string
	 */
	public function getLandlord()
	{
		return $this->landlord;
	}


	/**
	 * @param string $landlord
	 *
	 * @return $this
	 */
	public function setLandlord($landlord)
	{
		$this->landlord = $landlord;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getAuth()
	{
		return $this->auth;
	}


	/**
	 * @param string $auth
	 *
	 * @return $this
	 */
	public function setAuth($auth)
	{
		$this->auth = $auth;

		return $this;
	}


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

