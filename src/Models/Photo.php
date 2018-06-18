<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Photo extends Model {
	/**
	 * @var string
	 * @required
	 */
	public $type;
	/**
	 * @var string
	 * @required
	 */
	public $photo;
	/**
	 * @var string
	 */
	public $thumb;
	/**
	 * @var string
	 */
	public $caption;
}
