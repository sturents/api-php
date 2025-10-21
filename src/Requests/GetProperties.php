<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Returns properties for the authenticated property manager
 */
class GetProperties extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/properties';

	/**
	 * When there are multiple pages of results, which one to return
	 * If the page number is not provided then the first page will be
	 * returned. If the page number is too high no results (404) will
	 * be returned
	 *
	 *
	 * @var null
	 */
	public $page;
	protected static array $query_params = ['page'];


	public function setPage($page)
	{
		$this->page = $page;
	}


	/**
	 * @return \SturentsLib\Api\Models\ListProperties|\SturentsLib\Api\Models\Error|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\GetError|\SturentsLib\Api\Models\RateLimitError|list<\SturentsLib\Api\Models\ListProperties>|list<\SturentsLib\Api\Models\Error>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\GetError>|list<\SturentsLib\Api\Models\RateLimitError>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\ListProperties::class,
			'400' => \SturentsLib\Api\Models\Error::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\GetError::class,
			'429' => \SturentsLib\Api\Models\RateLimitError::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
