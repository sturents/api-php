<?php

namespace Sturents\Api\Models;

class PropertyOutbound extends Property {
	/**
	 * @var int
	 */
	public $sturents_id;

	/**
	 * @var string
	 */
	public $api_ref;

	/**
	 * @var string
	 */
	public $book_now_url;
}
