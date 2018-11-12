<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Photo extends SwaggerModel
{
	/**
	 * A URL linking to a photo file
	 * @var string
	 */
	protected $photo;

	/**
	 * A URL linking to a thumbnail photo file
	 * @var string
	 */
	protected $thumb;

	/**
	 * Max 60 characters
	 *
	 * @var string
	 */
	protected $caption;


	/**
	 * @return string
	 */
	public function getPhoto()
	{
		return $this->photo;
	}


	/**
	 * @param string $photo
	 *
	 * @return $this
	 */
	public function setPhoto($photo)
	{
		$this->photo = $photo;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getThumb()
	{
		return $this->thumb;
	}


	/**
	 * @param string $thumb
	 *
	 * @return $this
	 */
	public function setThumb($thumb)
	{
		$this->thumb = $thumb;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getCaption()
	{
		return $this->caption;
	}


	/**
	 * @param string $caption
	 *
	 * @return $this
	 */
	public function setCaption($caption)
	{
		$this->caption = $caption;

		return $this;
	}
}
