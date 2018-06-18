<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Address extends Model {
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
