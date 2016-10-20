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
         *    getGiftCards() method
         *
         *    reference: http://docs.shopify.com/api/gift_card
         */
        "getGiftCards" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/gift_cards.json",
            "summary" => "Retrieve a list of all Gift Cards",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
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
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Filter by gift card status"
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response"
                )
            )
        ),


        /**
         *    getGiftCardCount() method
         *
         *    reference: http://docs.shopify.com/api/gift_card
         */
        "getGiftCardCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/gift_cards/count.json",
            "summary" => "Retrieve a count of all Gift Cards",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Filter by gift card status"
                )
            )
        ),


        /**
         *    getGiftCard() method
         *
         *    reference: http://docs.shopify.com/api/gift_card
         */
        "getGiftCard" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/gift_Cards/{id}.json",
            "summary" => "Retrieve a single Gift Card",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Gift Card.",
                    "required" => true
                )
            )
        ),


        /**
         *    createGiftCard() method
         *
         *    reference: http://docs.shopify.com/api/gift_card
         */
        "createGiftCard" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/gift_cards.json",
            "summary" => "Create a new Gift Card.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "gift_card" => array(
                    "location" => "json",
                    "parameters" => array(
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The description of the gift card."
                        ),
                        "initial_value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Value of the gift card."
                        ),
                        "code" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Code of the gift card."
                        ),
                        "customer_id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "ID of the customer gift card is issued to."
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Suffix for the email template."
                        ),
                        "expires_on" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Date of expiry."
                        )
                    )
                )
            )
        ),


        /**
         *    updateGiftCard() method
         *
         *    reference: http://docs.shopify.com/api/gift_card
         */
        "updateGiftCard" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/gift_cards/{id}.json",
            "summary" => "Update an existing gift card.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The gift card ID number.",
                    "required" => true
                ),
                "gift_card" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The gift card ID number."
                        ),
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The description of the gift card."
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Suffix for the email template."
                        ),
                        "expires_on" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Date of expiry."
                        )
                    )
                )
            )
        ),


        /**
         *    disableGiftCard() method
         *
         *    reference: http://docs.shopify.com/api/gift_card
         */
        "disableGiftCard" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/gift_cards/{id}/disable.json",
            "summary" => "Disable a gift card from the shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the gift card.",
                    "required" => true
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
