<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Deposit extends Model {
	/**
	 * @var float
	 * @required
	 */
	public $amount;
	/**
	 * @var string
	 * @required
	 */
	public $amount_per;
	/**
	 * @var string
	 * @required
	 */
	public $deposit_provider;
}
