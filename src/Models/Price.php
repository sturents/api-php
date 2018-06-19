<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Price extends Model {
	/**
	 * @var float
	 * @required
	 */
	protected $amount;
	/**
	 * @var string
	 * @required
	 */
	protected $amount_per;
	/**
	 * @var string
	 * @required
	 */
	protected $time_period;
	/**
	 * @var Utilities
	 * @required
	 */
	protected $utilities;

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
