<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Restriction extends Model {
	/**
	 * @var string
	 * @required
	 */
	protected $start_date;
	/**
	 * @var string
	 * @required
	 */
	protected $end_date;
	/**
	 * @var string
	 * @required
	 */
	protected $terms;
	/**
	 * @var int
	 */
	protected $min_contract_days;

	/**
	 * @return string
	 */
	public function getStartDate(){
		return $this->start_date;
	}

	/**
	 * @param string $start_date
	 * @return Restriction
	 */
	public function setStartDate($start_date){
		$this->start_date = $start_date;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEndDate(){
		return $this->end_date;
	}

	/**
	 * @param string $end_date
	 * @return Restriction
	 */
	public function setEndDate($end_date){
		$this->end_date = $end_date;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTerms(){
		return $this->terms;
	}

	/**
	 * @param string $terms
	 * @return Restriction
	 */
	public function setTerms($terms){
		$this->terms = $terms;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getMinContractDays(){
		return $this->min_contract_days;
	}

	/**
	 * @param int $min_contract_days
	 * @return Restriction
	 */
	public function setMinContractDays($min_contract_days){
		$this->min_contract_days = $min_contract_days;

		return $this;
	}
}
