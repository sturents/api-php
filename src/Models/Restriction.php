<?php

namespace Sturents\Api\Models;

class Restriction {
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
