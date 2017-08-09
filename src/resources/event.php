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
         *    getEvents() method
         *
         *    reference: https://help.shopify.com/api/reference/event
         */
        "getEvents" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/events.json",
            "summary" => "Retrieve a list of all events.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
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
                    "description" => "Show articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show articles created before date (format: 2008-12-31 03:00)."
                ),
                "filter" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Only show events specified in filter."
                ),
                "verb" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Only show events of a certain kind."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getEventCount() method
         *
         *    reference: https://help.shopify.com/api/reference/event
         */
        "getEventCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/events/count.json",
            "summary" => "Retrieve a count of all events.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
		        "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show articles created before date (format: 2008-12-31 03:00)."
                ) 
            )
        ),
        
        
        /**
         *    getEvent() method
         *
         *    reference: https://help.shopify.com/api/reference/event
         */
        "getEvent" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/event/{id}.json",
            "summary" => "Retrieve a single event.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Event.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),

        /**
         * getProductEvents() method
         */
        "getProductEvents" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/events.json",
            "summary" => "Retrieve all events for a specific product.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
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
                    "description" => "Show events created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show events created before date (format: 2008-12-31 03:00)."
                ),
                "filter" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Only show events specified in filter."
                ),
                "verb" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Only show events of a certain kind."
                ),
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

    ),
);