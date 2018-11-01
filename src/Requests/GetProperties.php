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
	 * Where there are multiple pages of results, which one to return
	 *
	 *
	 * @var int
	 */
	public $page;

	protected static $query_params = ['page'];


	public function __construct($page = null)
	{
		$this->page = $page;
	}


		/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, [
			'200' => '\\SturentsLib\\Api\\Models\\ListProperties',
			'400' => '\\SturentsLib\\Api\\Models\\Error',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\GetError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}
