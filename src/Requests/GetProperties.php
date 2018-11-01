<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns properties for the authenticated property manager
 */
class GetProperties extends SwaggerRequest
{
	const URI = '/api/properties';
	const METHOD = 'GET';

	/**
	 * When there are multiple pages of results, which one to return
	 * If the page number is not provided then the first page will be
	 * returned. If the page number is too high no results (404) will
	 * be returned
	 *
	 *
	 * @var integer
	 */
	public $page;

	protected static $query_params = ['page'];


	public function __construct($page)
	{
		$this->page = $page;
	}


	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\\SturentsLib\\Api\\Models\\ListProperties',
			'400' => '\\SturentsLib\\Api\\Models\\Error',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\GetError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

