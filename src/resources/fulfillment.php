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
         *    getFulfillments() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "getFulfillments" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/fulfillments.json",
            "summary" => "Retrieve all fulfilments for an order",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order."
                ),
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
	             	"description" => "Show fulfillments created after date (format: 2008-12-31 03:00)."   
                ),
                "created_at_max" => array(
	             	"type" => "string",
	             	"location" => "uri",
	             	"description" => "Show fulfillments created before date (format: 2008-12-31 03:00)."   
                ),
                "updated_at_min" => array(
	             	"type" => "string",
	             	"location" => "uri",
	             	"description" => "Show fulfillments last updated after date (format: 2008-12-31 03:00)."   
                ),
                "updated_at_max" => array(
	             	"type" => "string",
	             	"location" => "uri",
	             	"description" => "Show fulfillments last updated before date (format: 2008-12-31 03:00)."   
                ),
                "fields" => array(
	             	"type" => "number",
	             	"location" => "uri",
	             	"description" => "Comma-separated list of fields to include in the response."   
                )
            )
        ),
        

        /**
         *    getFulfillmentCount() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "getFulfillmentCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{id}/fulfillments/count.json",
            "summary" => "Get a count of all fulfillments for a given order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "created_at_min" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Count fulfillments created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Count fulfillments created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Count fulfillments last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Count fulfillments last updated before date (format: 2008-12-31 03:00)."
                )
            )
        ),


		/**
         *    getFulfillment() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "getFulfillment" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/fulfillments/{id}.json",
            "summary" => "Get a single fulfillment for a given order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the order."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the fulfillment."
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                ),
            )
        ),
      

	    /**
         *    createFulfillment() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "createFulfillment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/fulfillments.json",
            "summary" => "Create a fulfilment for a specific order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the order."
                ),
                "fulfillment" => array(
                    "location" => "json",
                    "parameters" => array(
						"tracking_number" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Single shipping number."
		                ),
						"tracking_numbers" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A list of shipping numbers, provided by the shipping company."
		                ),
						"notify_customer" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "The ISO 3166-1 alpha-2 two-letter country code for the country. The code for a given country will be the same as the code for the same country in another shop."
		                ),
		                "line_items" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "tracking_company" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the shipping company."
		                ),
		                "tracking_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URL to track the fulfillment."
		                ),
		                "tracking_urls" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URLs to track the fulfillment."
		                ),
		                "status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The status of the fulfillment."
		                ),
		                "receipt" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Text field that provides information about the receipt."
		                )      
                    )
                )
            )
        ),


		/**
         *    updateFulfillment() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "updateFulfillment" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/orders/{order_id}/fulfillments/{id}.json",
            "summary" => "Update a fulfilment.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the order."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the fulfilment."
                ),
                "fulfillment" => array(
                    "location" => "json",
                    "parameters" => array(
                    	"order_id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID number of the order."
		                ),
		                "id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID number of the fulfilment."
		                ),
						"tracking_number" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Single shipping number."
		                ),
						"tracking_numbers" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A list of shipping numbers, provided by the shipping company."
		                ),
						"notify_customer" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "The ISO 3166-1 alpha-2 two-letter country code for the country. The code for a given country will be the same as the code for the same country in another shop."
		                ),
		                "line_items" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "tracking_company" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the shipping company."
		                ),
		                "tracking_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URL to track the fulfillment."
		                ),
		                "tracking_urls" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URLs to track the fulfillment."
		                ),
		                "status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The status of the fulfillment."
		                ),
		                "receipt" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Text field that provides information about the receipt."
		                )      
                    )
                )
            )
        ),


		/**
         *    completeFulfillment() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "completeFulfillment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/fulfillments/{id}/complete.json",
            "summary" => "Complete a fulfillment.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the order."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the fulfilment."
                )
            )
        ),


        /**
         *    cancelFulfillment() method
         *
         *    reference: http://docs.shopify.com/api/fulfillment
         */
        "cancelFulfillment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/fulfillments/{id}/cancel.json",
            "summary" => "Complete a fulfillment.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the order."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID number of the fulfilment."
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