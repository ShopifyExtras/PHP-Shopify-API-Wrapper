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
         *    reference: http://docs.shopify.com/api/event
         */
        "getEvents" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/events.json",
            "summary" => "Retrieve a list of all events.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles created before date (format: 2008-12-31 03:00)."
                ),
                "filter" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Only show events specified in filter."
                ),
                "verb" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Only show events of a certain kind."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getEventCount() method
         *
         *    reference: http://docs.shopify.com/api/event
         */
        "getEventCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/events/count.json",
            "summary" => "Retrieve a count of all events.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
		        "created_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles created before date (format: 2008-12-31 03:00)."
                ) 
            )
        ),
        
        
        /**
         *    getEvent() method
         *
         *    reference: http://docs.shopify.com/api/event
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
                    "description" => "The ID of the Event."
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