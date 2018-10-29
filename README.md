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

    $property = new \SturentsLib\Api\Models\Property;
    // Use setters to create sub-objects and set properties as
    // described in the documentation:
    // https://sturents.com/software/developer/house-create
    
    $sturents = new \SturentsLib\Api\AuthRequests(LANDLORD_ID, API_KEY);
    $put_property = new \SturentsLib\Api\Requests\PutProperty;
    $put_property->setBody($property);
    try {
        $response = $put_property->send($sturents);
    }
    catch (\Exception $e){
       echo "An unexpected problem happened: ".$e->getMessage();
    }
    
    if ($response->isError()){
        echo "A known error occurred of type ".gettype($response); 
    }
    else {    
        var_dump($response instanceof PropertySaved); // outputs 'true'
    
        echo $response->property_id; // outputs an integer
    }
    
## Fetch data from StuRents

    $sturents = new \Sturents\Api\PublicRequests(LANDLORD_ID, PUBLIC_KEY);
    $get_properties = new \SturentsLib\Api\Requests\GetProperties;
    try {
        $properties = $get_properties->send($sturents);
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    var_dump($response instanceof ListProperties); // outputs 'true'
    
    echo $response->pagination->pages // echo, e.g. 3
    
    var_dump($response->properties[0] instanceof PropertyOutbound) // outputs 'true'
