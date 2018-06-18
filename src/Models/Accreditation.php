<?php

namespace Sturents\Api\Models;

class Accreditation {
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
