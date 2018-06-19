<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Coordinates extends Model {
	/**
	 * @var float
	 * @required
	 */
	protected $lat;
	/**
	 * @var float
	 * @required
	 */
	protected $lng;

	/**
	 * @return float
	 */
	public function getLat(){
		return $this->lat;
	}

	/**
	 * @param float $lat
	 * @return Coordinates
	 */
	public function setLat($lat){
		$this->lat = $lat;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getLng(){
		return $this->lng;
	}

	/**
	 * @param float $lng
	 * @return Coordinates
	 */
	public function setLng($lng){
		$this->lng = $lng;

		return $this;
	}


}
