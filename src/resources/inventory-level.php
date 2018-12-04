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
         *    getGiftCardAdjustments() method
         *
         *    reference: https://help.shopify.com/api/reference/gift_card_adjustment
         */
        "getInventoryLevels" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/inventory_levels.json",
            "summary" => "Retrieve a list of all Gift Cards Adjustments for a Gift Card",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "inventory_item_ids" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of inventory-item-ids"
                ),
                "page" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "Page to show (default: 1)"
                ),
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
