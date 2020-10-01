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
            "summary" => "Retrieve a list of all inventory levels for the given inventory item ids",
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

        "adjustInventoryLevels" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/inventory_levels/adjust.json",
            "summary" => "Adjust an inventory level",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "location_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the location id"
                ),
                "inventory_item_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the inventory item id"
                ),
                "available_adjustment" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the amount to change the inventory level by"
                ),
            )
        ),

        "setInventoryLevels" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/inventory_levels/set.json",
            "summary" => "set an inventory level",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "location_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the location id"
                ),
                "inventory_item_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the inventory item id"
                ),
                "available" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the amount to set the inventory level to"
                ),
            )
        ),

        "connectInventoryLevels" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/inventory_levels/connect.json",
            "summary" => "Connect a location to an inventory level",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "location_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the location id"
                ),
                "inventory_item_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "the inventory item id"
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
