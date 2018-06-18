<?php

namespace Sturents\Api\Models;


class Eligibility {
	/**
	 * @var bool
	 * @required
	 */
	public $undergraduate_student;
	/**
	 * @var bool
	 * @required
	 */
	public $postgraduate_student;
	/**
	 * @var bool
	 * @required
	 */
	public $professional;
	/**
	 * @var bool
	 * @required
	 */
	public $trainee;
	/**
	 * @var bool
	 */
	public $dss;
	/**
	 * @var bool
	 */
	public $pets_permitted;
	/**
	 * @var bool
	 */
	public $smoking_permitted;
	/**
	 * @var bool
	 */
	public $female_only;
	/**
	 * @var bool
	 */
	public $male_only;
}
