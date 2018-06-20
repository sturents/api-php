<?php

namespace SturentsLib\Api\Models;

use SturentsLib\Api\Model;

class Media extends Model {
	/**
	 * @var Photo[]
	 * @required
	 */
	protected $photos = [];
	/**
	 * @var string[]
	 * @required
	 */
	protected $videos = [];
	/**
	 * @var string[]
	 * @required
	 */
	protected $floorplans = [];

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

	/**
	 * @return string[]
	 */
	public function getVideos(){
		return $this->videos;
	}

	/**
	 * @param string[] $videos
	 * @return Media
	 */
	public function setVideos(array $videos){
		$this->videos = $videos;

		return $this;
	}

	/**
	 * @param string $video
	 * @return Media
	 */
	public function addVideo($video){
		$this->videos[] = $video;

		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getFloorplans(){
		return $this->floorplans;
	}

	/**
	 * @param string[] $floorplans
	 * @return Media
	 */
	public function setFloorplans(array $floorplans){
		$this->floorplans = $floorplans;

		return $this;
	}

	/**
	 * @param string $floorplan
	 * @return Media
	 */
	public function addFloorplan($floorplan){
		$this->floorplans[] = $floorplan;

		return $this;
	}
}
