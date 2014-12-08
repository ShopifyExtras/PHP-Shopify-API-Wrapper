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
         *    getFulfillmentServices() method
         *
         *    reference: http://docs.shopify.com/api/fulfillmentservice
         */
        "getFulfillmentServices" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/fulfillment_services.json",
            "summary" => "Retrieve all fulfilment services.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "scope" => array(
                    "type" => "string",
                    "location" => "uri",
                )
            )
        ),
        

		/**
         *    getFulfillmentService() method
         *
         *    reference: http://docs.shopify.com/api/fulfillmentservice
         */
        "getFulfillmentService" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/fulfillment_services/{id}.json",
            "summary" => "Get a single fulfillment service.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the fulfillment service."
                )
            )
        ),
      

	    /**
         *    createFulfillmentService() method
         *
         *    reference: http://docs.shopify.com/api/fulfillmentservice
         */
        "createFulfillmentService" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/fulfillment_services.json",
            "summary" => "Create a fulfilment for a specific order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "fulfillment_service" => array(
                    "location" => "json",
                    "parameters" => array(
						"name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
						"callback_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
						"inventory_management" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "tracking_support" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "requires_shipping_method" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "format" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "credential1" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "credential2_exists" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "handle" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "provider_id" => array(
		                    "type" => "string",
		                    "location" => "json",
		                )   
                    )
                )
            )
        ),


		/**
         *    updateFulfillmentService() method
         *
         *    reference: http://docs.shopify.com/api/fulfillmentservice
         */
        "updateFulfillmentService" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/fulfillment_services/{id}.json",
            "summary" => "Update a fulfillment service.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the fulfilment service."
                ),
                "fulfillment" => array(
                    "location" => "json",
                    "parameters" => array(
		                "id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID number of the fulfillment service."
		                ),
						"name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
						"callback_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
						"inventory_management" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "tracking_support" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "requires_shipping_method" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "format" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "credential1" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "credential2_exists" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "handle" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "provider_id" => array(
		                    "type" => "string",
		                    "location" => "json",
		                )  
                    )
                )
            )
        ),


	    /**
         *    deleteFulfillmentService() method
         *
         *    reference: http://docs.shopify.com/api/fulfillmentservice
         */
        "deleteFulfillmentService" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/fulfillment_services/{id}.json",
            "summary" => "Delete a fulfillment service.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the fulfillment service."
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