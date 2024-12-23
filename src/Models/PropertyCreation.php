<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class PropertyCreation extends Property
{
	/**
	 * A number of rooms to generate for the property.
	 * Cannot be zero.
	 * If desired to add rooms manually as soon as the property
	 * is created, set this to -1
	 *
	 * @var int
	 * @required
	 */
	protected $initial_rooms;


	/**
	 * @return int
	 */
	public function getInitialRooms()
	{
		return $this->initial_rooms;
	}


	/**
	 * @param int $initial_rooms
	 *
	 * @return $this
	 */
	public function setInitialRooms($initial_rooms)
	{
		$this->initial_rooms = $initial_rooms;

		return $this;
	}
}
