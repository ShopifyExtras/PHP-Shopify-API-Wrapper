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
         *    getShop() method
         *
         *    reference: https://help.shopify.com/api/reference/shop
         */
        "getShop" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/shop.json",
            "summary" => "Retrieve Shop",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        )
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
        "GetShopOutput" => array(
            "type" => "array",
            "items" => array(
                "type" => "object",
                "properties" => array(
                    "name" => array(
                        "location" => "json",
                        "type" => "string"
                    ),
                    "age" => array(
                        "location" => "json",
                        "type" => "integer"
                    )
                )
            )
        )
    ),
);