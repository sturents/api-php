<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Submit a tenant enquiry
 */
class PostEnquiry extends SwaggerRequest
{
	public const METHOD = 'POST';
	public const URI = '/api/enquiry';

	/**
	 * Should be set to "3" (defaults to "1.3" if not set and the 1.3 version is deprecated)'
	 *
	 *
	 * @var null
	 */
	public $version;
	protected static array $query_params = ['version'];


	/**
	 * @param \SturentsLib\Api\Models\EnquiryCreation $enquiry
	 */
	public function setBody(\SturentsLib\Api\Models\EnquiryCreation $enquiry)
	{
		$this->body = json_encode($enquiry, JSON_THROW_ON_ERROR);
	}


	public function __construct($version)
	{
		$this->version = $version;
	}


	/**
	 * @return \SturentsLib\Api\Models\EnquirySaved|\SturentsLib\Api\Models\SendDataError|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\EnquirySaved>|list<\SturentsLib\Api\Models\SendDataError>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\EnquirySaved::class,
			'400' => \SturentsLib\Api\Models\SendDataError::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'403' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\Error::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
