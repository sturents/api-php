<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Each key is a boolean indicating if the specified item is
 * eligible to rent the property. At least one of the first
 * four fields must be set to true
 */
class Eligibility extends SwaggerModel
{
	/**
	 * @var bool
	 * @required
	 */
	protected $undergraduate_student;

	/**
	 * @var bool
	 * @required
	 */
	protected $postgraduate_student;

	/**
	 * @var bool
	 */
	protected $professional = false;

	/**
	 * @var bool
	 */
	protected $trainee = false;

	/**
	 * Allows a recipient of UK housing benefit
	 * @var bool
	 */
	protected $dss = false;

	/**
	 * @var bool
	 */
	protected $pets_permitted = false;

	/**
	 * @var bool
	 */
	protected $smoking_permitted = false;

	/**
	 * @var bool
	 */
	protected $female_only = false;

	/**
	 * @var bool
	 */
	protected $male_only = false;


	/**
	 * @return bool
	 */
	public function getUndergraduateStudent()
	{
		return $this->undergraduate_student;
	}


	/**
	 * @param bool $undergraduate_student
	 *
	 * @return $this
	 */
	public function setUndergraduateStudent($undergraduate_student)
	{
		$this->undergraduate_student = $undergraduate_student;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getPostgraduateStudent()
	{
		return $this->postgraduate_student;
	}


	/**
	 * @param bool $postgraduate_student
	 *
	 * @return $this
	 */
	public function setPostgraduateStudent($postgraduate_student)
	{
		$this->postgraduate_student = $postgraduate_student;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getProfessional()
	{
		return $this->professional;
	}


	/**
	 * @param bool $professional
	 *
	 * @return $this
	 */
	public function setProfessional($professional)
	{
		$this->professional = $professional;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getTrainee()
	{
		return $this->trainee;
	}


	/**
	 * @param bool $trainee
	 *
	 * @return $this
	 */
	public function setTrainee($trainee)
	{
		$this->trainee = $trainee;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getDss()
	{
		return $this->dss;
	}


	/**
	 * @param bool $dss
	 *
	 * @return $this
	 */
	public function setDss($dss)
	{
		$this->dss = $dss;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getPetsPermitted()
	{
		return $this->pets_permitted;
	}


	/**
	 * @param bool $pets_permitted
	 *
	 * @return $this
	 */
	public function setPetsPermitted($pets_permitted)
	{
		$this->pets_permitted = $pets_permitted;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getSmokingPermitted()
	{
		return $this->smoking_permitted;
	}


	/**
	 * @param bool $smoking_permitted
	 *
	 * @return $this
	 */
	public function setSmokingPermitted($smoking_permitted)
	{
		$this->smoking_permitted = $smoking_permitted;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getFemaleOnly()
	{
		return $this->female_only;
	}


	/**
	 * @param bool $female_only
	 *
	 * @return $this
	 */
	public function setFemaleOnly($female_only)
	{
		$this->female_only = $female_only;

		return $this;
	}


	/**
	 * @return bool
	 */
	public function getMaleOnly()
	{
		return $this->male_only;
	}


	/**
	 * @param bool $male_only
	 *
	 * @return $this
	 */
	public function setMaleOnly($male_only)
	{
		$this->male_only = $male_only;

		return $this;
	}
}
