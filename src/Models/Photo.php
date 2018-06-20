<?php

namespace SturentsLib\Api\Models;

use SturentsLib\Api\Model;

class Photo extends Model {
	/**
	 * @var string
	 * @required
	 */
	protected $type;
	/**
	 * @var string
	 * @required
	 */
	protected $photo;
	/**
	 * @var string
	 */
	protected $thumb;
	/**
	 * @var string
	 */
	protected $caption;

	/**
	 * @return string
	 */
	public function getType(){
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return Photo
	 */
	public function setType($type){
		$this->type = $type;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoto(){
		return $this->photo;
	}

	/**
	 * @param string $photo
	 * @return Photo
	 */
	public function setPhoto($photo){
		$this->photo = $photo;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getThumb(){
		return $this->thumb;
	}

	/**
	 * @param string $thumb
	 * @return Photo
	 */
	public function setThumb($thumb){
		$this->thumb = $thumb;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCaption(){
		return $this->caption;
	}

	/**
	 * @param string $caption
	 * @return Photo
	 */
	public function setCaption($caption){
		$this->caption = $caption;

		return $this;
	}

}
