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
