<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Available extends Model {
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
