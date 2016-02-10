# StuRents API Helper

Install using composer:

    php composer.phar require sturents/api
     
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
    
## Retrieve data from StuRents

    $fetch_houses = new \Sturents\Api\FetchHouses(LANDLORD_ID, PUBLIC_KEY);
    try {
        $fetch_houses->fetchAll();
        $properties = $fetch_houses->getProperties();
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    echo count($properties) // echo, e.g. 1
    
    
    
    
