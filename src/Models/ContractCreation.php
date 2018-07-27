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
	 * A unique identifier for a Contract Template fetched from
	 * the /contract-templates endpoint. A contract template
	 * allows a tenancy to be created for tenants who are renting
	 * the property and can sign for it on StuRents
	 *
	 * @var string
	 */
	protected $template_id;

	/**
	 * A unique identifier for a Payment Schedule fetched from the
	 * /payment-schedules endpoint. A payment schedule allows a rent
	 * collection to be created for tenants to pay their rent via
	 * the StuRents platform, and may also impact tenancy generation
	 * with the schedule shown in the signed contract
	 *
	 * @var string
	 */
	protected $schedule_id;

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
	 * When a tenancy is created this states whether a guarantor
	 * is required, if set to true, not required if set to false.
	 *
	 * @var boolean
	 */
	protected $require_guarantor;

	/**
	 * The Housing Hand service is a partnership offered by StuRents
	 * in order to provide guarantors for tenants who are otherwise
	 * unable to acquire one. When a tenancy is created this field
	 * states whether Housing Hand is permitted, if set to true,
	 * not permitted if set to false.
	 *
	 * @var boolean
	 */
	protected $housing_hand;

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
	 * @return string
	 */
	public function getScheduleId()
	{
		return $this->schedule_id;
	}


	/**
	 * @param string $schedule_id
	 *
	 * @return $this
	 */
	public function setScheduleId($schedule_id)
	{
		$this->schedule_id = $schedule_id;

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
	 * @return boolean
	 */
	public function getRequireGuarantor()
	{
		return $this->require_guarantor;
	}


	/**
	 * @param boolean $require_guarantor
	 *
	 * @return $this
	 */
	public function setRequireGuarantor($require_guarantor)
	{
		$this->require_guarantor = $require_guarantor;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getHousingHand()
	{
		return $this->housing_hand;
	}


	/**
	 * @param boolean $housing_hand
	 *
	 * @return $this
	 */
	public function setHousingHand($housing_hand)
	{
		$this->housing_hand = $housing_hand;

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

