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
         *    getApplicationCredits() method
         *
         *    reference: https://help.shopify.com/api/reference/applicationcredit
         */
        "getApplicationCredits" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/application_credits.json",
            "summary" => "All past and present application credits requests are retrieved by this request.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getApplicationCredit() method
         *
         *    reference: https://help.shopify.com/api/reference/applicationcredit
         */
        "getApplicationCredit" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/application_credits/{id}.json",
            "summary" => "Retrive a single application credit.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the application credit.",
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
         *    createApplicationCredit() method
         *
         *    reference: https://help.shopify.com/api/reference/applicationcredit
         */
        "createApplicationCredit" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/application_credits.json",
            "summary" => "Create a new application credit.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "application_credit" => array(
		            "location" => "json",
					"parameters" => array(
						"amount" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The amount refunded by the application credit."
		                ),	
		                "description" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The description of the application credit."
		                ),
		                "test" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "States whether or not the application credit is a test transaction. Valid values are \"true\" or \"null\"."
		                )
					)
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