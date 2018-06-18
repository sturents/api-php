<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Restriction extends Model {
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
	 * @var string
	 * @required
	 */
	public $terms;
	/**
	 * @var int
	 */
	public $min_contract_days;
}
