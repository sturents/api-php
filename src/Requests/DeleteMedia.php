<?php
namespace SturentsLib\Api\Requests;

/**
 * Deletes a media item from a property
 */
class DeleteMedia extends SwaggerRequest
{
	const URI = '/api/media';
	const METHOD = 'DELETE';

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

	protected static $path_params = ['property_id', 'media_id'];


	public function __construct($property_id, $media_id)
	{
		$this->property_id = $property_id;
		$this->media_id = $media_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'204' => '',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\Error',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

