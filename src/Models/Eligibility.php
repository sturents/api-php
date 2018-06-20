<?php

namespace SturentsLib\Api\Models;


use SturentsLib\Api\Model;

class Eligibility extends Model {
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
	 * @required
	 */
	protected $professional;
	/**
	 * @var bool
	 * @required
	 */
	protected $trainee;
	/**
	 * @var bool
	 */
	protected $dss;
	/**
	 * @var bool
	 */
	protected $pets_permitted;
	/**
	 * @var bool
	 */
	protected $smoking_permitted;
	/**
	 * @var bool
	 */
	protected $female_only;
	/**
	 * @var bool
	 */
	protected $male_only;

	/**
	 * @return boolean
	 */
	public function isUndergraduateStudent(){
		return $this->undergraduate_student;
	}

	/**
	 * @param boolean $undergraduate_student
	 * @return Eligibility
	 */
	public function setUndergraduateStudent($undergraduate_student){
		$this->undergraduate_student = $undergraduate_student;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isPostgraduateStudent(){
		return $this->postgraduate_student;
	}

	/**
	 * @param boolean $postgraduate_student
	 * @return Eligibility
	 */
	public function setPostgraduateStudent($postgraduate_student){
		$this->postgraduate_student = $postgraduate_student;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isProfessional(){
		return $this->professional;
	}

	/**
	 * @param boolean $professional
	 * @return Eligibility
	 */
	public function setProfessional($professional){
		$this->professional = $professional;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isTrainee(){
		return $this->trainee;
	}

	/**
	 * @param boolean $trainee
	 * @return Eligibility
	 */
	public function setTrainee($trainee){
		$this->trainee = $trainee;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isDss(){
		return $this->dss;
	}

	/**
	 * @param boolean $dss
	 * @return Eligibility
	 */
	public function setDss($dss){
		$this->dss = $dss;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isPetsPermitted(){
		return $this->pets_permitted;
	}

	/**
	 * @param boolean $pets_permitted
	 * @return Eligibility
	 */
	public function setPetsPermitted($pets_permitted){
		$this->pets_permitted = $pets_permitted;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isSmokingPermitted(){
		return $this->smoking_permitted;
	}

	/**
	 * @param boolean $smoking_permitted
	 * @return Eligibility
	 */
	public function setSmokingPermitted($smoking_permitted){
		$this->smoking_permitted = $smoking_permitted;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isFemaleOnly(){
		return $this->female_only;
	}

	/**
	 * @param boolean|null $female_only
	 * @return Eligibility
	 */
	public function setFemaleOnly($female_only){
		$this->female_only = (bool) $female_only;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isMaleOnly(){
		return $this->male_only;
	}

	/**
	 * @param boolean|null $male_only
	 * @return Eligibility
	 */
	public function setMaleOnly($male_only){
		$this->male_only = (bool) $male_only;

		return $this;
	}
}
