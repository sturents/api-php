<?php

namespace SturentsLib\Api\Models;

class PropertyOutbound extends Property {
	/**
	 * @var int
	 */
	protected $sturents_id;

	/**
	 * @var string
	 */
	protected $api_ref;

	/**
	 * @var string
	 */
	protected $book_now_url;

	/**
	 * @return int
	 */
	public function getSturentsId(){
		return $this->sturents_id;
	}

	/**
	 * @param int $sturents_id
	 * @return PropertyOutbound
	 */
	public function setSturentsId($sturents_id){
		$this->sturents_id = $sturents_id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getApiRef(){
		return $this->api_ref;
	}

	/**
	 * @param string $api_ref
	 * @return PropertyOutbound
	 */
	public function setApiRef($api_ref){
		$this->api_ref = $api_ref;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBookNowUrl(){
		return $this->book_now_url;
	}

	/**
	 * @param string $book_now_url
	 * @return PropertyOutbound
	 */
	public function setBookNowUrl($book_now_url){
		$this->book_now_url = $book_now_url;

		return $this;
	}


}
