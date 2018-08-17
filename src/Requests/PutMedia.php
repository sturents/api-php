<?php
namespace SturentsLib\Api\Requests;

/**
 * Add a media item to a property
 */
class PutMedia extends SwaggerRequest
{
	const URI = '/api/media';
	const METHOD = 'PUT';

	/**
	 * The property ID provided by the initial creation
	 * or a GET /properties request
	 *
	 *
	 * @var string
	 */
	public $property_id;

	protected static $param_names = ['property_id'];


	/**
	 * @param \SturentsLib\Api\Models\MediaUpload $mediaupload
	 */
	public function setBody(\SturentsLib\Api\Models\MediaUpload $mediaupload)
	{
		$this->body = json_encode($mediaupload);
	}


	public function __construct($property_id)
	{
		$this->property_id = $property_id;
	}


	/**
	 * @param SwaggerClient $client
	 * @return \SturentsLib\Api\Models\MediaSaved
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\MediaSaved());
	}
}

