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
         *    getCheckouts() method
         *
         *    reference: https://help.shopify.com/api/reference/checkout
         */
        "getCheckouts" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/checkouts.json",
            "summary" => "Retrieve a list of all Checkouts",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (Default: 50) (Maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts last updated before date (format: 2008-12-31 03:00)."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "open - All open abandoned checkouts (default). closed - Show only closed abandoned checkouts."
                )
			)
        ),
        
        
        /**
         *    getCheckoutCount() method
         *
         *    reference: https://help.shopify.com/api/reference/checkout
         */
        "getCheckoutCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/checkouts/count.json",
            "summary" => "Retrieve a count of all Checkouts",
            "responseModel" => "defaultJsonResponse",
			"properties" => array(
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show checkouts last updated before date (format: 2008-12-31 03:00)."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "open - All open abandoned checkouts (default). closed - Show only closed abandoned checkouts."
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

    ),
);