<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * The contract object submitted to create or update a contract.
 * Allows setting a template/schedule ID field and has a room price
 * array allowing linking of prices to specific rooms
 */
class ContractCreation extends ContractAbstract
{
	/**
	 *   A contract may be temporarily unavailable for some reason; this field
	 *	 allows setting or reading that status. API consumers may want to discard
	 *	 contracts with this setting, or may want to display a different status to
	 *	 users. If this is set to true then the Contract is not available, but can
	 *	 still be edited. Being not available means it is not returned for
	 *	 GET /properties requests, and Book Now URLs will not work for it. API senders
	 *	 might tie this to a similar internal status, but this should not be used to
	 *	 permanently remove a Contract - use the DELETE method instead for that purpose.
	 *
	 * @var boolean
	 */
	protected $disabled;

	/**
	 * A unique identifier for a Tenancy Template fetched from
	 * the /contract-templates endpoint. A tenancy template
	 * allows a tenancy to be created for tenants who are renting
	 * the property and can sign for it on StuRents
	 *
	 * @var string
	 */
	protected $template_id;

	/**
	 * An array of one or more ScheduleOption entities describing how
	 * the rent for this contract can be structured and what additional
	 * conditions are applied.
	 *
	 * @var ScheduleOption[]
	 */
	protected $schedules;

	/**
	 * Describes whether this contract may be booked directly via
	 * the StuRents platform. Setting this to true does not guarantee
	 * that "book now" buttons will be available for the Contract,
	 * as other conditions for the Property and the Property Manager's
	 * account can also affect this. However if this is set to "false"
	 * then "book now" is definitely NOT available for this Contract
	 * regardless of other settings
	 *
	 * @var boolean
	 */
	protected $book_now_allowed;

	/**
	 * Contracts can assign different prices per room or the same
	 * price to all rooms. To assign different prices per room this
	 * array must contain one PriceRoom object per room in the
	 * property. To assign the same price to all rooms, leave this
	 * array empty and instead submit a Price object
	 *
	 * @var PriceRoom[]
	 */
	protected $room_prices;

	/**
	 * @var Price
	 */
	protected $price;


	/**
	 * @return boolean
	 */
	public function getDisabled()
	{
		return $this->disabled;
	}


	/**
	 * @param boolean $disabled
	 *
	 * @return $this
	 */
	public function setDisabled($disabled)
	{
		$this->disabled = $disabled;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getTemplateId()
	{
		return $this->template_id;
	}


	/**
	 * @param string $template_id
	 *
	 * @return $this
	 */
	public function setTemplateId($template_id)
	{
		$this->template_id = $template_id;

		return $this;
	}


	/**
	 * @return ScheduleOption[]
	 */
	public function getSchedules()
	{
		return $this->schedules;
	}


	/**
	 * @param ScheduleOption[] $schedules
	 *
	 * @return $this
	 */
	public function setSchedules(array $schedules)
	{
		$this->schedules = $schedules;

		return $this;
	}


	/**
	 * @param ScheduleOption $schedule
	 *
	 * @return $this
	 */
	public function addSchedule(ScheduleOption $schedule)
	{
		$this->schedules[] = $schedule;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getBookNowAllowed()
	{
		return $this->book_now_allowed;
	}


	/**
	 * @param boolean $book_now_allowed
	 *
	 * @return $this
	 */
	public function setBookNowAllowed($book_now_allowed)
	{
		$this->book_now_allowed = $book_now_allowed;

		return $this;
	}


	/**
	 * @return PriceRoom[]
	 */
	public function getRoomPrices()
	{
		return $this->room_prices;
	}


	/**
	 * @param PriceRoom[] $room_prices
	 *
	 * @return $this
	 */
	public function setRoomPrices(array $room_prices)
	{
		$this->room_prices = $room_prices;

		return $this;
	}


	/**
	 * @param PriceRoom $room_price
	 *
	 * @return $this
	 */
	public function addRoomPrice(PriceRoom $room_price)
	{
		$this->room_prices[] = $room_price;

		return $this;
	}


	/**
	 * @return Price
	 */
	public function getPrice()
	{
		return $this->price;
	}


	/**
	 * @param Price $price
	 *
	 * @return $this
	 */
	public function setPrice(Price $price)
	{
		$this->price = $price;

		return $this;
	}
}
