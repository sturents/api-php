<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Basic room details for creating or updating a room
 */
class Room extends SwaggerModel
{
	/**
	 * Can be precise, e.g. 1a, or descriptive e.g. "downstairs front"
	 *
	 * @var string
	 */
	protected $room_name = '';

	/**
	 * Intended for "pbsa" designation where floor number or classification
	 * is relevant
	 *
	 * @var string
	 */
	protected $floor = '';

	/**
	 * Floor space of the room in metres squared
	 *
	 * @var float
	 */
	protected $floor_space = 0.0;

	/**
	 * "True" if the room should be advertised as accessible
	 *
	 * @var bool
	 */
	protected $disabled_access = false;

	/**
	 * "True" if an en-suite bathroom is present for the room
	 *
	 * @var bool
	 */
	protected $ensuite = false;


	/**
	 * @return string
	 */
	public function getRoomName()
	{
		return $this->room_name;
	}


	/**
	 * @param string $room_name
	 *
	 * @return $this
	 */
	public function setRoomName($room_name)
	{
		$this->room_name = $room_name;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getFloor()
	{
		return $this->floor;
	}


	/**
	 * @param string $floor
	 *
	 * @return $this
	 */
	public function setFloor($floor)
	{
		$this->floor = $floor;

		return $this;
	}


	/**
	 * @return float
	 */
	public function getFloorSpace()
	{
		return $this->floor_space;
	}


	/**
	 * @param float $floor_space
	 *
	 * @return $this
	 */
	public function setFloorSpace($floor_space)
	{
		$this->floor_space = $floor_space;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getDisabledAccess()
	{
		return $this->disabled_access;
	}


	/**
	 * @param bool $disabled_access
	 *
	 * @return $this
	 */
	public function setDisabledAccess($disabled_access)
	{
		$this->disabled_access = $disabled_access;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getEnsuite()
	{
		return $this->ensuite;
	}


	/**
	 * @param bool $ensuite
	 *
	 * @return $this
	 */
	public function setEnsuite($ensuite)
	{
		$this->ensuite = $ensuite;

		return $this;
	}
}
