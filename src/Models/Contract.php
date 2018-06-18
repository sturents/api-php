<?php

namespace Sturents\Api\Models;

class Contract {
	/**
	 * @var Price
	 * @required
	 */
	private $price;
	/**
	 * @var Deposit
	 * @required
	 */
	private $deposit;
	/**
	 * @var Restriction[]
	 * @required
	 */
	private $restrictions = [];
	/**
	 * @var Available
	 * @required
	 */
	private $available;

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
