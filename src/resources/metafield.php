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
         *    getMetafields() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getMetafields" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/metafields.json",
            "summary" => "Get metafields that belong to a store",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)"
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID"
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show metafields created after date (format: 2008-12-31 03:00)"
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show metafields created before date (format: 2008-12-31 03:00)"
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show metafields last updated after date (format: 2008-12-31 03:00)"
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show metafields last updated before date (format: 2008-12-31 03:00)"
                ),
                "namepace" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show metafields with given namespace"
                ),
                "key" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show metafields with given key"
                ),
                "value_type" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "string - Show only metafields with string value types. integer - Show only metafields with integer value types"
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response"
                ),
            )
        ),


        /**
         *    getProductMetafields() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getProductMetafields" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/metafields.json",
            "summary" => "Get metafields that belong to a product",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                )
            )
        ),


        /**
         *    getProductVariantMetafields() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getProductVariantMetafields" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/{id}/metafields.json",
            "summary" => "Get metafields that belong to a variant",
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


        /**
         *    getMetafieldsCount() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getMetafieldsCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/metafields/count.json",
            "summary" => "Get a count of metafields that belong to a store",
            "responseModel" => "defaultJsonResponse"
        ),


        /**
         *    getProductMetafieldsCount() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getProductMetafieldsCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/metafields/count.json",
            "summary" => "Get a count of metafields that belong to a product",
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
         *    getProductVariantMetafieldsCount() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getProductVariantMetafieldsCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/{id}/metafields/count.json",
            "summary" => "Get a count of metafields that belong to a variant",
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


        /**
         *    getMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getMetafield" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/metafields/{id}.json",
            "summary" => "Get a single store metafield by its ID",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                )
            )
        ),


        /**
         *    getProductMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getProductMetafield" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/products/{id}/metafields/{metafield_id}.json",
            "summary" => "Get a single product metafield by its ID",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
                "metafield_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                )
            )
        ),


        /**
         *    getProductMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "getProductVariantMetafield" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/variants/{id}/metafields/{metafield_id}.json",
            "summary" => "Get a single variant metafield by its ID",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Variant.",
                    "required" => true
                ),
                "metafield_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                )
            )
        ),


         /**
         *    createMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "createMetafield" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/metafields.json",
            "summary" => "Create a new metafield for a store",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "metafield" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "namespace" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Namespace for the Metafield."
		                ),
		                "key" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Key for the Metafield."
		                ),
		                "value" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value of the Metafield."
		                ),
		                "value_type" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value Type of the Metafield."
		                )
					)
	            )
            )
        ),


         /**
         *    createProductMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "createProductMetafield" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/products/{id}/metafields.json",
            "summary" => "Create a new metafield for a product",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
	            "metafield" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "namespace" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Namespace for the Metafield."
		                ),
		                "key" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Key for the Metafield."
		                ),
		                "value" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value of the Metafield."
		                ),
		                "value_type" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value Type of the Metafield."
		                )
					)
	            )
            )
        ),


        /**
         *    createProductVariantMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "createProductVariantMetafield" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/variants/{id}/metafields.json",
            "summary" => "Create a new metafield for a variant",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Variant.",
                    "required" => true
                ),
                "metafield" => array(
                    "location" => "json",
                    "parameters" => array(
                        "namespace" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The Namespace for the Metafield."
                        ),
                        "key" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The Key for the Metafield."
                        ),
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The Value of the Metafield."
                        ),
                        "value_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The Value Type of the Metafield."
                        )
                    )
                )
            )
        ),


        /**
         *    updateMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "updateMetafield" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/metafields/{id}.json",
            "summary" => "Update a store Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
	            "metafield" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "metafieldId" => array(
		                    "type" => "integer",
		                    "location" => "json",
		                    "description" => "The ID for the Metafield."
		                ),
		                "value" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value of the Metafield."
		                ),
		                "value_type" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value Type of the Metafield."
		                )
					)
	            )
            )
        ),


        /**
         *    updateProductMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "updateProductMetafield" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/products/{id}/metafields/{metafield_id}.json",
            "summary" => "Update a Product Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
                "metafield_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                ),
	            "metafield" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "metafieldId" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID for the Metafield."
		                ),
		                "value" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value of the Metafield."
		                ),
		                "value_type" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The Value Type of the Metafield."
		                )
					)
	            )
            )
        ),


        /**
         *    updateProductVariantMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "updateProductVariantMetafield" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/variants/{id}/metafields/{metafield_id}.json",
            "summary" => "Update a Variant Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Variant.",
                    "required" => true
                ),
                "metafield_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                ),
                "metafield" => array(
                    "location" => "json",
                    "parameters" => array(
                        "metafieldId" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID for the Metafield."
                        ),
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The Value of the Metafield."
                        ),
                        "value_type" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The Value Type of the Metafield."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "deleteMetafield" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/metafields/{id}.json",
            "summary" => "Delete a store Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                )
            )
        ),


        /**
         *    deleteProductMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "deleteProductMetafield" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/products/{id}/metafields/{metafieldId}.json",
            "summary" => "Delete a Product Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Product.",
                    "required" => true
                ),
                "metafieldId" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
                    "required" => true
                )
            )
        ),


        /**
         *    deleteProductVariantMetafield() method
         *
         *    reference: http://docs.shopify.com/api/metafield
         */
        "deleteProductVariantMetafield" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/variants/{id}/metafields/{metafieldId}.json",
            "summary" => "Delete a Product Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Variant.",
                    "required" => true
                ),
                "metafieldId" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Metafield.",
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
