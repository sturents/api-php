<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * A schedule that can be used to pay rent for a contract, with specific
 * rules regarding whether it requires a guarantor or allows use of Housing Hand
 */
class ScheduleOption extends SwaggerModel
{
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
}

