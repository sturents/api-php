<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns available bank accounts where rent can be paid
 * for a specific property
 */
class GetBankAccounts extends SwaggerRequest
{
	const URI = '/api/bank-accounts';
	const METHOD = 'GET';

	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => '\\SturentsLib\\Api\\Models\\BankAccount',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\Error',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

