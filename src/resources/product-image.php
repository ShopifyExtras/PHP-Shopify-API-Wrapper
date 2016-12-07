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
         *    getProductImages() method
         *
         *    reference: http://docs.shopify.com/api/product_image
         */
        "getProductImages" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/images.json",
            "summary" => "Retrieve a list of all Product images.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "fields" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),

        
        /**
         *    getProductImageCount() method
         *
         *    reference: http://docs.shopify.com/api/product_image
         */
        "getProductImageCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/images/count.json",
            "summary" => "Get a count of all product images",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the product.",
                    "required" => true
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count articles created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count articles last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count articles last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count articles published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count articles published before date (format: 2008-12-31 03:00)."
                )
            )
        ),
        

        /**
         *    getProductImage() method
         *
         *    reference: http://docs.shopify.com/api/product_image
         */
        "getProductImage" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}.json",
            "summary" => "Retrieve a single product image.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the product image.",
                    "required" => true
                )
            )
        ),
        

         /**
         *    createProductImage() method
         *
         *    reference: http://docs.shopify.com/api/product_image
         */
        "createProductImage" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/products/{id}/images.json",
            "summary" => "Create a new product image.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the product you wish to add the image to.",
                    "required" => true
                ),
                "image" => array(
                    "location" => "json",
                    "parameters" => array(
                        "attachment" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "filename" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies the location of the product image."
                        ),
                        "position" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The order of the product image in the list. The first product image is at position 1 and is the main image for the product."
                        ),
                        "variant_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "An array of variant ids associated with the image."
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A categorization that a product can be tagged with, commonly used for filtering and searching."
                        ),
                    )
                )
            )
        ),


        /**
         *    updateProductImage() method
         *
         *    reference: http://docs.shopify.com/api/product_image
         */
        "updateProductImage" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/products/{product_id}/images/{id}.json",
            "summary" => "Update a product image.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "product_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the product.",
                    "required" => true
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the image.",
                    "required" => true
                ),
                "image" => array(
                    "location" => "json",
                    "parameters" => array(
                        "product_id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID of the product."
                        ),
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID of the image."
                        ),
                        "attachment" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "filename" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies the location of the product image."
                        ),
                        "position" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The order of the product image in the list. The first product image is at position 1 and is the main image for the product."
                        ),
                        "variant_ids" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "An array of variant ids associated with the image."
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A categorization that a product can be tagged with, commonly used for filtering and searching."
                        ),
                    )
                )
            )
        ),


        /**
         *    deleteProductImage() method
         *
         *    reference: http://docs.shopify.com/api/product_image
         */
        "deleteProductImage" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/products/{product_id}/images/{id}.json",
            "summary" => "Delete a product image.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the image.",
                    "required" => true
                ),
                "product_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the product.",
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
