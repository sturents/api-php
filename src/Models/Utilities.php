<?php

namespace SturentsLib\Api\Models;

use SturentsLib\Api\Model;

class Utilities extends Model {
	/**
	 * @var bool
	 * @required
	 */
	protected $water;
	/**
	 * @var bool
	 * @required
	 */
	protected $gas;
	/**
	 * @var bool
	 * @required
	 */
	protected $electricity;
	/**
	 * @var bool
	 * @required
	 */
	protected $broadband;
	/**
	 * @var bool
	 * @required
	 */
	protected $phone;
	/**
	 * @var bool
	 * @required
	 */
	protected $contents_insurance;

	/**
	 * @return boolean
	 */
	public function isWater(){
		return $this->water;
	}

	/**
	 * @param boolean $water
	 * @return Utilities
	 */
	public function setWater($water){
		$this->water = $water;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isGas(){
		return $this->gas;
	}

	/**
	 * @param boolean $gas
	 * @return Utilities
	 */
	public function setGas($gas){
		$this->gas = $gas;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isElectricity(){
		return $this->electricity;
	}

	/**
	 * @param boolean $electricity
	 * @return Utilities
	 */
	public function setElectricity($electricity){
		$this->electricity = $electricity;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isBroadband(){
		return $this->broadband;
	}

	/**
	 * @param boolean $broadband
	 * @return Utilities
	 */
	public function setBroadband($broadband){
		$this->broadband = $broadband;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isPhone(){
		return $this->phone;
	}

	/**
	 * @param boolean $phone
	 * @return Utilities
	 */
	public function setPhone($phone){
		$this->phone = $phone;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isContentsInsurance(){
		return $this->contents_insurance;
	}

	/**
	 * @param boolean $contents_insurance
	 * @return Utilities
	 */
	public function setContentsInsurance($contents_insurance){
		$this->contents_insurance = $contents_insurance;

		return $this;
	}
}
