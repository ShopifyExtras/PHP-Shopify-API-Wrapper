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
        "getGiftCardAdjustments" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/gift_cards/{id}/adjustments.json",
            "summary" => "Retrieve a list of all Gift Cards Adjustments for a Gift Card",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Gift Card.",
                    "required" => true
                ),
                "limit" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)"
                ),
                "page" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "Page to show (default: 1)"
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response"
                )
            )
        ),

        /**
         *    createGiftCardAdjustment() method
         *
         *    reference: https://help.shopify.com/api/reference/gift_card_adjustment
         */
        "createGiftCardAdjustment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/gift_cards/{id}/adjustments.json",
            "summary" => "Create a new Gift Card Adjustment.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Gift Card this adjustment should apply to.",
                    "required" => true
                ),
                "adjustment" => array(
                    "location" => "json",
                    "parameters" => array(
                        "amount" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Amount to change the giftcard value by"
                        ),
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The description of the gift card adjustment."
                        ),
                        "processed_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date and time when this adjustment should have been actioned"
                        )
                    )
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
