<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\MediaSaved;
use SturentsLib\Api\Models\MediaUpload;
use SturentsLib\Api\Models\SendDataError;

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
	 * @param MediaUpload $mediaupload
	 *
	 * @throws \JsonException
	 */
	public function setBody(MediaUpload $mediaupload)
	{
		$this->body = json_encode($mediaupload, JSON_THROW_ON_ERROR);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @return MediaSaved|SendDataError|AuthError|Error|list<MediaSaved>|list<SendDataError>|list<AuthError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => MediaSaved::class,
			'400' => SendDataError::class,
			'401' => AuthError::class,
			'404' => Error::class,
			'default' => Error::class
		]);
	}
}
