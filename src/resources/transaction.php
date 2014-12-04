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
         *    getTransactions() method
         *
         *    reference: http://docs.shopify.com/api/transaction
         */
        "getTransactions" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/transaction.json",
            "summary" => "Get a list of all transactions for a given order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The order ID number."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        

        /**
         *    getTransactionCount() method
         *
         *    reference: http://docs.shopify.com/api/transaction
         */
        "getTransactionCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/transactions/count.json",
            "summary" => "Count all a given order’s money transfers.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The order ID number."
                )
            )
        ),

        
        /**
         *    getTransaction() method
         *
         *    reference: http://docs.shopify.com/api/transaction
         */
        "getTransaction" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/transaction/{id}.json",
            "summary" => "Get a single webhook by id",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Order."
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Transaction."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "A comma-separated list of the properties you want returned for each item in the result list. Use this parameter to restrict the returned list of items to showing only those properties you specify.
"
                )
            )
        ),


        /**
         *    createTransaction() method
         *
         *    reference: http://docs.shopify.com/api/transaction
         */
        "createTransaction" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{order_id}/transactions.json",
            "summary" => "Create a new transaction.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order."
                ),
                "transaction" => array(
                    "location" => "postField",
                    "parameters" => array(
                    	"amount" => array(
		                    "type" => "number",
		                    "location" => "postField",
		                    "description" => "The amount of money that the transaction was for."
		                ),
		                "authorization" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The authorization code associated with the transaction."
                        ),
                        "gateway" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The name of the gateway the transaction was issued through. A list of gateways can be found on Shopify's Payment Gateway page."
                        ),
                        "payment_details" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "An object containing information about the credit card used for this transaction."
                        ),
                        "kind" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The kind of transaction."
                        ),
                        "receipt" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => ""
                        ),
                        "error_code" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A standardized error code, independent of the payment provider. Value can be null."
                        ),
                        "status" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The status of the transaction. Valid values are: pending, failure, success or error."
                        ),
                        "test" => array(
                            "type" => "boolean",
                            "location" => "postField",
                            "description" => "The option to use the transaction for testing purposes. Valid values are true or false."
                        ),
                        "user_id" => array(
                            "type" => "number",
                            "location" => "postField",
                            "description" => "The unique identifier for the user."
                        ),
                        "currency" => array(
                            "type" => "number",
                            "location" => "postField",
                            "description" => "The three letter code (ISO 4217) for the currency used for the payment."
                        )
                    )
                )
            )
        ),


        /**
         *    updateWebhook() method
         *
         *    reference: http://docs.shopify.com/api/webhook
         */
        "updateWebhook" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/webhooks/{id}.json",
            "summary" => "Update a new webhook.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the webhook."
                ),
                "webhook" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "postField",
                            "description" => "The ID of the webhook."
                        ),
                        "topic" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The event that will trigger the webhook. Valid values are: orders/create, orders/delete, orders/updated, orders/paid, orders/cancelled, orders/fulfilled, orders/partially_fulfilled, order_transactions/create, carts/create, carts/update, checkouts/create, checkouts/update, checkouts/delete, refunds/create, products/create, products/update, products/delete, collections/create, collections/update, collections/delete, customer_groups/create, customer_groups/update, customer_groups/delete, customers/create, customers/enable, customers/disable, customers/update, customers/delete, fulfillments/create, fulfillments/update, shop/update, disputes/create, disputes/update, app/uninstalled,"
                        ),
                        "address" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The URI where the webhook should send the POST request when the event occurs."
                        ),
                        "format" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The format in which the webhook should send the data. Valid values are json and xml."
                        ),
                        "metafield_namespaces" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "(Optional) An array of namespaces for metafields that should be included in webhooks."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteWebhook() method
         *
         *    reference: http://docs.shopify.com/api/webhook
         */
        "deleteRedirect" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/webhooks/{id}.json",
            "summary" => "Delete a webhook.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the webhook."
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