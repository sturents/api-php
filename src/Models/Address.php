<?php

namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Address
{
	/**
	 * This is required if "property_number" is empty
	 * @var string
	 */
	private $property_name;

	/**
	 * This is required if "property_name" is empty
	 * @var string
	 */
	private $property_number;

	/**
	 * @var string
	 */
	private $road_name;

	/**
	 * @var string
	 */
	private $city;

	/**
	 * @var string
	 */
	private $postcode;

	/**
	 * If available, the unique property reference
	 * @var string
	 */
	private $uprn;


	/**
	 * @return string
	 */
	public function getPropertyName()
	{
		return $this->property_name;
	}


	/**
	 * @param string $property_name
	 *
	 * @return $this
	 */
	public function setPropertyName($property_name)
	{
		$this->property_name = $property_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getPropertyNumber()
	{
		return $this->property_number;
	}


	/**
	 * @param string $property_number
	 *
	 * @return $this
	 */
	public function setPropertyNumber($property_number)
	{
		$this->property_number = $property_number;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getRoadName()
	{
		return $this->road_name;
	}


	/**
	 * @param string $road_name
	 *
	 * @return $this
	 */
	public function setRoadName($road_name)
	{
		$this->road_name = $road_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}


	/**
	 * @param string $city
	 *
	 * @return $this
	 */
	public function setCity($city)
	{
		$this->city = $city;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getPostcode()
	{
		return $this->postcode;
	}


	/**
	 * @param string $postcode
	 *
	 * @return $this
	 */
	public function setPostcode($postcode)
	{
		$this->postcode = $postcode;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getUprn()
	{
		return $this->uprn;
	}


	/**
	 * @param string $uprn
	 *
	 * @return $this
	 */
	public function setUprn($uprn)
	{
		$this->uprn = $uprn;

		return $this;
	}
}

