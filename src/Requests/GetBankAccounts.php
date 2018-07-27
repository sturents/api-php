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
	 * @return \SturentsLib\Api\Models\BankAccount[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, new \SturentsLib\Api\Models\BankAccount());
	}
}

