<?php

namespace SturentsLib\Api\Models;

use SturentsLib\Api\Model;

class Price extends Model {
	/**
	 * @var float
	 */
	protected $amount;
	/**
	 * @var string
	 */
	protected $amount_per;
	/**
	 * @var string
	 * @required
	 */
	protected $time_period;
	/**
	 * @var Utilities
	 * @required
	 */
	protected $utilities;

	/**
	 * @return Utilities
	 */
	public function getUtilities(){
		return $this->utilities;
	}

	/**
	 * @param Utilities $utilities
	 *
	 * @return Price
	 */
	public function setUtilities(Utilities $utilities){
		$this->utilities = $utilities;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getAmount(){
		return $this->amount;
	}

	/**
	 * @param float $amount
	 * @return Price
	 */
	public function setAmount($amount){
		$this->amount = $amount;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAmountPer(){
		return $this->amount_per;
	}

	/**
	 * @param string $amount_per
	 * @return Price
	 */
	public function setAmountPer($amount_per){
		$this->amount_per = $amount_per;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTimePeriod(){
		return $this->time_period;
	}

	/**
	 * @param string $time_period
	 * @return Price
	 */
	public function setTimePeriod($time_period){
		$this->time_period = $time_period;

		return $this;
	}
}
