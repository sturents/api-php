<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Deletes a media item from a property
 */
class DeleteMedia extends SwaggerRequest
{
	public const METHOD = 'DELETE';
	public const URI = '/api/media';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	/**
	 * The media ID provided by the initial upload
	 *
	 *
	 * @var string
	 */
	public $media_id;
	protected static array $path_params = ['property_id', 'media_id'];


	public function __construct($property_id, $media_id)
	{
		$this->property_id = $property_id;
		$this->media_id = $media_id;
	}


	/**
	 * @return \SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'204' => null,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\Error::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
