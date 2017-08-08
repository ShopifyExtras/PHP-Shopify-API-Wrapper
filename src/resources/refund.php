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
         *    getRefund() method
         *
         *    reference: https://help.shopify.com/api/reference/refund
         */
        "getRefund" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{order_id}/refunds/{id}.json",
            "summary" => "Receive a singe refund.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the refund.",
                    "required" => true
                ),
                "order_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "number",
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