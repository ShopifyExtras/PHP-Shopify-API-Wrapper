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
         *    getShippingZone() method
         *
         *    reference: https://help.shopify.com/api/reference/shipping_zone
         */
        "getShippingZones" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/shipping_zones.json",
            "summary" => "Get a list of all shipping zones.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response."
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
