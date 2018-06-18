<?php

namespace Sturents\Api\Models;

class Available {
	/**
	 * @var string
	 * @required
	 */
	public $start_date;
	/**
	 * @var string
	 * @required
	 */
	public $end_date;
	/**
	 * @var int
	 * @required
	 */
	public $min_contract_days;
}
