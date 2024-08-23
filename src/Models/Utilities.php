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
	 * @var bool
	 */
	protected $water = false;

	/**
	 * @var bool
	 */
	protected $gas = false;

	/**
	 * @var bool
	 */
	protected $electricity = false;

	/**
	 * @var bool
	 */
	protected $broadband = false;

	/**
	 * @var bool
	 */
	protected $phone = false;

	/**
	 * @var bool
	 */
	protected $contents_insurance = false;

	/**
	 * @var bool
	 */
	protected $tv_license = false;

	/**
	 * @var bool
	 */
	protected $council_tax = false;


	/**
	 * @return bool
	 */
	public function getWater()
	{
		return $this->water;
	}


	/**
	 * @param bool $water
	 *
	 * @return $this
	 */
	public function setWater($water)
	{
		$this->water = $water;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getGas()
	{
		return $this->gas;
	}


	/**
	 * @param bool $gas
	 *
	 * @return $this
	 */
	public function setGas($gas)
	{
		$this->gas = $gas;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getElectricity()
	{
		return $this->electricity;
	}


	/**
	 * @param bool $electricity
	 *
	 * @return $this
	 */
	public function setElectricity($electricity)
	{
		$this->electricity = $electricity;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getBroadband()
	{
		return $this->broadband;
	}


	/**
	 * @param bool $broadband
	 *
	 * @return $this
	 */
	public function setBroadband($broadband)
	{
		$this->broadband = $broadband;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getPhone()
	{
		return $this->phone;
	}


	/**
	 * @param bool $phone
	 *
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getContentsInsurance()
	{
		return $this->contents_insurance;
	}


	/**
	 * @param bool $contents_insurance
	 *
	 * @return $this
	 */
	public function setContentsInsurance($contents_insurance)
	{
		$this->contents_insurance = $contents_insurance;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getTvLicense()
	{
		return $this->tv_license;
	}


	/**
	 * @param bool $tv_license
	 *
	 * @return $this
	 */
	public function setTvLicense($tv_license)
	{
		$this->tv_license = $tv_license;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getCouncilTax()
	{
		return $this->council_tax;
	}


	/**
	 * @param bool $council_tax
	 *
	 * @return $this
	 */
	public function setCouncilTax($council_tax)
	{
		$this->council_tax = $council_tax;

		return $this;
	}
}
