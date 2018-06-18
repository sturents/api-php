<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Accreditation extends Model {
	/**
	 * @var string
	 * @required
	 */
	public $type;
	/**
	 * @var string
	 * @required
	 */
	public $reference;
	/**
	 * @var string
	 * @required
	 */
	public $expiry;
}
