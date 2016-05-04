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
         *    getDiscounts() method
         *
         *    reference: http://docs.shopify.com/api/discount
         */
        "getDiscounts" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/discounts.json",
            "summary" => "Retrieve a list of all Discounts",
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
                )
            )
        ),

        /**
         *    getDiscount() method
         *
         *    reference: http://docs.shopify.com/api/discount
         */
        "getDiscount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/discount/{id}.json",
            "summary" => "Retrieve a single Discount",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Discount.",
                    "required" => true
                )
            )
        ),


        /**
         *    createDiscount() method
         *
         *    reference: http://docs.shopify.com/api/discount
         */
        "createDiscount" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/discounts.json",
            "summary" => "Create a new Discount.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "discount" => array(
                    "location" => "json",
                    "parameters" => array(
                        "discount_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specify how the discount's value will be applied to the order. Valid values are: fixed_amount, percentage, shipping."
                        ),
                        "code" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The case-insensitive discount code that customers use at checkout. Required when creating a discount. Maximum length of 255 characters."
                        ),
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The value of the discount. Required when creating a percentage-based or fixed-amount discount. See the discount_type property to learn more about how value is interpreted."
                        ),
                        "ends_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date when the discount code becomes disabled in ISO 8601 format."
                        ),
                        "starts_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date the discount becomes valid for use during checkout in ISO 8601 format."
                        ),
                        "minimum_order_amount" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The minimum value an order must reach for the discount to be allowed during checkout."
                        ),
                        "usage_limit" => array(
                            "type" => "integer",
                            "location" => "json",
                            "description" => "The number of times this discount code can be redeemed. It can be redeemed by one or many customers; the usage_limit is a store-wide absolute value. Leave blank for unlimited uses."
                        ),
                        "applies_to_id" => array(
                            "type" => "integer",
                            "location" => "json",
                            "description" => "The id of a collection or product that this discount code is restricted to. Leave blank for a store-wide discount. If applies_to_id is set, then the applies_to_resource property is also mandatory."
                        ),
                        "applies_once" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "When a discount applies to a product or collection resource, applies_once determines whether the discount should be applied once per order, or to every applicable item in the cart."
                        ),
                        "applies_once_per_customer" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Determines whether the discount should be applied once, or any number of times per customer."
                        ),
                        "applies_to_resource" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The discount code can be set to apply to only a product, smart_collection, customersavedsearch or custom_collection. If applies_to_resource is set, then applies_to_id should also be set."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteDiscount() method
         *
         *    reference: http://docs.shopify.com/api/discount
         */
        "deleteDiscount" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/discounts/{id}.json",
            "summary" => "Delete a discount from the shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the discount.",
                    "required" => true
                )
            )
        ),


        /**
         *    disableDiscount() method
         *
         *    reference: http://docs.shopify.com/api/discount
         */
        "disableDiscount" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/discounts/{id}/disable.json",
            "summary" => "Disable a discount from the shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the discount.",
                    "required" => true
                )
            )
        ),


        /**
         *    enableDiscount() method
         *
         *    reference: http://docs.shopify.com/api/discount
         */
        "enableDiscount" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/discounts/{id}/enable.json",
            "summary" => "Enable a discount from the shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the discount.",
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
