<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Utilities extends Model {
	/**
	 * @var bool
	 * @required
	 */
	public $water;
	/**
	 * @var bool
	 * @required
	 */
	public $gas;
	/**
	 * @var bool
	 * @required
	 */
	public $electricity;
	/**
	 * @var bool
	 * @required
	 */
	public $broadband;
	/**
	 * @var bool
	 * @required
	 */
	public $phone;
	/**
	 * @var bool
	 * @required
	 */
	public $contents_insurance;
}
