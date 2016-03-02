# StuRents API Helper

Install using composer:

    php composer.phar require sturents/api

#### Wait, what's Composer?

Composer is the de-facto package manager for PHP projects. If you haven't used it before it is very simple to set up.

1. Visit the [Composer download page](https://getcomposer.org/download/) and follow instructions to download composer into your project root.
1. You should now have a file called `composer.phar` in your project root. You can run [various commands](https://getcomposer.org/doc/03-cli.md) using this file.
1. Start by running `php composer.phar init` to create your `composer.json` file. This file stores all your project configuration and dependencies.
1. Now either run the command at the top of the readme to install the StuRents API, or add `"sturents/api": "^0.1"` to the `"require"` object inside your `composer.json` file.
     
## Send data to StuRents

    $data = [
        ... // see https://sturents.com/software/developer/houses-create
    ];
    $send_houses = new \Sturents\Api\SendHouses(LANDLORD_ID, API_KEY);
    $send_houses->setJson($data);
    try {
        $send_houses->send();
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    echo $send_houses->responseJson()->success; // echoes "true"
    
## Fetch data from StuRents

    $fetch_houses = new \Sturents\Api\FetchHouses(LANDLORD_ID, PUBLIC_KEY);
    try {
        $fetch_houses->fetchAll();
        $properties = $fetch_houses->getProperties();
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    echo count($properties) // echo, e.g. 1
    
    
    
    
