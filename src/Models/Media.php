<?php

namespace Sturents\Api\Models;

class Media {
	/**
	 * @var Photo[]
	 * @required
	 */
	private $photos = [];
	/**
	 * @var string[]
	 * @required
	 */
	public $videos = [];
	/**
	 * @var string[]
	 * @required
	 */
	public $floorplans = [];

	/**
	 * @return Photo[]
	 */
	public function getPhotos(){
		return $this->photos;
	}

	/**
	 * @param Photo[] $photos
	 *
	 * @return $this
	 * @internal
	 */
	public function setPhotos(array $photos){
		$this->photos = $photos;

		return $this;
	}

	/**
	 * @param Photo $photo
	 *
	 * @return $this
	 */
	public function addPhoto(Photo $photo){
		$this->photos[] = $photo;

		return $this;
	}
}
