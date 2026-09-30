<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class EnquirySaved extends SwaggerModel
{
	/**
	 * Hashed id of the created enquiry
	 * @var string
	 */
	protected $enquiry_id = '';


	/**
	 * @return string
	 */
	public function getEnquiryId()
	{
		return $this->enquiry_id;
	}


	/**
	 * @param string $enquiry_id
	 *
	 * @return $this
	 */
	public function setEnquiryId($enquiry_id)
	{
		$this->enquiry_id = $enquiry_id;

		return $this;
	}
}
