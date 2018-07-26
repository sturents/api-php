<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Allows for "special offers" or other conditions to be
 * applied to a contract. Not currently saved or output by StuRents
 * but specified for future integrations
 */
class Restriction extends SwaggerModel
{
	/**
	 * The date that the contract this restriction
	 * belongs to may be purchased from in yyyy-mm-dd
	 *
	 * @var string
	 */
	private $start_date;

	/**
	 * The date that the contract this restriction
	 * belongs to may be purchased until in yyyy-mm-dd
	 *
	 * @var string
	 */
	private $end_date;

	/**
	 * A text block describing this restriction
	 * (e.g. "For home students only")
	 *
	 * @var string
	 */
	private $terms;

	/**
	 * Minimum days a student must be renting for
	 * the prices in this contract to be valid
	 *
	 * @var integer
	 */
	private $min_contract_days;


	/**
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->start_date;
	}


	/**
	 * @param string $start_date
	 *
	 * @return $this
	 */
	public function setStartDate($start_date)
	{
		$this->start_date = $start_date;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->end_date;
	}


	/**
	 * @param string $end_date
	 *
	 * @return $this
	 */
	public function setEndDate($end_date)
	{
		$this->end_date = $end_date;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTerms()
	{
		return $this->terms;
	}


	/**
	 * @param string $terms
	 *
	 * @return $this
	 */
	public function setTerms($terms)
	{
		$this->terms = $terms;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getMinContractDays()
	{
		return $this->min_contract_days;
	}


	/**
	 * @param integer $min_contract_days
	 *
	 * @return $this
	 */
	public function setMinContractDays($min_contract_days)
	{
		$this->min_contract_days = $min_contract_days;

		return $this;
	}
}

