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
         *    reference: http://docs.shopify.com/api/recurringapplicationcharge
         */
        "getRecurringApplicationCharges" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/recurring_application_charges.json",
            "summary" => "All past and present recurring charge requests are retrieved by this request.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "uri",
                )
            )
        ),
        

        /**
         *    getRecurringApplicationCharge() method
         *
         *    reference: http://docs.shopify.com/api/recurringapplicationcharge
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
                )
            )
        ),
        

        /**
         *    createRecurringApplicationCharge() method
         *
         *    reference: http://docs.shopify.com/api/recurringapplicationcharge
         */
        "createRecurringApplicationCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/recurring_application_charges.json",
            "summary" => "Create recurring application charge.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "recurring_application_charge" => array(
		            "location" => "postField",
		            "parameters" => array(
		         	    "name" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                ),
		         	    "price" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                ),
		                "return_url" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                ),
		                "test" => array(
		                    "type" => "boolean",
		                    "location" => "postField",
		                ),
		                "trial_days" => array(
		                    "type" => "number",
		                    "location" => "postField",
		                ),
		                "activated_on" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                ),
		                "billing_on" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                ),
		                "cancelled_on" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                ),
		                "trial_ends_on" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                )
					)
	            )
            )
        ),
        
        
         /**
         *    activateRecurringApplicationCharge() method
         *
         *    reference: http://docs.shopify.com/api/recurringapplicationcharge
         */
        "activateRecurringApplicationCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/recurring_application_charges/{id}/activate.json",
            "summary" => "Activate recurring application charge.",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                )
            )
        ),

        
        /**
         *    deleteRecurringApplicationCharges() method
         *
         *    reference: http://docs.shopify.com/api/article
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