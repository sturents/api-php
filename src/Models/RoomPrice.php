<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * A RoomPrice object for creating or updating a price, also allows setting
 * the room_id value to a unique room ID from a GET /rooms/{property_id} request
 */
class RoomPrice extends Price
{
	/**
	 * Describes which room this price refers to
	 *
	 * @var string
	 */
	protected $room_id;


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
