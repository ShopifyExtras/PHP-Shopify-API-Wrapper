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
         *    getDiscountCodes() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Discount-Code%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D~1discount_codes.json%2Fget
         */
        "getDiscountCodes" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/price_rules/{id}/discount_codes.json",
            "summary" => "Retrieve a list of all discount codes.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the price rule.",
                    "required" => true
                )
            )
        ),

        /**
         *    searchDiscountCodes() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Discount-Code%2Fpaths%2F~1admin~1discount_codes~1lookup%3Fcode%3DdiscountCode%2Fget
         */
        "searchDiscountCodes" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/discount_codes/lookup?code=discountCode",
            "summary" => "Search by discount code.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "code" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Discountcode to look for"
                )
            )
        ),

        /**
         *    getDiscountCode() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Discount-Code%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D~1discount_codes~1%7BdiscountCodeId%7D.json%2Fget
         */
        "getDiscountCode" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/price_rules/{id}/discount_codes/{discountCodeId}.json",
            "summary" => "Retrieve a single discount code",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the price rule.",
                    "required" => true
                ),
                "discountCodeId" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the discount code.",
                    "required" => true
                )
            )
        ),


        /**
         *    createDiscountCode() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Discount-Code%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D~1discount_codes.json%2Fpost
         */
        "createDiscountCode" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/price_rules/{id}/discount_codes.json",
            "summary" => "Create a new discount code.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The price rule ID number.",
                    "required" => true
                ),
                "discount_code" => array(
                    "location" => "json",
                    "parameters" => array(
                        "code" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The discount code value."
                        )
                    )
                )
            )
        ),


        /**
         *    updateDiscountCode() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Discount-Code%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D~1discount_codes~1%7BdiscountCodeId%7D.json%2Fput
         */
        "updateDiscountCode" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/price_rules/{id}/discount_codes/{discountCodeId}.json",
            "summary" => "Update an existing discount code.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The price rule ID number.",
                    "required" => true
                ),
                "discountCodeId" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The discount code ID number.",
                    "required" => true
                ),
                "discount_code" => array(
                    "location" => "json",
                    "parameters" => array(
                        "code" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The discount code value."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteDiscountCode() method
         *
         *    reference: https://help.shopify.com/api/price-rules#tag/Discount-Code%2Fpaths%2F~1admin~1price_rules~1%7BpriceRuleId%7D~1discount_codes~1%7BdiscountCodeId%7D.json%2Fdelete
         */
        "deleteDiscountCode" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/price_rules/{id}/discount_codes/{discountCodeId}.json",
            "summary" => "Disable a discount code from the shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The price rule ID number.",
                    "required" => true
                ),
                "discountCodeId" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The discount code ID number.",
                    "required" => true
                ),
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
