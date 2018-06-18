<?php

namespace Sturents\Api\Models;

class Photo {
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
