<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns available bank accounts where rent can be paid
 * for a specific property
 */
class GetBankAccounts extends SwaggerRequest
{
	const URI = 'https://sturents.com/api/bank-accounts';
	const METHOD = 'GET';
	const RESPONSE_CLASS = '\SturentsLib\Api\Models\BankAccount';

	public $response_is_array = true;


}

