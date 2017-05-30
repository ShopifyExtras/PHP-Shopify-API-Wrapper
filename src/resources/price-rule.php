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
         *    getPriceRules() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Price-Rule%2Fpaths%2F~1admin~1price_rules.json%2Fget
         */
        "getPriceRules" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/price_rules.json",
            "summary" => "Retrieve a list of all Price Rules",
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
         *    getPriceRule() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Price-Rule%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D.json%2Fget
         */
        "getPriceRule" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/price_rules/{id}.json",
            "summary" => "Retrieve a single price rule",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Price Rule.",
                    "required" => true
                )
            )
        ),

        /**
         *    deletePriceRule() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Price-Rule%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D.json%2Fdelete
         */
        "deletePriceRule" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/price_rules/{id}.json",
            "summary" => "Delete price rule",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Price Rule.",
                    "required" => true
                )
            )
        ),

        /**
         *    createPriceRule() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Price-Rule%2Fpaths%2F~1admin~1price_rules.json%2Fpost
         */
        "createPriceRule" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/price_rules.json",
            "summary" => "Create a new Price Rule.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "price_rule" => array(
                    "location" => "json",
                    "parameters" => array(
                        "title" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The title of the price rule."
                        ),
                        "target_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "VThe target type the price rule applies to. (line_item, shipping_line)"
                        ),
                        "target_selection" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The target selection method of the price rule."
                        ),
                        "allocation_method" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The allocation method of the price rule. (across, each)"
                        ),
                        "value_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The value type of the price rule. If target_type is shipping_line then only percentage is accepted."
                        ),
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The value of the price rule."

                        ),
                        "once_per_customer" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "The price rule can only be used once per customer (tracked by customer id)."
                        ),
                        "usage_limit" => array(
                            "type" => "integer",
                            "location" => "json",
                            "description" => "The maximum number of times the price rule can be used, per discount code."
                        ),
                        "customer_selection" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer selection for the price rule."
                        ),
                        "prerequisite_subtotal_range" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Prerequisite cart subtotal range."
                        ),
                        "prerequisite_shipping_price_range" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Prerequisite shipping cost range."
                        ),
                        "prerequisite_saved_search_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of prerequisite customer saved search ids"
                        ),
                        "entitled_product_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of entitled product ids"
                        ),
                        "entitled_variant_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of entitled product variant ids."
                        ),
                        "entitled_collection_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of entitled collection ids."
                        ),
                        "entitled_country_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of shipping country ids. "
                        ),
                        "starts_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date and time when the price rule starts."
                        ),
                        "ends_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date and time when the price rule ends. Must be after starts_at."
                        )
                    )
                )
            )
        ),


        /**
         *    updatePriceRule() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Price-Rule%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D.json%2Fput
         */
        "updatePriceRule" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/gift_cards/{id}.json",
            "summary" => "Update an existing price rule.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The price rule ID number.",
                    "required" => true
                ),
                "price_rule" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The price rule ID number."
                        ),
                        "title" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The title of the price rule."
                        ),
                        "target_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "VThe target type the price rule applies to. (line_item, shipping_line)"
                        ),
                        "target_selection" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The target selection method of the price rule."
                        ),
                        "allocation_method" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The allocation method of the price rule. (across, each)"
                        ),
                        "value_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The value type of the price rule. If target_type is shipping_line then only percentage is accepted."
                        ),
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The value of the price rule."
                        ),
                        "once_per_customer" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "The price rule can only be used once per customer (tracked by customer id)."
                        ),
                        "usage_limit" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The maximum number of times the price rule can be used, per discount code."
                        ),
                        "customer_selection" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer selection for the price rule."
                        ),
                        "prerequisite_subtotal_range" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Prerequisite cart subtotal range."
                        ),
                        "prerequisite_shipping_price_range" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Prerequisite shipping cost range."
                        ),
                        "prerequisite_saved_search_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of prerequisite customer saved search ids"
                        ),
                        "entitled_product_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of entitled product ids"
                        ),
                        "entitled_variant_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of entitled product variant ids."
                        ),
                        "entitled_collection_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of entitled collection ids."
                        ),
                        "entitled_country_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of shipping country ids. "
                        ),
                        "starts_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date and time when the price rule starts."
                        ),
                        "ends_at" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The date and time when the price rule ends. Must be after starts_at."
                        )
                    )
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
