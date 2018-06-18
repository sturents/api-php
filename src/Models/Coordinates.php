<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Coordinates extends Model {
	/**
	 * @var float
	 * @required
	 */
	public $lat;
	/**
	 * @var float
	 * @required
	 */
	public $lng;
}
