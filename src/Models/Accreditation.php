<?php

namespace Sturents\Api\Models;

use Sturents\Api\Model;

class Accreditation extends Model {
	/**
	 * @var string
	 * @required
	 */
	protected $type;
	/**
	 * @var string
	 * @required
	 */
	protected $reference;
	/**
	 * @var string
	 * @required
	 */
	protected $expiry;

	/**
	 * @return string
	 */
	public function getType(){
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return Accreditation
	 */
	public function setType($type){
		$this->type = $type;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getReference(){
		return $this->reference;
	}

	/**
	 * @param string $reference
	 * @return Accreditation
	 */
	public function setReference($reference){
		$this->reference = $reference;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getExpiry(){
		return $this->expiry;
	}

	/**
	 * @param string $expiry
	 * @return Accreditation
	 */
	public function setExpiry($expiry){
		$this->expiry = $expiry;

		return $this;
	}
}
