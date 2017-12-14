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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
                ),
                "namespace" => array(
                    "location" => "json",
		    "description" => "The namespace of the metafield"	
                )
            )
        ),


        /**
         *    getProductVariantMetafields() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    createCollectionMetafield() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
         */
        "createCollectionMetafield" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/collections/{id}/metafields.json",
            "summary" => "Create a new metafield for a collection",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Collection.",
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
         *    createProductMetafield() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    updateCollectionMetafield() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
         */
        "updateCollectionMetafield" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/collections/{id}/metafields/{metafield_id}.json",
            "summary" => "Update a Collection Metafield",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Collection.",
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
         *    updateProductMetafield() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    deleteCollectionMetafield() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
         */
        "deleteCollectionMetafield" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/collections/{id}/metafields/{metafieldId}.json",
            "summary" => "Delete a Collection Metafield",
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
         *    deleteProductMetafield() method
         *
         *    reference: https://help.shopify.com/api/reference/metafield
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
         *    reference: https://help.shopify.com/api/reference/metafield
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
