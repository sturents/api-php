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
	 * Identifier provided in the redirect URL when the user initiated the booking
	 * @var string
	 * @required
	 */
	protected $booking_id;

	/**
	 * Generated unique identifier, this will be the same as the booking_id unless the same identifier has been provided for multiple bookings.
	 * @var string
	 * @required
	 */
	protected $unique_booking_id;

	/**
	 * Status of the booking
	 * @var string
	 * @required
	 */
	protected $booking_status;

	/**
	 * Details of the booking's property manager
	 * @var BookingStatusPropertyManager
	 * @required
	 */
	protected $property_manager;

	/**
	 * Address of the property used in the booking
	 * @var BookingStatusAddress
	 * @required
	 */
	protected $property_address;

	/**
	 * Contract's currency code
	 * @var string
	 * @required
	 */
	protected $currency;

	/**
	 * List of users involved in booking
	 * @var BookingStatusTenant[]
	 * @required
	 */
	protected $tenants;

	/**
	 * @var ?BookingStatusTenancy
	 * @required
	 */
	protected $tenancy;


	/**
	 * @return string
	 */
	public function getBookingId()
	{
		return $this->booking_id;
	}


	/**
	 * @param string $booking_id
	 *
	 * @return $this
	 */
	public function setBookingId($booking_id)
	{
		$this->booking_id = $booking_id;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getUniqueBookingId()
	{
		return $this->unique_booking_id;
	}


	/**
	 * @param string $unique_booking_id
	 *
	 * @return $this
	 */
	public function setUniqueBookingId($unique_booking_id)
	{
		$this->unique_booking_id = $unique_booking_id;

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
	 * @return BookingStatusPropertyManager
	 */
	public function getPropertyManager()
	{
		return $this->property_manager;
	}


	/**
	 * @param BookingStatusPropertyManager $property_manager
	 *
	 * @return $this
	 */
	public function setPropertyManager(BookingStatusPropertyManager $property_manager)
	{
		$this->property_manager = $property_manager;

		return $this;
	}


	/**
	 * @return BookingStatusAddress
	 */
	public function getPropertyAddress()
	{
		return $this->property_address;
	}


	/**
	 * @param BookingStatusAddress $property_address
	 *
	 * @return $this
	 */
	public function setPropertyAddress(BookingStatusAddress $property_address)
	{
		$this->property_address = $property_address;

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
	 * @return BookingStatusTenant[]
	 */
	public function getTenants()
	{
		return $this->tenants;
	}


	/**
	 * @param BookingStatusTenant[] $tenants
	 *
	 * @return $this
	 */
	public function setTenants(array $tenants)
	{
		$this->tenants = $tenants;

		return $this;
	}


	/**
	 * @param BookingStatusTenant $tenant
	 *
	 * @return $this
	 */
	public function addTenant(BookingStatusTenant $tenant)
	{
		$this->tenants[] = $tenant;

		return $this;
	}


	/**
	 * @return ?BookingStatusTenancy
	 */
	public function getTenancy()
	{
		return $this->tenancy;
	}


	/**
	 * @param ?BookingStatusTenancy $tenancy
	 *
	 * @return $this
	 */
	public function setTenancy(?BookingStatusTenancy $tenancy)
	{
		$this->tenancy = $tenancy;

		return $this;
	}
}
