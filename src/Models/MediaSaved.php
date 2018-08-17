<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class MediaSaved extends SwaggerModel
{
	/**
	 * Unique reference to the Media item on StuRents
	 * @var string
	 */
	protected $media_id;


	/**
	 * @return string
	 */
	public function getMediaId()
	{
		return $this->media_id;
	}


	/**
	 * @param string $media_id
	 *
	 * @return $this
	 */
	public function setMediaId($media_id)
	{
		$this->media_id = $media_id;

		return $this;
	}
}

