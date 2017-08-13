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
         *    getRecurringApplicationCharges() method
         *
         *    reference: https://help.shopify.com/api/reference/recurringapplicationcharge
         */
        "getRecurringApplicationCharges" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/recurring_application_charges.json",
            "summary" => "All past and present recurring charge requests are retrieved by this request.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "query",
                )
            )
        ),
        

        /**
         *    getRecurringApplicationCharge() method
         *
         *    reference: https://help.shopify.com/api/reference/recurringapplicationcharge
         */
        "getRecurringApplicationCharge" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/recurring_application_charges/{id}.json",
            "summary" => "Get a recurring application charge.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),
        

        /**
         *    createRecurringApplicationCharge() method
         *
         *    reference: https://help.shopify.com/api/reference/recurringapplicationcharge
         */
        "createRecurringApplicationCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/recurring_application_charges.json",
            "summary" => "Create recurring application charge.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "recurring_application_charge" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		         	    "price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "return_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "test" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "trial_days" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "activated_on" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "billing_on" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "cancelled_on" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "trial_ends_on" => array(
		                    "type" => "string",
		                    "location" => "json",
		                )
					)
	            )
            )
        ),
        
        
         /**
         *    activateRecurringApplicationCharge() method
         *
         *    reference: https://help.shopify.com/api/reference/recurringapplicationcharge
         */
        "activateRecurringApplicationCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/recurring_application_charges/{id}/activate.json",
            "summary" => "Activate recurring application charge.",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),

        
        /**
         *    deleteRecurringApplicationCharges() method
         *
         *    reference: https://help.shopify.com/api/reference/article
         */
        "deleteRecurringApplicationCharges" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/recurring_application_charges/{id}.json",
            "summary" => "Cancel the current recurring charge for a shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "required" => true
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