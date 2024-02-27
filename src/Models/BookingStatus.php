<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Basic contract information and booking status.
 */
class BookingStatus extends SwaggerModel
{
	/**
	 * Full name of the user who initiated the booking
	 * @var string
	 */
	protected $tenant_name = '';

	/**
	 * Identifier provided in the redirect URL when the user initiated the booking
	 * @var string
	 */
	protected $tenant_id = '';

	/**
	 * Generated unique identifier, this will be the same as the tenant_id unless the same identifier has been provided for multiple bookings.
	 * @var string
	 */
	protected $unique_tenant_id = '';

	/**
	 * Email address of the user who initiated the booking
	 * @var string
	 */
	protected $tenant_email = '';

	/**
	 * Phone number of the user who initiated the booking
	 * @var string
	 */
	protected $tenant_phone = '';

	/**
	 * 1|0, indicates whether the contract requires a guarantor
	 * @var int
	 */
	protected $guarantor_required = 0;

	/**
	 * Name of the booking's property manager
	 * @var string
	 */
	protected $property_manager_name = '';

	/**
	 * Address of the property used in the booking
	 * @var string
	 */
	protected $property_address = '';

	/**
	 * Start date of the contract
	 * @var string
	 */
	protected $contract_start_date = '';

	/**
	 * End date of the contract
	 * @var string
	 */
	protected $contract_end_date = '';

	/**
	 * Total contract duration in days
	 * @var int
	 */
	protected $contract_length = 0;

	/**
	 * Total rent per person per week
	 * @var float
	 */
	protected $rent_pppw = 0.0;

	/**
	 * Title of the availability selected for the booking
	 * @var string
	 */
	protected $booking_option = '';

	/**
	 * Contract's currency code
	 * @var string
	 */
	protected $currency = '';

	/**
	 * Total monetary value of the contract
	 * @var float
	 */
	protected $total_contract_value = 0.0;

	/**
	 * Number of tenants included in the booking
	 * @var int
	 */
	protected $tenancy_size = 0;

	/**
	 * Number of rent instalments due throughout the duration of the contract
	 * @var float
	 */
	protected $rent_instalments = 0.0;

	/**
	 * Date and time that the contract was created
	 * @var string
	 */
	protected $created_datetime = '';

	/**
	 * Status of the booking
	 * @var string
	 */
	protected $booking_status = '';

	/**
	 * Date and time that the booking will expire if not signed by the tenant
	 * @var string
	 */
	protected $booking_expiry_datetime = '';


	/**
	 * @return string
	 */
	public function getTenantName()
	{
		return $this->tenant_name;
	}


	/**
	 * @param string $tenant_name
	 *
	 * @return $this
	 */
	public function setTenantName($tenant_name)
	{
		$this->tenant_name = $tenant_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTenantId()
	{
		return $this->tenant_id;
	}


	/**
	 * @param string $tenant_id
	 *
	 * @return $this
	 */
	public function setTenantId($tenant_id)
	{
		$this->tenant_id = $tenant_id;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getUniqueTenantId()
	{
		return $this->unique_tenant_id;
	}


	/**
	 * @param string $unique_tenant_id
	 *
	 * @return $this
	 */
	public function setUniqueTenantId($unique_tenant_id)
	{
		$this->unique_tenant_id = $unique_tenant_id;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTenantEmail()
	{
		return $this->tenant_email;
	}


	/**
	 * @param string $tenant_email
	 *
	 * @return $this
	 */
	public function setTenantEmail($tenant_email)
	{
		$this->tenant_email = $tenant_email;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTenantPhone()
	{
		return $this->tenant_phone;
	}


	/**
	 * @param string $tenant_phone
	 *
	 * @return $this
	 */
	public function setTenantPhone($tenant_phone)
	{
		$this->tenant_phone = $tenant_phone;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getGuarantorRequired()
	{
		return $this->guarantor_required;
	}


	/**
	 * @param float $guarantor_required
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
	public function getPropertyManagerName()
	{
		return $this->property_manager_name;
	}


	/**
	 * @param string $property_manager_name
	 *
	 * @return $this
	 */
	public function setPropertyManagerName($property_manager_name)
	{
		$this->property_manager_name = $property_manager_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getPropertyAddress()
	{
		return $this->property_address;
	}


	/**
	 * @param string $property_address
	 *
	 * @return $this
	 */
	public function setPropertyAddress($property_address)
	{
		$this->property_address = $property_address;

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
	 * @return float
	 */
	public function getContractLength()
	{
		return $this->contract_length;
	}


	/**
	 * @param float $contract_length
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
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}


	/**
	 * @param string $currency
	 *
	 * @return $this
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;

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
	 * @return float
	 */
	public function getTenancySize()
	{
		return $this->tenancy_size;
	}


	/**
	 * @param float $tenancy_size
	 *
	 * @return $this
	 */
	public function setTenancySize($tenancy_size)
	{
		$this->tenancy_size = $tenancy_size;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getRentInstalments()
	{
		return $this->rent_instalments;
	}


	/**
	 * @param float $rent_instalments
	 *
	 * @return $this
	 */
	public function setRentInstalments($rent_instalments)
	{
		$this->rent_instalments = $rent_instalments;

		return $this;
	}


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
	public function getBookingStatus()
	{
		return $this->booking_status;
	}


	/**
	 * @param string $booking_status
	 *
	 * @return $this
	 */
	public function setBookingStatus($booking_status)
	{
		$this->booking_status = $booking_status;

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
