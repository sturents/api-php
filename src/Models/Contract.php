<?php

namespace SturentsLib\Api\Models;

use SturentsLib\Api\Model;

class Contract extends Model {
	/**
	 * @var Price
	 * @required
	 */
	protected $price;
	/**
	 * @var Deposit
	 * @required
	 */
	protected $deposit;
	/**
	 * @var Restriction[]
	 * @required
	 */
	protected $restrictions = [];
	/**
	 * @var Available
	 * @required
	 */
	protected $available;

	/**
	 * @return Price
	 */
	public function getPrice(){
		return $this->price;
	}

	/**
	 * @param Price $price
	 *
	 * @return Contract
	 */
	public function setPrice(Price $price){
		$this->price = $price;

		return $this;
	}

	/**
	 * @return Deposit
	 */
	public function getDeposit(){
		return $this->deposit;
	}

	/**
	 * @param Deposit $deposit
	 *
	 * @return Contract
	 */
	public function setDeposit(Deposit $deposit){
		$this->deposit = $deposit;

		return $this;
	}

	/**
	 * @return Restriction[]
	 */
	public function getRestrictions(){
		return $this->restrictions;
	}

	/**
	 * @param Restriction[] $restrictions
	 *
	 * @return Contract
	 * @internal
	 */
	public function setRestrictions(array $restrictions){
		$this->restrictions = $restrictions;

		return $this;
	}

	/**
	 * @param Restriction $restriction
	 *
	 * @return Contract
	 */
	public function addRestriction(Restriction $restriction){
		$this->restrictions[] = $restriction;

		return $this;
	}

	/**
	 * @return Available
	 */
	public function getAvailable(){
		return $this->available;
	}

	/**
	 * @param Available $available
	 *
	 * @return Contract
	 */
	public function setAvailable($available){
		$this->available = $available;

		return $this;
	}
}
