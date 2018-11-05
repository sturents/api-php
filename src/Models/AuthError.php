<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * The key supplied did not match the property manager or channel
 * specified, or the channel does not have access to the property manager
 */
class AuthError extends SwaggerModel
{
	/**
	 * Indicates an issue with the provided "landlord" parameter
	 * @var string
	 */
	protected $landlord;

	/**
	 * Indicates an issue with the provided "auth" token
	 * @var string
	 */
	protected $auth;

	/**
	 * Indicates an issue with the provided "channel" token
	 * @var string
	 */
	protected $channel;


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
	public function getChannel()
	{
		return $this->channel;
	}


	/**
	 * @param string $channel
	 *
	 * @return $this
	 */
	public function setChannel($channel)
	{
		$this->channel = $channel;

		return $this;
	}
}
