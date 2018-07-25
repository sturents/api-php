<?php

namespace SturentsLib\Api\Models;

class Media
{
	/**
	 * Zero or more photos
	 * The order of photos will be maintained in the gallery;
	 * the 1st will be the profile photo
	 *
	 * @var Photo[]
	 */
	private $photos;

	/**
	 * Zero or more video embed URLs. Any video source can be
	 * supplied but at present only videos from YouTube will
	 * be rendered as embeded videos on the property profile pages
	 *
	 * @var string[]
	 */
	private $videos;

	/**
	 * Zero or more URLs which link to floorplan files (image or pdf)
	 * These will be downloaded and stored on StuRents' system
	 *
	 * @var string[]
	 */
	private $floorplans;


	/**
	 * @return Photo[]
	 */
	public function getPhotos()
	{
		return $this->photos;
	}


	/**
	 * @param Photo[] $photos
	 *
	 * @return $this
	 */
	public function setPhotos(array $photos)
	{
		$this->photos = $photos;

		return $this;
	}


	/**
	 * @param Photo $photo
	 *
	 * @return $this
	 */
	public function addPhoto(Photo $photo)
	{
		$this->photos[] = $photo;

		return $this;
	}


	/**
	 * @return string[]
	 */
	public function getVideos()
	{
		return $this->videos;
	}


	/**
	 * @param string[] $videos
	 *
	 * @return $this
	 */
	public function setVideos(array $videos)
	{
		$this->videos = $videos;

		return $this;
	}


	/**
	 * @param string $video
	 *
	 * @return $this
	 */
	public function addVideo($video)
	{
		$this->videos[] = $video;

		return $this;
	}


	/**
	 * @return string[]
	 */
	public function getFloorplans()
	{
		return $this->floorplans;
	}


	/**
	 * @param string[] $floorplans
	 *
	 * @return $this
	 */
	public function setFloorplans(array $floorplans)
	{
		$this->floorplans = $floorplans;

		return $this;
	}


	/**
	 * @param string $floorplan
	 *
	 * @return $this
	 */
	public function addFloorplan($floorplan)
	{
		$this->floorplans[] = $floorplan;

		return $this;
	}
}

