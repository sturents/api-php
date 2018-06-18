<?php

namespace Sturents\Api\Models;

class Deposit {
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
