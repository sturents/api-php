<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\AuthError;
use SturentsLib\Api\Models\BankAccount;
use SturentsLib\Api\Models\Error;
use SturentsLib\Api\Models\GetError;

/**
 * Returns available bank accounts where rent can be paid
 * for a specific property
 */
class GetBankAccounts extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/bank-accounts';

	/**
	 * @return BankAccount|AuthError|GetError|Error|list<BankAccount>|list<AuthError>|list<GetError>|list<Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => BankAccount::class,
			'401' => AuthError::class,
			'404' => GetError::class,
			'default' => Error::class
		]);
	}
}
