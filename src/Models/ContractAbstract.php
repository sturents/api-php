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
	 * The earliest date at which it is possible to move in to the property
	 * in yyyy-mm-dd format
	 *
	 * @var string
	 * @required
	 */
	protected $start_date;

	/**
	 * The latest date at which it is possible to vacate the property
	 * in yyyy-mm-dd format
	 *
	 * @var string
	 * @required
	 */
	protected $end_date;

	/**
	 * Is true if the availability is restricted
	 * @var bool
	 */
	protected $restricted = false;

	/**
	 * The discount value of the promotion for this contract
	 *
	 * @var float
	 */
	protected $promo_value = 0.0;

	/**
	 * Reporting code for tracking promotion usage. Will appear in the Tenants report in Report Builder on the StuRents platform
	 *
	 * @var string
	 */
	protected $restricted_code = '';

	/**
	 * The minimum time a tenant may rent the property for in days
	 *
	 * @var int
	 * @required
	 */
	protected $min_contract_days;

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
	 * @return bool
	 */
	public function getRestricted()
	{
		return $this->restricted;
	}


	/**
	 * @param bool $restricted
	 *
	 * @return $this
	 */
	public function setRestricted($restricted)
	{
		$this->restricted = $restricted;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getPromoValue()
	{
		return $this->promo_value;
	}


	/**
	 * @param float $promo_value
	 *
	 * @return $this
	 */
	public function setPromoValue($promo_value)
	{
		$this->promo_value = $promo_value;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getRestrictedCode()
	{
		return $this->restricted_code;
	}


	/**
	 * @param string $restricted_code
	 *
	 * @return $this
	 */
	public function setRestrictedCode($restricted_code)
	{
		$this->restricted_code = $restricted_code;

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
