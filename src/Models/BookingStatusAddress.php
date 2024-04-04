<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class BookingStatusAddress extends SwaggerModel
{
	/**
	 * Name of the address
	 * @var string
	 * @required
	 */
	protected $name;

	/**
	 * Number of the address
	 * @var string
	 * @required
	 */
	protected $number;

	/**
	 * Street of the address
	 * @var string
	 * @required
	 */
	protected $street;

	/**
	 * City of the address
	 * @var string
	 * @required
	 */
	protected $city;

	/**
	 * Postcode of the address
	 * @var string
	 * @required
	 */
	protected $postcode;


	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}


	/**
	 * @param string $number
	 *
	 * @return $this
	 */
	public function setNumber($number)
	{
		$this->number = $number;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getStreet()
	{
		return $this->street;
	}


	/**
	 * @param string $street
	 *
	 * @return $this
	 */
	public function setStreet($street)
	{
		$this->street = $street;

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
}
