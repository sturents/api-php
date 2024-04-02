<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class BookingStatusTenant extends SwaggerModel
{
	/**
	 * Full name of the user
	 * @var string
	 * @required
	 */
	protected $name;

	/**
	 * Email address of the user
	 * @var string
	 * @required
	 */
	protected $email;

	/**
	 * Phone number of the user
	 * @var string
	 * @required
	 */
	protected $phone;

	/**
	 * Indicates whether the user requires a guarantor
	 * @var boolean
	 * @required
	 */
	protected $guarantor_required;

	/**
	 * Start date of the contract
	 * @var string
	 * @required
	 */
	protected $contract_start_date;

	/**
	 * End date of the contract
	 * @var string
	 * @required
	 */
	protected $contract_end_date;

	/**
	 * Total contract duration in days
	 * @var integer
	 * @required
	 */
	protected $contract_length;

	/**
	 * Rent per week
	 * @var float
	 * @required
	 */
	protected $rent_pw;

	/**
	 * Total rent
	 * @var float
	 * @required
	 */
	protected $total_rent;

	/**
	 * Number of rent instalments due throughout the duration of the contract
	 * @var integer
	 * @required
	 */
	protected $rent_instalments;


	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}


	/**
	 * @param string $email
	 *
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}


	/**
	 * @param string $phone
	 *
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getGuarantorRequired()
	{
		return $this->guarantor_required;
	}


	/**
	 * @param boolean $guarantor_required
	 *
	 * @return $this
	 */
	public function setGuarantorRequired($guarantor_required)
	{
		$this->guarantor_required = $guarantor_required;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getContractStartDate()
	{
		return $this->contract_start_date;
	}


	/**
	 * @param string $contract_start_date
	 *
	 * @return $this
	 */
	public function setContractStartDate($contract_start_date)
	{
		$this->contract_start_date = $contract_start_date;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getContractEndDate()
	{
		return $this->contract_end_date;
	}


	/**
	 * @param string $contract_end_date
	 *
	 * @return $this
	 */
	public function setContractEndDate($contract_end_date)
	{
		$this->contract_end_date = $contract_end_date;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getContractLength()
	{
		return $this->contract_length;
	}


	/**
	 * @param integer $contract_length
	 *
	 * @return $this
	 */
	public function setContractLength($contract_length)
	{
		$this->contract_length = $contract_length;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getRentPw()
	{
		return $this->rent_pw;
	}


	/**
	 * @param float $rent_pw
	 *
	 * @return $this
	 */
	public function setRentPw($rent_pw)
	{
		$this->rent_pw = $rent_pw;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getTotalRent()
	{
		return $this->total_rent;
	}


	/**
	 * @param float $total_rent
	 *
	 * @return $this
	 */
	public function setTotalRent($total_rent)
	{
		$this->total_rent = $total_rent;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getRentInstalments()
	{
		return $this->rent_instalments;
	}


	/**
	 * @param integer $rent_instalments
	 *
	 * @return $this
	 */
	public function setRentInstalments($rent_instalments)
	{
		$this->rent_instalments = $rent_instalments;

		return $this;
	}
}
