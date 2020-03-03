<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class RoomSaved extends SwaggerModel
{
	/**
	 * Unique reference to the Room on StuRents
	 * @var string
	 */
	protected $room_id = '';


	/**
	 * @return string
	 */
	public function getRoomId()
	{
		return $this->room_id;
	}


	/**
	 * @param string $room_id
	 *
	 * @return $this
	 */
	public function setRoomId($room_id)
	{
		$this->room_id = $room_id;

		return $this;
	}
}
