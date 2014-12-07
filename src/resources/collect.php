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
         *    getCollects() method
         *
         *    reference: http://docs.shopify.com/api/collects
         */
        "getCollects" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collects.json",
            "summary" => "Retrieve a list of all Collects",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Collects per page (default: 50) (maximum: 250)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                ),
                "product_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "List only collects for a certain product."
                ),
                "collection_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "List only collects for a certain collection."
                )
            )
        ),
        
        
        /**
         *    getCollectCount() method
         *
         *    reference: http://docs.shopify.com/api/collects
         */
        "getCollectCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collects/count.json",
            "summary" => "Retrieve a count of all Collects",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "product_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "List only collects for a certain product."
                ),
                "collection_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "List only collects for a certain collection."
                )
            )
        ),
        
        
        /**
         *    getCollect() method
         *
         *    reference: http://docs.shopify.com/api/collects
         */
        "getCollect" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collects/{id}.json",
            "summary" => "Retrieve a single Collect",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Collect."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
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
