<?php

namespace SturentsLib\Api\Models;

use SturentsLib\Api\Model;

class Deposit extends Model {
	/**
	 * @var float
	 * @required
	 */
	protected $amount;
	/**
	 * @var string
	 * @required
	 */
	protected $amount_per;
	/**
	 * @var string
	 * @required
	 */
	protected $deposit_provider;

	/**
	 * @return float
	 */
	public function getAmount(){
		return $this->amount;
	}

	/**
	 * @param float $amount
	 * @return Deposit
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
	 * @return Deposit
	 */
	public function setAmountPer($amount_per){
		$this->amount_per = $amount_per;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDepositProvider(){
		return $this->deposit_provider;
	}

	/**
	 * @param string $deposit_provider
	 * @return Deposit
	 */
	public function setDepositProvider($deposit_provider){
		$this->deposit_provider = $deposit_provider;

		return $this;
	}
}
