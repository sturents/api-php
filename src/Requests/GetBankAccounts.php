<?php
namespace SturentsLib\Api\Requests;
use SturentsLib\Api\Models\SwaggerModel;

/**
 * Returns available bank accounts where rent can be paid
 * for a specific property
 */
class GetBankAccounts extends SwaggerRequest
{
	public const METHOD = 'GET';
	public const URI = '/api/bank-accounts';

	/**
	 * @return \SturentsLib\Api\Models\BankAccount|\SturentsLib\Api\Models\AuthError|\SturentsLib\Api\Models\GetError|\SturentsLib\Api\Models\Error|list<\SturentsLib\Api\Models\BankAccount>|list<\SturentsLib\Api\Models\AuthError>|list<\SturentsLib\Api\Models\GetError>|list<\SturentsLib\Api\Models\Error>
	 */
	public function sendWith(SwaggerClient $client)
	{
		return $client->make($this, [
			'200' => \SturentsLib\Api\Models\BankAccount::class,
			'401' => \SturentsLib\Api\Models\AuthError::class,
			'404' => \SturentsLib\Api\Models\GetError::class,
			'default' => \SturentsLib\Api\Models\Error::class
		]);
	}
}
