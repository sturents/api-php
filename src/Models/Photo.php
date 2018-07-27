<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Photo extends SwaggerModel
{
	/**
	 * Currently only supports "url".
	 * These will be downloaded and stored on StuRents' system
	 *
	 * @var string
	 */
	protected $type;

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
	public function getType()
	{
		return $this->type;
	}


	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}


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

