<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class PaymentSchedule extends SwaggerModel
{
	/**
	 * Title entered when creating this schedule
	 * within the StuRents website
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * Pass this as the "schedule_id" field when creating/updating a contract
	 *
	 * @var string
	 */
	protected $schedule_id;


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
}
