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
         *    getWebhooks() method
         *
         *    reference: http://docs.shopify.com/api/webhook
         */
        "getWebhooks" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/webhooks.json",
            "summary" => "Get a list of all webhooks",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "address" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Use this parameter to retrieve only webhooks that possess the URI where the webhook sends the POST request when the event occurs."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Use this parameter to retrieve only webhooks that were created <b>before</b> a given date and time (format: 2008-12-31 03:00)."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Use this parameter to retrieve only webhooks that were created <b>after</b> a given date and time (format: 2008-12-31 03:00)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "A comma-separated list of the properties you want returned for each item in the result list. Use this parameter to restrict the returned list of items to showing only those properties you specify."
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The maximum number of webhooks that should be returned. Setting this parameter outside the maximum range will result in an error."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The page number of the result list to retrieve. Use this in tandem with limit to page through the webhooks in a shop."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Use this parameter to restrict the returned list to only webhooks whose id is <b>greater</b> than the specified id."
                ),
                "topic" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show webhooks with a given topic. Valid topics are: orders/create, orders/delete, orders/updated, orders/paid, orders/cancelled, orders/fulfilled, orders/partially_fulfilled, order_transactions/create, carts/create, carts/update, checkouts/create, checkouts/update, checkouts/delete, refunds/create, products/create, products/update, products/delete, collections/create, collections/update, collections/delete, customer_groups/create, customer_groups/update, customer_groups/delete, customers/create, customers/enable, customers/disable, customers/update, customers/delete, fulfillments/create, fulfillments/update, shop/update, disputes/create, disputes/update, app/uninstalled."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Use this parameter to retrieve only webhooks that were updated <b>before</b> a given date and time (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Use this parameter to retrieve only webhooks that were updated <b>after</b> a given date and time (format: 2008-12-31 03:00)."
                )
            )
        ),
        

        /**
         *    getWebhookCount() method
         *
         *    reference: http://docs.shopify.com/api/webhook
         */
        "getWebhookCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/webhooks/count.json",
            "summary" => "Get a count of webhooks",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "address" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Use this parameter to retrieve only webhooks that possess the URI where the webhook sends the POST request when the event occurs."
                ),
                "topic" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show webhooks with a given topic. Valid topics are: orders/create, orders/delete, orders/updated, orders/paid, orders/cancelled, orders/fulfilled, orders/partially_fulfilled, order_transactions/create, carts/create, carts/update, checkouts/create, checkouts/update, checkouts/delete, refunds/create, products/create, products/update, products/delete, collections/create, collections/update, collections/delete, customer_groups/create, customer_groups/update, customer_groups/delete, customers/create, customers/enable, customers/disable, customers/update, customers/delete, fulfillments/create, fulfillments/update, shop/update, disputes/create, disputes/update, app/uninstalled."
                )
            )
        ),

        
        /**
         *    getWebhook() method
         *
         *    reference: http://docs.shopify.com/api/webhook
         */
        "getWebhook" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/webhooks/{id}.json",
            "summary" => "Get a single webhook by id",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Webhook.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "A comma-separated list of the properties you want returned for each item in the result list. Use this parameter to restrict the returned list of items to showing only those properties you specify.
"
                )
            )
        ),


        /**
         *    createWebhook() method
         *
         *    reference: http://docs.shopify.com/api/webhook
         */
        "createWebhook" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/webhooks.json",
            "summary" => "Create a new webhook.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "webhook" => array(
                    "location" => "json",
                    "parameters" => array(
                        "topic" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The event that will trigger the webhook. Valid values are: orders/create, orders/delete, orders/updated, orders/paid, orders/cancelled, orders/fulfilled, orders/partially_fulfilled, order_transactions/create, carts/create, carts/update, checkouts/create, checkouts/update, checkouts/delete, refunds/create, products/create, products/update, products/delete, collections/create, collections/update, collections/delete, customer_groups/create, customer_groups/update, customer_groups/delete, customers/create, customers/enable, customers/disable, customers/update, customers/delete, fulfillments/create, fulfillments/update, shop/update, disputes/create, disputes/update, app/uninstalled,"
                        ),
                        "address" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The URI where the webhook should send the POST request when the event occurs."
                        ),
                        "format" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The format in which the webhook should send the data. Valid values are json and xml."
                        ),
                        "metafield_namespaces" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "(Optional) An array of namespaces for metafields that should be included in webhooks."
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
                    "location" => "query",
                    "description" => "The ID of the webhook.",
                    "required" => true
                ),
                "webhook" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID of the webhook."
                        ),
                        "topic" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The event that will trigger the webhook. Valid values are: orders/create, orders/delete, orders/updated, orders/paid, orders/cancelled, orders/fulfilled, orders/partially_fulfilled, order_transactions/create, carts/create, carts/update, checkouts/create, checkouts/update, checkouts/delete, refunds/create, products/create, products/update, products/delete, collections/create, collections/update, collections/delete, customer_groups/create, customer_groups/update, customer_groups/delete, customers/create, customers/enable, customers/disable, customers/update, customers/delete, fulfillments/create, fulfillments/update, shop/update, disputes/create, disputes/update, app/uninstalled,"
                        ),
                        "address" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The URI where the webhook should send the POST request when the event occurs."
                        ),
                        "format" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The format in which the webhook should send the data. Valid values are json and xml."
                        ),
                        "metafield_namespaces" => array(
                            "type" => "string",
                            "location" => "json",
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
                    "description" => "The ID of the webhook.",
                    "required" => true
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