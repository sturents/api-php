<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Address extends Model {
	/**
	 * @var string
	 */
	protected $property_name;
	/**
	 * @var string
	 */
	protected $property_number;
	/**
	 * @var string
	 * @required
	 */
	protected $road_name;
	/**
	 * @var string
	 * @required
	 */
	protected $city;
	/**
	 * @var string
	 * @required
	 */
	protected $postcode;
	/**
	 * @var string
	 */
	protected $uprn;

	/**
	 * @return string
	 */
	public function getPropertyName(){
		return $this->property_name;
	}

	/**
	 * @param string $property_name
	 * @return Address
	 */
	public function setPropertyName($property_name){
		$this->property_name = $property_name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPropertyNumber(){
		return $this->property_number;
	}

	/**
	 * @param string $property_number
	 * @return Address
	 */
	public function setPropertyNumber($property_number){
		$this->property_number = $property_number;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRoadName(){
		return $this->road_name;
	}

	/**
	 * @param string $road_name
	 * @return Address
	 */
	public function setRoadName($road_name){
		$this->road_name = $road_name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(){
		return $this->city;
	}

	/**
	 * @param string $city
	 * @return Address
	 */
	public function setCity($city){
		$this->city = $city;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostcode(){
		return $this->postcode;
	}

	/**
	 * @param string $postcode
	 * @return Address
	 */
	public function setPostcode($postcode){
		$this->postcode = $postcode;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getUprn(){
		return $this->uprn;
	}

	/**
	 * @param string $uprn
	 * @return Address
	 */
	public function setUprn($uprn){
		$this->uprn = $uprn;

		return $this;
	}


}
