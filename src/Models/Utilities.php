<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * All keys are boolean where true indicates that
 * this utility is included with the rent
 */
class Utilities extends SwaggerModel
{
	/**
	 * @var boolean
	 */
	protected $water;

	/**
	 * @var boolean
	 */
	protected $gas;

	/**
	 * @var boolean
	 */
	protected $electricity;

	/**
	 * @var boolean
	 */
	protected $broadband;

	/**
	 * @var boolean
	 */
	protected $phone;

	/**
	 * @var boolean
	 */
	protected $contents_insurance;

	/**
	 * @var boolean
	 */
	protected $tv_license;

	/**
	 * @var boolean
	 */
	protected $council_tax;


	/**
	 * @return boolean
	 */
	public function getWater()
	{
		return $this->water;
	}


	/**
	 * @param boolean $water
	 *
	 * @return $this
	 */
	public function setWater($water)
	{
		$this->water = $water;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getGas()
	{
		return $this->gas;
	}


	/**
	 * @param boolean $gas
	 *
	 * @return $this
	 */
	public function setGas($gas)
	{
		$this->gas = $gas;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getElectricity()
	{
		return $this->electricity;
	}


	/**
	 * @param boolean $electricity
	 *
	 * @return $this
	 */
	public function setElectricity($electricity)
	{
		$this->electricity = $electricity;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getBroadband()
	{
		return $this->broadband;
	}


	/**
	 * @param boolean $broadband
	 *
	 * @return $this
	 */
	public function setBroadband($broadband)
	{
		$this->broadband = $broadband;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getPhone()
	{
		return $this->phone;
	}


	/**
	 * @param boolean $phone
	 *
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getContentsInsurance()
	{
		return $this->contents_insurance;
	}


	/**
	 * @param boolean $contents_insurance
	 *
	 * @return $this
	 */
	public function setContentsInsurance($contents_insurance)
	{
		$this->contents_insurance = $contents_insurance;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getTvLicense()
	{
		return $this->tv_license;
	}


	/**
	 * @param boolean $tv_license
	 *
	 * @return $this
	 */
	public function setTvLicense($tv_license)
	{
		$this->tv_license = $tv_license;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getCouncilTax()
	{
		return $this->council_tax;
	}


	/**
	 * @param boolean $council_tax
	 *
	 * @return $this
	 */
	public function setCouncilTax($council_tax)
	{
		$this->council_tax = $council_tax;

		return $this;
	}
}

