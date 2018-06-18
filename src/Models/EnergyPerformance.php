<?php

namespace Sturents\Api\Models;

class EnergyPerformance {
	/**
	 * @var string
	 * @required
	 */
	public $epc_reference;
	/**
	 * @var string
	 * @required
	 */
	public $epc_certificate;
	/**
	 * @var int
	 */
	public $eef_current;
	/**
	 * @var int
	 */
	public $eef_potential;
	/**
	 * @var int
	 */
	public $co2_current;
	/**
	 * @var int
	 */
	public $co2_potential;
}
