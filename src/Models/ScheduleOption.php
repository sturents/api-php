<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * A schedule that can be used to pay rent for a contract, with specific
 * rules regarding whether it requires a guarantor
 */
class ScheduleOption extends SwaggerModel
{
	/**
	 * A unique identifier for a Payment Schedule fetched from the
	 * /payment-structures endpoint. A payment schedule allows a rent
	 * collection to be created for tenants to pay their rent via
	 * the StuRents platform, and may also impact tenancy generation
	 * with the schedule shown in the signed contract
	 *
	 * @var string
	 * @required
	 */
	protected $schedule_id;

	/**
	 * When a tenancy is created this states whether a guarantor
	 * is required, if set to true, not required if set to false.
	 *
	 * @var bool
	 * @required
	 */
	protected $require_guarantor;


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
	 * @return bool
	 */
	public function getRequireGuarantor()
	{
		return $this->require_guarantor;
	}


	/**
	 * @param bool $require_guarantor
	 *
	 * @return $this
	 */
	public function setRequireGuarantor($require_guarantor)
	{
		$this->require_guarantor = $require_guarantor;

		return $this;
	}
}
