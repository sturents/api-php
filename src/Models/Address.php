<?php

namespace Sturents\Api\Models;

class Address {
	/**
	 * @var string
	 */
	public $property_name;
	/**
	 * @var string
	 */
	public $property_number;
	/**
	 * @var string
	 * @required
	 */
	public $road_name;
	/**
	 * @var string
	 * @required
	 */
	public $city;
	/**
	 * @var string
	 * @required
	 */
	public $postcode;
	/**
	 * @var string
	 */
	public $uprn;
}
