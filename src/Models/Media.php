<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Media extends SwaggerModel
{
	/**
	 * Zero or more 360 photos
	 * The order of photos will be maintained in the gallery;
	 *
	 * @var Photo[]
	 */
	protected $photos_360 = [];

	/**
	 * Zero or more photos
	 * The order of photos will be maintained in the gallery;
	 * the 1st will be the profile photo
	 *
	 * @var Photo[]
	 */
	protected $photos = [];

	/**
	 * Zero or more video embed URLs. Any video source can be
	 * supplied but at present only videos from YouTube will
	 * be rendered as embeded videos on the property profile pages
	 *
	 * @var string[]
	 */
	protected $videos = [];

	/**
	 * Zero or more URLs which link to floorplan files (image or pdf)
	 * These will be downloaded and stored on StuRents' system
	 *
	 * @var string[]
	 */
	protected $floorplans = [];

	/**
	 * Zero or more 360 tour URLs to an external service. Any 360 tour source can be supplied
	 * and used as a link
	 *
	 * @var string[]
	 */
	protected $tours = [];


	/**
	 * @return Photo[]
	 */
	public function getPhotos360()
	{
		return $this->photos_360;
	}


	/**
	 * @param Photo[] $photos_360
	 *
	 * @return $this
	 */
	public function setPhotos360(array $photos_360)
	{
		$this->photos_360 = $photos_360;

		return $this;
	}


	/**
	 * @param Photo $photos_360
	 *
	 * @return $this
	 */
	public function addPhotos360(Photo $photos_360)
	{
		$this->photos_360[] = $photos_360;

		return $this;
	}


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


	/**
	 * @return string[]
	 */
	public function getTours()
	{
		return $this->tours;
	}


	/**
	 * @param string[] $tours
	 *
	 * @return $this
	 */
	public function setTours(array $tours)
	{
		$this->tours = $tours;

		return $this;
	}


	/**
	 * @param string $tour
	 *
	 * @return $this
	 */
	public function addTour($tour)
	{
		$this->tours[] = $tour;

		return $this;
	}
}
