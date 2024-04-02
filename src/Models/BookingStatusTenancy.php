<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class BookingStatusTenancy extends SwaggerModel
{
	/**
	 * Date and time that the contract was created
	 * @var string
	 * @required
	 */
	protected $created_datetime;

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
	 * Total rent per person per week
	 * @var float
	 * @required
	 */
	protected $rent_pppw;

	/**
	 * Title of the availability selected for the booking
	 * @var string
	 * @required
	 */
	protected $booking_option;

	/**
	 * Total monetary value of the contract
	 * @var float
	 * @required
	 */
	protected $total_contract_value;

	/**
	 * Number of tenants included in the booking
	 * @var integer
	 * @required
	 */
	protected $tenancy_size;

	/**
	 * Date and time that the booking will expire if not signed by the tenant
	 * @var string
	 * @required
	 */
	protected $booking_expiry_datetime;


	/**
	 * @return string
	 */
	public function getCreatedDatetime()
	{
		return $this->created_datetime;
	}


	/**
	 * @param string $created_datetime
	 *
	 * @return $this
	 */
	public function setCreatedDatetime($created_datetime)
	{
		$this->created_datetime = $created_datetime;

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
	public function getRentPppw()
	{
		return $this->rent_pppw;
	}


	/**
	 * @param float $rent_pppw
	 *
	 * @return $this
	 */
	public function setRentPppw($rent_pppw)
	{
		$this->rent_pppw = $rent_pppw;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getBookingOption()
	{
		return $this->booking_option;
	}


	/**
	 * @param string $booking_option
	 *
	 * @return $this
	 */
	public function setBookingOption($booking_option)
	{
		$this->booking_option = $booking_option;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getTotalContractValue()
	{
		return $this->total_contract_value;
	}


	/**
	 * @param float $total_contract_value
	 *
	 * @return $this
	 */
	public function setTotalContractValue($total_contract_value)
	{
		$this->total_contract_value = $total_contract_value;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getTenancySize()
	{
		return $this->tenancy_size;
	}


	/**
	 * @param integer $tenancy_size
	 *
	 * @return $this
	 */
	public function setTenancySize($tenancy_size)
	{
		$this->tenancy_size = $tenancy_size;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getBookingExpiryDatetime()
	{
		return $this->booking_expiry_datetime;
	}


	/**
	 * @param string $booking_expiry_datetime
	 *
	 * @return $this
	 */
	public function setBookingExpiryDatetime($booking_expiry_datetime)
	{
		$this->booking_expiry_datetime = $booking_expiry_datetime;

		return $this;
	}
}
