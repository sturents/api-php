<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * 400 - you didn't supply correct query string fields for your chosen
 *       use case (see auth features of each endpoint)
 * 401 - the key supplied did not match the property manager or channel
 *       specified, or the channel does not have access to the property manager
 * 404 - the property manager or channel does not exist, or the
 *       property manager does not have any properties
 */
class GetError
{
	/**
	 * Informs that the provided "landlord" query string was incorrect
	 * @var string
	 */
	private $landlord;

	/**
	 * Indicates an issue with the provided "public" key
	 * @var string
	 */
	private $public;


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
	public function getPublic()
	{
		return $this->public;
	}


	/**
	 * @param string $public
	 *
	 * @return $this
	 */
	public function setPublic($public)
	{
		$this->public = $public;

		return $this;
	}
}

