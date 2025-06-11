<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;
use SturentsLib\Api\Models\ListProperties;
use SturentsLib\Api\Models\RateLimitError;

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
	 * @return ListProperties|Error|AuthError|GetError|RateLimitError|list<ListProperties>|list<Error>|list<AuthError>|list<GetError>|list<RateLimitError>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => ListProperties::class,
			'400' => Error::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'429' => RateLimitError::class,
			'default' => Error::class
		]);
	}
}
