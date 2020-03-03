<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Accreditation extends SwaggerModel
{
	/**
	 * Title of an accreditation on the property
	 * @var string
	 * @required
	 */
	protected $type;

	/**
	 * The reference connecting the property to its accrediting agency
	 *
	 * @var string
	 */
	protected $reference = '';

	/**
	 * Date when the accreditation will expire in yyyy-mm-dd format
	 * (empty is assumed to not expire)
	 *
	 * @var string
	 */
	protected $expiry = '';


	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getReference()
	{
		return $this->reference;
	}


	/**
	 * @param string $reference
	 *
	 * @return $this
	 */
	public function setReference($reference)
	{
		$this->reference = $reference;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getExpiry()
	{
		return $this->expiry;
	}


	/**
	 * @param string $expiry
	 *
	 * @return $this
	 */
	public function setExpiry($expiry)
	{
		$this->expiry = $expiry;

		return $this;
	}
}
