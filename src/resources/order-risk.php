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
         *    getOrderRisks() method
         *
         *    reference: http://docs.shopify.com/api/order_risks
         */
        "getOrderRisks" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{id}/risk.json",
            "summary" => "Get a list of all Order Risks.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The unique ID number for the order."
                )
            )
        ),
        
        
        /**
         *    getOrderRisk() method
         *
         *    reference: http://docs.shopify.com/api/order_risks
         */
        "getOrderRisk" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/risks/{id}.json",
            "summary" => "Get a count of all pages.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The unique ID number for the order."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The unique ID of the order risk."
                )
            )
        ),
        
        
        /**
         *    updateOrderRisk() method
         *
         *    reference: http://docs.shopify.com/api/order_risks
         */
        "updateOrderRisk" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/orders/{order_id}/risks/{id}.json",
            "summary" => "Update an Order Risk entry.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the order the order risk belongs to."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the order risk."
                ),
	            "risk" => array(
		            "location" => "postField",
		            "parameters" => array(
		                "id" => array(
		                    "type" => "number",
		                    "location" => "postField",
		                    "description" => "A unique numeric identifier for the order risk."
		                ),
		                "message" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "A message that should be displayed to the merchant to indicate the results of the fraud check."
		                ),
		                "recommendation" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The recommended action given to the merchant."
		                ),
		                "source" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "This indicates the source of the risk assessment."
		                ),
		                "cause_cancel" => array(
		                    "type" => "boolean",
		                    "location" => "postField",
		                    "description" => "Use this flag when a fraud check is accompanied with a call to the Orders API to cancel the order. This will indicate to the merchant that this risk was severe enough to force cancellation of the order."
		                ),
		                "score" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "A number between 0 and 1 indicating percentage likelihood of being fraud."
		                ),
		                "display" => array(
		                    "type" => "boolean",
		                    "location" => "postField",
		                    "description" => "States whether or not the risk is displayed. Valid values are \"true\" or \"false\"."
		                )
	                )
                )
            )
        ),
        
               
        /**
         *    deleteOrderRisk() method
         *
         *    reference: http://docs.shopify.com/api/order_risks
         */
        "deleteOrderRisk" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/orders/{order_id}/risks/{id}.json",
            "summary" => "Delete an order risk entry. Consider updating a previous order risk with display set to false rather than deleting an entry.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the order risk."
                ),
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the order."
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