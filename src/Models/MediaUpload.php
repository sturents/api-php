<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class MediaUpload extends SwaggerModel
{
	/**
	 * Can be "photo", "video", "floorplan"
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * A URL linking to a file to upload to StuRents, unless "type" is set
	 * to "video" in which case this must be a valid YouTube URL.
	 * Photos uploaded via this method may be resized and additionally will
	 * have a thumbnail generated. Photos must be JPG files.
	 * Floor plans must be JPG, PNG or PDF files.
	 *
	 * @var string
	 */
	protected $url;

	/**
	 * Only used for "type" set to "photo". Adds a caption which doubles as
	 * Image Alt Text for accessibility purposes
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
	public function getUrl()
	{
		return $this->url;
	}


	/**
	 * @param string $url
	 *
	 * @return $this
	 */
	public function setUrl($url)
	{
		$this->url = $url;

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
