<?php
namespace SturentsLib\Responses;

class CreatePropertyResponse {
	/**
	 * @var bool
	 */
	public $success;
	/**
	 * @var int
	 */
	public $sturents_id;
	/**
	 * @var array
	 */
	public $messages = [];
	/**
	 * @var string
	 */
	public $url;
}
