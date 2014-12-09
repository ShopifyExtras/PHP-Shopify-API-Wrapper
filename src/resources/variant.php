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
         *    getVariants() method
         *
         *    reference: http://docs.shopify.com/api/product_variant
         */
        "getVariants" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/variants.json",
            "summary" => "Get all variants for a product",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                )
            )
        ),
        
        /**
         *    getVariantCount() method
         *
         *    reference: http://docs.shopify.com/api/product_variant
         */
        "getProductCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/variants/count.json",
            "summary" => "Get a count of product variants",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                )
            )
        ),
        
        /**
         *    getVariant() method
         *
         *    reference: http://docs.shopify.com/api/product_variant
         */
        "getVariant" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/{id}.json",
            "summary" => "Get a single product variant by id",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Variant.",
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