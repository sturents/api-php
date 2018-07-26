<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class ListProperties
{
	/**
	 * The API version being returned
	 * @var string
	 */
	private $version;

	/**
	 * @var Pagination
	 */
	private $pagination;

	/**
	 * @var PropertyOutbound[]
	 */
	private $properties;


	/**
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}


	/**
	 * @param string $version
	 *
	 * @return $this
	 */
	public function setVersion($version)
	{
		$this->version = $version;

		return $this;
	}


	/**
	 * @return Pagination
	 */
	public function getPagination()
	{
		return $this->pagination;
	}


	/**
	 * @param Pagination $pagination
	 *
	 * @return $this
	 */
	public function setPagination(Pagination $pagination)
	{
		$this->pagination = $pagination;

		return $this;
	}


	/**
	 * @return PropertyOutbound[]
	 */
	public function getProperties()
	{
		return $this->properties;
	}


	/**
	 * @param PropertyOutbound[] $properties
	 *
	 * @return $this
	 */
	public function setProperties(array $properties)
	{
		$this->properties = $properties;

		return $this;
	}


	/**
	 * @param PropertyOutbound $propertie
	 *
	 * @return $this
	 */
	public function addPropertie(PropertyOutbound $propertie)
	{
		$this->properties[] = $propertie;

		return $this;
	}
}

