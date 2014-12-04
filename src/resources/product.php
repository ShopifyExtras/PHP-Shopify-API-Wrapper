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
         *    getProducts() method
         *
         *    reference: http://docs.shopify.com/api/product
         */
        "getProducts" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products.json",
            "summary" => "Retrieve a list of all Products",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "Amount of results (default: 50) (maximum: 250)"
                ),
                "page" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "Page to show (default: 1)"
                ),
                "since_id" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID"
                ),
                "vendor" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Filter by product vendor"
                ),
                "handle" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Filter by product handle"
                ),
                "product_type" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Filter by product type"
                ),
                "collection_id" => array(
	                "type" => "integer",
	                "location" => "uri",
	                "description" => "Filter by collection id"
                ),
                "created_at_min" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Show products created after date (format: 2008-12-31 03:00)"
                ),
                "created_at_max" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Show products created before date (format: 2008-12-31 03:00)"
                ),
                "updated_at_min" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Show products last updated after date (format: 2008-12-31 03:00)"
                ),
                "updated_at_max" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Show products last updated before date (format: 2008-12-31 03:00)"
                ),
                "published_at_min" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Show products published after date (format: 2008-12-31 03:00)"
                ),
                "published_at_max" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "Show products published before date (format: 2008-12-31 03:00)"
                ),
                "published_status" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "published - Show only published products. unpublished - Show only unpublished products. any - Show all products (default)"
                ),
                "fields" => array(
	                "type" => "string",
	                "location" => "uri",
	                "description" => "comma-separated list of fields to include in the response"
                )
            )
        ),

        
        /**
         *    getProductCount() method
         *
         *    reference: http://docs.shopify.com/api/product
         */
        "getProductCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/count.json",
            "summary" => "Retrieve a count of all Products",
            "responseModel" => "defaultJsonResponse"
        ),
        

        /**
         *    getProduct() method
         *
         *    reference: http://docs.shopify.com/api/product
         */
        "getProduct" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/product/{id}.json",
            "summary" => "Retrieve a single Product",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Product."
                )
            )
        ),
        

         /**
         *    createProduct() method
         *
         *    reference: http://docs.shopify.com/api/product
         */
        "createProduct" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/products.json",
            "summary" => "Create a new product.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "product" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "body_html" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The description of the product, complete with HTML formatting."
                        ),
                        "vendor" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A human-friendly unique string for the page automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the page."
                        ),
                        "product_type" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A categorization that a product can be tagged with, commonly used for filtering and searching."
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A human-friendly unique string for the Product automatically generated from its title. They are used by the Liquid templating language to refer to objects."
                        ),
                        "images" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A list of image objects, each one representing an image associated with the product."
                        ),
                        "options" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "Custom product property names like Size, Color, and Material. Products are based on permutations of these options. A product may have a maximum of 3 options. 255 characters limit each."
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The date and time when the product was published. The API returns this value in ISO 8601 format."
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The sales channels in which the product is visible."
                        ),
                        "tags" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A categorization that a product can be tagged with, commonly used for filtering and searching."
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The suffix of the liquid template being used. By default, the original template is called product.liquid, without any suffix. Any additional templates will be: product.suffix.liquid."
                        ),
                        "title" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The name of the product. In a shop's catalog, clicking on a product's title takes you to that product's page. On a product's page, the product's title typically appears in a large font."
                        ),
                        "variants" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A list of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as small black, medium black, large blue), would be a variant."
                        ),
                        "vendor" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The name of the vendor of the product."
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "postField",
                            "description" => "The product status."
                        )
                    )
                )
            )
        ),


        /**
         *    updateProduct() method
         *
         *    reference: http://docs.shopify.com/api/product
         */
        "updateProduct" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/products/{id}.json",
            "summary" => "Update an existing product.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The products ID number."
                ),
                "product" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "postField",
                            "description" => "The products ID number."
                        ),
                        "body_html" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The description of the product, complete with HTML formatting."
                        ),
                        "vendor" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A human-friendly unique string for the page automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the page."
                        ),
                        "product_type" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A categorization that a product can be tagged with, commonly used for filtering and searching."
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A human-friendly unique string for the Product automatically generated from its title. They are used by the Liquid templating language to refer to objects."
                        ),
                        "images" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A list of image objects, each one representing an image associated with the product."
                        ),
                        "options" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "Custom product property names like Size, Color, and Material. Products are based on permutations of these options. A product may have a maximum of 3 options. 255 characters limit each."
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The date and time when the product was published. The API returns this value in ISO 8601 format."
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The sales channels in which the product is visible."
                        ),
                        "tags" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A categorization that a product can be tagged with, commonly used for filtering and searching."
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The suffix of the liquid template being used. By default, the original template is called product.liquid, without any suffix. Any additional templates will be: product.suffix.liquid."
                        ),
                        "title" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The name of the product. In a shop's catalog, clicking on a product's title takes you to that product's page. On a product's page, the product's title typically appears in a large font."
                        ),
                        "variants" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "A list of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as small black, medium black, large blue), would be a variant."
                        ),
                        "vendor" => array(
                            "type" => "string",
                            "location" => "postField",
                            "description" => "The name of the vendor of the product."
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "postField",
                            "description" => "The product status."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteProduct() method
         *
         *    reference: http://docs.shopify.com/api/product
         */
        "deletePage" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/products/{id}.json",
            "summary" => "Delete a product from the shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the product."
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
