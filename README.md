# StuRents API Helper

_Master branch is for v2.0 which is not available yet; please check releases for previous versions. For outbound data check 1.3.*, for inbound use 1.2.*_

Install using composer:

    php composer.phar require sturents/api

#### Wait, what's Composer?

Composer is the de-facto package manager for PHP projects. If you haven't used it before it is very simple to set up.

1. Visit the [Composer download page](https://getcomposer.org/download/) and follow instructions to download composer into your project root.
1. You should now have a file called `composer.phar` in your project root. You can run [various commands](https://getcomposer.org/doc/03-cli.md) using this file.
1. Start by running `php composer.phar init` to create your `composer.json` file. This file stores all your project configuration and dependencies.
1. Now either run the command at the top of the readme to install the StuRents API, or add `"sturents/api": "*"` to the `"require"` object inside your `composer.json` file.

To use Composer dependencies inside a PHP file is simple - just the following to the top of your file:

    require_once __DIR__.'/vendor/autoload.php';

Now you can create or use any object without having to worry about requiring its files - Composer and PHP's autoloader will handle that for you.

## Send a property to StuRents

    $property = new \SturentsLib\Api\Models\PropertyCreation;
    // Use setters to create sub-objects and set properties as
    // described in the documentation:
    //   https://sturents.com/software/developer/house-create
    // Or as demonstrated in `examples/send.php`
    
    $upload_client = new \SturentsLib\Api\UploadClient(LANDLORD_ID, UPLOAD_KEY);
    $put_property = new \SturentsLib\Api\Requests\PutProperty;
    $put_property->setBody($property);
    try {
        $response = $put_property->sendWith($upload_client);
    }
    catch (\Exception $e){
       echo "An unexpected problem happened: ".$e->getMessage();
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
    
## Fetch data from StuRents with a Landlord ID

    // Where LANDLORD_ID is an integer
    $display_client = new \SturentsLib\Api\DisplayClient(LANDLORD_ID, DISPLAY_KEY);
    $get_properties = new \SturentsLib\Api\Requests\GetProperties;
    try {
        $response = $get_properties->sendWith($display_client);
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    var_dump($response instanceof ListProperties); // outputs 'true'
    
    echo $response->pagination->pages // echo, e.g. 3
    
    var_dump($response->properties[0] instanceof PropertyOutbound) // outputs 'true'
    
## Fetch data from StuRents as a channel

    // Where *_ID values are strings
    $display_client = new \SturentsLib\Api\ChannelClient(LANDLORD_ID, CHANNEL_ID, DISPLAY_KEY);
    $get_properties = new \SturentsLib\Api\Requests\GetProperties;
    try {
        $response = $get_properties->sendWith($display_client);
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    var_dump($response instanceof ListProperties); // outputs 'true'
    
    echo $response->pagination->pages // echo, e.g. 3
    
    var_dump($response->properties[0] instanceof PropertyOutbound) // outputs 'true'
