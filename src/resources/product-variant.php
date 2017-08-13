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
         *    getProductVariants() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "getProductVariants" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/variants.json",
            "summary" => "Retrieve a list of all product variants.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "ID of the product.",
                    "required" => true
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (Default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID,"
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),


        /**
         *    getProductVariantCount() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "getProductVariantCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/variants/count.json",
            "summary" => "Get a count of product variants.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of hte product.",
                    "required" => true
                )
            )
        ),


        /**
         *    getProductVariant() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "getProductVariant" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/{id}.json",
            "summary" => "Get a single product variant by id.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the product variant.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),

        /**
         *    getProductVariantMetafields() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "getProductVariantMetafields" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/{id}/metafields.json",
            "summary" => "Get a single product variants metafields by id.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the product variant.",
                    "required" => true
                )
            )
        ),



         /**
         *    createProductVariant() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "createProductVariant" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/products/{id}/variants.json",
            "summary" => "Create a new product variant.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the product.",
                    "required" => true
                ),
                "variant" => array(
                    "location" => "json",
                    "parameters" => array(
                        "barcode" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The barcode, UPC or ISBN number for the product."
                        ),
                        "compare_at_price" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The competitors prices for the same item."
                        ),
                        "fulfillment_service" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Service who is doing the fulfillment."
                        ),
                        "grams" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The weight of the product variant in grams."
                        ),
                        "inventory_management" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies whether or not Shopify tracks the number of items in stock for this product variant."
                        ),
                        "inventory_policy" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies whether or not customers are allowed to place an order for a product variant when it's out of stock."
                        ),
                        "inventory_quantity" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The number of items in stock for this product variant."
                        ),
                        "old_inventory_quantity" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The original stock level the client believes the product variant has. This should be sent to avoid a race condition when the item being adjusted is simultaneously sold online."
                        ),
                        "inventory_quantity_adjustment" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Instead of sending a new and old value for inventory an adjustment value can be sent. If an adjustment value is sent it will take priority."
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Attaches additional information to a shop's resources."
                        ),
                        "option" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Custom properties that a shop owner can use to define product variants. Multiple options can exist. Options are represented as: option1, option2, option3 etc."
                        ),
                        "position" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The order of the product variant in the list of product variants. 1 is the first position."
                        ),
                        "price" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The price of the product variant."
                        ),
                        "product_id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The unique numeric identifier for the product."
                        ),
                        "requires_shipping" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies whether or not a customer needs to provide a shipping address when placing an order for this product variant."
                        ),
                        "sku" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A unique identifier for the product in the shop."
                        ),
                        "taxable" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Specifies whether or not a tax is charged when the product variant is sole."
                        ),
                        "title" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The title of the product variant."
                        ),
                        "image_id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The unique numeric identifier for one of the product's images."
                        ),
                    )
                )
            )
        ),


         /**
         *    updateProductVariant() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "updateProductVariant" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/variants/{id}.json",
            "summary" => "Update a product variant.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the variant.",
                    "required" => true
                ),
                "variant" => array(
                    "location" => "json",
                    "parameters" => array(
                    	"id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The ID of the variant."
                        ),
                        "barcode" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The barcode, UPC or ISBN number for the product."
                        ),
                        "compare_at_price" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The competitors prices for the same item."
                        ),
                        "fulfillment_service" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Service who is doing the fulfillment."
                        ),
                        "grams" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The weight of the product variant in grams."
                        ),
                        "inventory_management" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies whether or not Shopify tracks the number of items in stock for this product variant."
                        ),
                        "inventory_policy" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies whether or not customers are allowed to place an order for a product variant when it's out of stock."
                        ),
                        "inventory_quantity" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The number of items in stock for this product variant."
                        ),
                        "old_inventory_quantity" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The original stock level the client believes the product variant has. This should be sent to avoid a race condition when the item being adjusted is simultaneously sold online."
                        ),
                        "inventory_quantity_adjustment" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Instead of sending a new and old value for inventory an adjustment value can be sent. If an adjustment value is sent it will take priority."
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Attaches additional information to a shop's resources."
                        ),
                        "option" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Custom properties that a shop owner can use to define product variants. Multiple options can exist. Options are represented as: option1, option2, option3 etc."
                        ),
                        "position" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The order of the product variant in the list of product variants. 1 is the first position."
                        ),
                        "price" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The price of the product variant."
                        ),
                        "product_id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The unique numeric identifier for the product."
                        ),
                        "requires_shipping" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies whether or not a customer needs to provide a shipping address when placing an order for this product variant."
                        ),
                        "sku" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A unique identifier for the product in the shop."
                        ),
                        "taxable" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Specifies whether or not a tax is charged when the product variant is sole."
                        ),
                        "title" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The title of the product variant."
                        ),
                        "image_id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The unique numeric identifier for one of the product's images."
                        ),
                    )
                )
            )
        ),


        /**
         *    deleteProductVariant() method
         *
         *    reference: https://help.shopify.com/api/reference/product_variant
         */
        "deleteProductVariant" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/products/{product_id}/variants/{id}.json",
            "summary" => "Delete a product variant.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the variant.",
                    "required" => true
                ),
                "product_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the product.",
                    "required" => true
                )
            )
        ),
        
        /**
         *    searchProductVariant() method
         *
         *    reference: https://ecommerce.shopify.com/c/shopify-apis-and-technology/t/api-product-variant-search-183152
         */
        "searchProductVariant" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/search.json",
            "summary" => "Search for a product variant (beta).",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "query" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Query parameters i.e sku:HELLOWORLD",
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
