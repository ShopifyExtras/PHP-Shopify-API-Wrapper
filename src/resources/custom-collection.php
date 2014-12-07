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
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "getCustomCollections" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections.json",
            "summary" => "Get a list of all custom collections that contain a given product",
            "responseModel" => "defaultJsonResponse"
        ),
        
        /**
         *    getCustomCollectionCount() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
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
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "getCustomCollection" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Retrieve a single Blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Custom Collection."
                )
            )
        ),


        /**
         *    createCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "createCustomCollection" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/custom_collections.json",
            "summary" => "Creates a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "custom_collection" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "body_html" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "sort_order" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "title" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "collects" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "postField",
                        )
                    )
                )
            )
        ),


         /**
         *    updateCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
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
                ),
                "custom_collection" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "postField",
                        ),
                        "body_html" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "sort_order" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "title" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "collects" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "postField",
                        )
                    )
                )
            )
        ),

        /**
         *    deleteCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
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
                    "description" => "Unique numeric identifier for the custom collection."
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
