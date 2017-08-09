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
         *    getCustomCollections() method
         *
         *    reference: https://help.shopify.com/api/reference/customcollection
         */
        "getCustomCollections" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections.json",
            "summary" => "Get a list of all custom collections that contain a given product",
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
                "since_id" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID"
                ),
                "title" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Filter by custom collection title"
                ),
                "product_id" => array(
	                "type" => "integer",
	                "location" => "query",
	                "description" => "Filter by product id"
                ),
                "handle" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Filter by custom collection handle"
                ),
                "updated_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show custom collections last updated after date (format: 2008-12-31 03:00)"
                ),
                "updated_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show custom collections last updated before date (format: 2008-12-31 03:00)"
                ),
                "published_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show custom collections published after date (format: 2008-12-31 03:00)"
                ),
                "published_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show custom collections published before date (format: 2008-12-31 03:00)"
                ),
                "published_status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "published - Show only published custom collections. unpublished - Show only unpublished custom collections. any - Show all custom collections (default)"
                ),
                "fields" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "comma-separated list of fields to include in the response"
                ),
            ),
        ),
        
        /**
         *    getCustomCollectionCount() method
         *
         *    reference: https://help.shopify.com/api/reference/customcollection
         */
        "getCustomCollectionCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections/count.json",
            "summary" => "Retrieve a count of all Custom Collections",
            "responseModel" => "defaultJsonResponse"
        ),
        
        /**
         *    getCustomCollection() method
         *
         *    reference: https://help.shopify.com/api/reference/customcollection
         */
        "getCustomCollection" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Retrieve a single Collection",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Custom Collection.",
                    "required" => true
                )
            )
        ),


        /**
         *    createCustomCollection() method
         *
         *    reference: https://help.shopify.com/api/reference/customcollection
         */
        "createCustomCollection" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/custom_collections.json",
            "summary" => "Creates a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "custom_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "body_html" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "sort_order" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "title" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "collects" => array(
                            "type" => "string",
                            "location" => "json",
                        )
                    )
                )
            )
        ),


         /**
         *    updateCustomCollection() method
         *
         *    reference: https://help.shopify.com/api/reference/customcollection
         */
        "updateCustomCollection" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Update a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "required" => true
                ),
                "custom_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                        ),
                        "body_html" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "sort_order" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "title" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "collects" => array(
                            "type" => "string",
                            "location" => "json",
                        )
                    )
                )
            )
        ),

        /**
         *    deleteCustomCollection() method
         *
         *    reference: https://help.shopify.com/api/reference/customcollection
         */
        "deleteCustomCollection" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Delete a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the custom collection.",
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
