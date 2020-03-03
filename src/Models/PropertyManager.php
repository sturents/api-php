<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class PropertyManager extends SwaggerModel
{
	/**
	 * Pass this as the "landlord" field when requesting data for this account
	 *
	 * @var string
	 */
	protected $landlord = '';

	/**
	 * Title of this account on the StuRents website
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * Title of the organisation this account belongs to on the StuRents website
	 *
	 * @var string
	 */
	protected $company_title = '';

	/**
	 * ID for the organisation this account belongs to on the StuRents website
	 *
	 * @var string
	 */
	protected $company = '';


	/**
	 * @return string
	 */
	public function getLandlord()
	{
		return $this->landlord;
	}


	/**
	 * @param string $landlord
	 *
	 * @return $this
	 */
	public function setLandlord($landlord)
	{
		$this->landlord = $landlord;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getCompanyTitle()
	{
		return $this->company_title;
	}


	/**
	 * @param string $company_title
	 *
	 * @return $this
	 */
	public function setCompanyTitle($company_title)
	{
		$this->company_title = $company_title;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getCompany()
	{
		return $this->company;
	}


	/**
	 * @param string $company
	 *
	 * @return $this
	 */
	public function setCompany($company)
	{
		$this->company = $company;

		return $this;
	}
}
