<?php

namespace SturentsLib\Api\Models;

class PropertySaved
{
	/**
	 * Unique reference to the Property on StuRents
	 * @var string
	 */
	private $property_id;

	/**
	 * Link to the property profile page on StuRents
	 * @var string
	 */
	private $url;


	/**
	 * @return string
	 */
	public function getPropertyId()
	{
		return $this->property_id;
	}


	/**
	 * @param string $property_id
	 *
	 * @return $this
	 */
	public function setPropertyId($property_id)
	{
		$this->property_id = $property_id;

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
}
