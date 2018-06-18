<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Price extends Model {
	/**
	 * @var float
	 * @required
	 */
	public $amount;
	/**
	 * @var string
	 * @required
	 */
	public $amount_per;
	/**
	 * @var string
	 * @required
	 */
	public $time_period;
	/**
	 * @var Utilities
	 * @required
	 */
	private $utilities;

	/**
	 * @return Utilities
	 */
	public function getUtilities(){
		return $this->utilities;
	}

	/**
	 * @param Utilities $utilities
	 *
	 * @return Price
	 */
	public function setUtilities(Utilities $utilities){
		$this->utilities = $utilities;

		return $this;
	}
}
