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
         *    getCollects() method
         *
         *    reference: https://help.shopify.com/api/reference/collect
         */
        "getCollects" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collects.json",
            "summary" => "Retrieve a list of all Collects",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Collects per page (default: 50) (maximum: 250)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                ),
                "product_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "List only collects for a certain product."
                ),
                "collection_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "List only collects for a certain collection."
                )
            )
        ),


        /**
         *    getCollectCount() method
         *
         *    reference: https://help.shopify.com/api/reference/collect
         */
        "getCollectCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collects/count.json",
            "summary" => "Retrieve a count of all Collects",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "product_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "List only collects for a certain product."
                ),
                "collection_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "List only collects for a certain collection."
                )
            )
        ),


        /**
         *    getCollect() method
         *
         *    reference: https://help.shopify.com/api/reference/collect
         */
        "getCollect" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/collects/{id}.json",
            "summary" => "Retrieve a single Collect",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Collect.",
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
         *    createCollect() method
         *
         *    reference: https://help.shopify.com/api/reference/collect
         */
        "createCollect" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/collects.json",
            "summary" => "Create a new Collect",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "collect" => array(
                            "location" => "json",
                            "parameters" => array(
                                "product_id" => array(
                                    "type" => "number",
                                    "location" => "json",
                                    "description" => "The product id for this Collect"
                                ),
                                "collection_id" => array(
                                    "type" => "number",
                                    "location" => "json",
                                    "description" => "The collection id for this Collect"
                                ),
                                "featured" => array(
                                    "type" => "boolean",
                                    "location" => "json",
                                    "description" => "Whether this is a featured Collect"
                                ),
                                "position" => array(
                                    "type" => "number",
                                    "location" => "json",
                                    "description" => "The position of this Collect"
                                ),
                                "sort_value" => array(
                                    "type" => "string",
                                    "location" => "json",
                                    "description" => "The sort value of this Collect"
                                ),
                           )
                    )
            )
        ),


        /**
         *    deleteCollect() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "deleteCollect" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/collects/{id}.json",
            "summary" => "Delete a Collect.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the Collect.",
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
