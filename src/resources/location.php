<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getLocations() method
         *
         *    reference: https://help.shopify.com/api/reference/location
         */
        "getLocations" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/locations.json",
            "summary" => "Get a list of all locations for a shop.",
            "responseModel" => "defaultJsonResponse",
        ),
        
        
        /**
         *    getLocation() method
         *
         *    reference: https://help.shopify.com/api/reference/location
         */
        "getLocation" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/locations/{id}.json",
            "summary" => "Get a single location by its ID.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the location.",
                    "required" => true
                )
            )
        ),
        
    ),
    

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);