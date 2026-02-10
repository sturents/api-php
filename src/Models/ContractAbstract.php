<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Basic contract details which are extended by both inbound and outbound
 * data with objects which extend ContractBasic
 */
class ContractAbstract extends SwaggerModel
{
	/**
	 * The name given to this contract
	 * @var string
	 * @required
	 */
	protected $title;

	/**
	 * If true, the contract is fixed-term. If false, the contract is rolling (periodic)
	 *
	 * @var bool
	 * @required
	 */
	protected $is_fixed_term;

	/**
	 * The earliest date at which it is possible to move in to the property
	 * in yyyy-mm-dd format
	 *
	 * @var string
	 * @required
	 */
	protected $start_date;

	/**
	 * The latest date at which it is possible to move in to the property for a rolling contract. This is required if is_fixed_term is false.
	 *
	 * @var string
	 */
	protected $latest_start_date = '';

	/**
	 * The latest date at which it is possible to vacate the property
	 * in yyyy-mm-dd format for a fixed-term contract. This is required if is_fixed_term is true.
	 *
	 * @var string
	 */
	protected $end_date = '';

	/**
	 * The minimum time a tenant may rent the property for in days
	 * for a fixed-term contract. This is required if is_fixed_term is true.
	 *
	 * @var int
	 */
	protected $min_contract_days = 0;

	/**
	 * The day of the month that rent is due for rolling contracts. Valid day values are 1 to 28. This is required if is_fixed_term is false.
	 *
	 * @var int
	 */
	protected $monthly_payment_day = 0;

	/**
	 * @var Utilities
	 */
	protected $utilities;

	/**
	 * Zero or more restrictions
	 * @var Restriction[]
	 */
	protected $restrictions = [];


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
	 * @return bool
	 */
	public function getIsFixedTerm()
	{
		return $this->is_fixed_term;
	}


	/**
	 * @param bool $is_fixed_term
	 *
	 * @return $this
	 */
	public function setIsFixedTerm($is_fixed_term)
	{
		$this->is_fixed_term = $is_fixed_term;

		return $this;
	}


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
	public function getLatestStartDate()
	{
		return $this->latest_start_date;
	}


	/**
	 * @param string $latest_start_date
	 *
	 * @return $this
	 */
	public function setLatestStartDate($latest_start_date)
	{
		$this->latest_start_date = $latest_start_date;

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
	 * @return int
	 */
	public function getMinContractDays()
	{
		return $this->min_contract_days;
	}


	/**
	 * @param int $min_contract_days
	 *
	 * @return $this
	 */
	public function setMinContractDays($min_contract_days)
	{
		$this->min_contract_days = $min_contract_days;

		return $this;
	}


	/**
	 * @return int
	 */
	public function getMonthlyPaymentDay()
	{
		return $this->monthly_payment_day;
	}


	/**
	 * @param int $monthly_payment_day
	 *
	 * @return $this
	 */
	public function setMonthlyPaymentDay($monthly_payment_day)
	{
		$this->monthly_payment_day = $monthly_payment_day;

		return $this;
	}


	/**
	 * @return Utilities
	 */
	public function getUtilities()
	{
		return $this->utilities;
	}


	/**
	 * @param Utilities $utilities
	 *
	 * @return $this
	 */
	public function setUtilities(Utilities $utilities)
	{
		$this->utilities = $utilities;

		return $this;
	}


	/**
	 * @return Restriction[]
	 */
	public function getRestrictions()
	{
		return $this->restrictions;
	}


	/**
	 * @param Restriction[] $restrictions
	 *
	 * @return $this
	 */
	public function setRestrictions(array $restrictions)
	{
		$this->restrictions = $restrictions;

		return $this;
	}


	/**
	 * @param Restriction $restriction
	 *
	 * @return $this
	 */
	public function addRestriction(Restriction $restriction)
	{
		$this->restrictions[] = $restriction;

		return $this;
	}
}
