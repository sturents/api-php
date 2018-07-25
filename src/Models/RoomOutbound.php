<?php

namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * A Room object fetched from the GET /rooms/{property_id} endpoint
 * which provides a room_id field to edit or delete the room
 */
class RoomOutbound extends Room
{
	/**
	 * A unique ID for this Room object which can be used to allow
	 * edit/delete of this room and also to attach pricing to the
	 * Room using the RoomPrice object when creating/updating a
	 * Contract object
	 *
	 * @var string
	 */
	private $room_id;


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

