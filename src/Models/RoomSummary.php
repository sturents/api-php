<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * An estimate of rooms available for the duration of this contract, updated nightly
 */
class RoomSummary extends SwaggerModel
{
	/**
	 * The number of rooms available for the duration of this contract
	 *
	 * @var int
	 */
	protected $room_count = 0;

	/**
	 * Date and time that the room summary was last updated
	 *
	 * @var string
	 */
	protected $last_updated = '';


	/**
	 * @return int
	 */
	public function getRoomCount()
	{
		return $this->room_count;
	}


	/**
	 * @param int $room_count
	 *
	 * @return $this
	 */
	public function setRoomCount($room_count)
	{
		$this->room_count = $room_count;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getLastUpdated()
	{
		return $this->last_updated;
	}


	/**
	 * @param string $last_updated
	 *
	 * @return $this
	 */
	public function setLastUpdated($last_updated)
	{
		$this->last_updated = $last_updated;

		return $this;
	}
}
