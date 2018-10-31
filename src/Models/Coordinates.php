<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Coordinates extends SwaggerModel
{
	/**
	 * @var float
	 */
	protected $lat;

	/**
	 * @var float
	 */
	protected $lng;


	/**
	 * @return float
	 */
	public function getLat()
	{
		return $this->lat;
	}


	/**
	 * @param float $lat
	 *
	 * @return $this
	 */
	public function setLat($lat)
	{
		$this->lat = $lat;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getLng()
	{
		return $this->lng;
	}


	/**
	 * @param float $lng
	 *
	 * @return $this
	 */
	public function setLng($lng)
	{
		$this->lng = $lng;

		return $this;
	}
}

