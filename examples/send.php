<?php

use SturentsLib\Api\Models\Address;
use SturentsLib\Api\Models\Coordinates;
use SturentsLib\Api\Models\Eligibility;
use SturentsLib\Api\Models\EnergyPerformance;
use SturentsLib\Api\Models\PropertyCreation;
use SturentsLib\Api\Models\PropertySaved;
use SturentsLib\Api\Requests\PutProperty;
use SturentsLib\Api\UploadClient;

require __DIR__.'/../vendor/autoload.php';

$dir = __DIR__;
$config_name = '_config.php';
$config_file = "$dir/$config_name";
if (!file_exists($config_file)){
	throw new RuntimeException("You must create a file called $config_name in path $dir before running the example. Use $dir/_config.sample.php as a guideline");
}

require $config_file;

$property = new PropertyCreation();

// The address has other fields but these are the minimum required to be set to not blank values
$address = new Address();
$address->setRoadName('Test')
	->setCity('Test')
	->setPostcode('AA1 1AA')
	->setPropertyNumber(1);

// Eligibility sets all values to false but requires the student values to be set explicitly
$eligibility = new Eligibility();
$eligibility->setUndergraduateStudent(true)
	->setPostgraduateStudent(true);

// These objects must be set but can use default (blank) values
$coordinates = new Coordinates();
$energy_performance = new EnergyPerformance();

// The property can be created by setting initial rooms, a designation
// and the required objects. Further requests should be made to create contracts
// for pricing/availability information, and to add media
$property->setInitialRooms(1)
	->setDesignation('hmo')
	->setAddress($address)
	->setCoordinates($coordinates)
	->setEnergyPerformance($energy_performance)
	->setEligibility($eligibility);

$upload_client = new UploadClient(LANDLORD_ID, UPLOAD_KEY);

// This will create a new property; running the same command repeatedly
// will create MULTIPLE properties with the same information. To avoid duplicates
// you should save down the generated ID and use Patch requests to do future updates
// or use other endpoints to add resources to this property
$put_property = new PutProperty;
$put_property->setBody($property);
try {
	$response = $put_property->sendWith($upload_client);
}
catch (\Exception $e) {
	echo "An unexpected problem happened: {$e->getMessage()}";
}

if ($response instanceof PropertySaved){
	echo 'Property created with ID: '.$response->getPropertyId()."\n"; // outputs an integer
}
elseif ($response->isError()){
	echo 'A known error occurred of type '.get_class($response)."\n";
	echo json_encode($response)."\n";
}
else {
	echo 'An unknown error occurred of type '.get_class($response)."\n";
}
