<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Add a media item to a property
 */
class PutMedia extends SwaggerRequest
{
	public const METHOD = 'PUT';
	public const URI = '/api/media';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;
	protected static array $path_params = ['property_id'];


	/**
	 * @param \SturentsLib\Api\Models\MediaUpload $mediaupload
	 */
	public function setBody(\SturentsLib\Api\Models\MediaUpload $mediaupload)
	{
		$this->body = json_encode($mediaupload, JSON_THROW_ON_ERROR);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @return \SturentsLib\Api\Models\MediaSaved|\SturentsLib\Api\Models\SendDataError|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\MediaSaved>|list<\SturentsLib\Api\Models\SendDataError>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\MediaSaved::class,
			'400' => \SturentsLib\Api\Models\SendDataError::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\Error::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
