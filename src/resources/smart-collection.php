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
         *    getSmartCollections() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "getSmartCollections" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/smart_collections.json",
            "summary" => "Receive a list of all SmartCollections.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "title" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections with given title."
                ),
                "product_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections that includes given product."
                ),
                "handle" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Filter by smart collection handle."
                ),
                "updated_at_min" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => ""
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Ccomma-separated list of fields to include in the response."
                )
            )
        ),

        
        /**
         *    getSmartCollectionsCount() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "getSmartCollectionsCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/smart_collectoins/count.json",
            "summary" => "Get a count of all smart collections that contain a given product.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "title" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show smart collections with given title."
                ),
                "product_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Show smart collections that includes given product."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show smart collections last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show smart collections last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show smart collections published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show smart collections published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                )
            )
        ),

        
        /**
         *    getSmartCollection() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "getSmartCollection" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/smart_collections/{id}.json",
            "summary" => "Get a single smart collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the smartcollection.",
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
         *    createSmartCollection() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "createSmartCollection" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/smart_collectionsjson",
            "summary" => "Create a new smart collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "smart_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "title" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "Show smart collections with given title."
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The collection image."
                        ),
                        "body_html" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page."
                        ),
                        "rules" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The list of rules that define what products go into the smart collection."
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => ""
                        ),
                        "handle" => array(
                        	"type" => "string",
                        	"location" => "json",
                        	"description" => "A human-friendly unique string for the smart collection automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the smart collection. Limit of 255 characters."
                        ),
                        "published_at" => array(
                        	"type" => "string",
                        	"location" => "json",
                        	"description" => ""
                        ),
                        "published_scope" => array(
                        	"type" => "string",
                        	"location" => "json",
                        	"description" => "The sales channels in which the smart collection is visible."
                        ),
                        "disjunctive" => array(
							"type" => "boolean",
                        	"location" => "json",
                        	"description" => "If false, products must match all of the rules to be included in the collection. If true, products can only match one of the rules."
                        ),
                        "sort_order" => array(
							"type" => "string",
                        	"location" => "json",
                        	"description" => "The order in which products in the smart collection appear."
                        ),
                        "template_suffix" => array(
							"type" => "string",
                        	"location" => "json",
                        	"description" => "The suffix of the template you are using. By default, the original template is called product.liquid, without any suffix. Any additional templates will be: product.suffix.liquid."
                        )
                    )
                )
            )
        ),


		/**
         *    updateSmartCollection() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "updateSmartCollection" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/smart_collections/{id}.json",
            "summary" => "Update a smart collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the smart collection.",
                    "required" => true
                ),
                "smart_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID of the smart collection."
                        ),
                        "title" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "Show smart collections with given title."
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The collection image."
                        ),
                        "body_html" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page."
                        ),
                        "rules" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The list of rules that define what products go into the smart collection."
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => ""
                        ),
                        "handle" => array(
                        	"type" => "string",
                        	"location" => "json",
                        	"description" => "A human-friendly unique string for the smart collection automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the smart collection. Limit of 255 characters."
                        ),
                        "published_at" => array(
                        	"type" => "string",
                        	"location" => "json",
                        	"description" => ""
                        ),
                        "published_scope" => array(
                        	"type" => "string",
                        	"location" => "json",
                        	"description" => "The sales channels in which the smart collection is visible."
                        ),
                        "disjunctive" => array(
							"type" => "boolean",
                        	"location" => "json",
                        	"description" => "If false, products must match all of the rules to be included in the collection. If true, products can only match one of the rules."
                        ),
                        "sort_order" => array(
							"type" => "string",
                        	"location" => "json",
                        	"description" => "The order in which products in the smart collection appear."
                        ),
                        "template_suffix" => array(
							"type" => "string",
                        	"location" => "json",
                        	"description" => "The suffix of the template you are using. By default, the original template is called product.liquid, without any suffix. Any additional templates will be: product.suffix.liquid."
                        )
                    )
                )
            )
        ),

		
		/**
         *    updateSmartCollectionOrder() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "updateSmartCollectionOrder" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/smart_collections/{id}/order.json",
            "summary" => "Update a smart collections sort order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the smart collection.",
                    "required" => true
                ),
                "smart_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The ID of the smart collection."
                        ),
                        "products" => array(
							"type" => "string",
                        	"location" => "json",
                        	"description" => "Array of product ids in the order you want them arranged. (Applies only when sort_order is set to manual)"
                        ),
                        "sort_order" => array(
							"type" => "string",
                        	"location" => "json",
                        	"description" => "The type of sorting to apply. Valid values are listed in the Properties section above."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteSmartCollection() method
         *
         *    reference: http://docs.shopify.com/api/smartcollection
         */
        "deleteSmartCollection" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/smart_collections/{id}.json",
            "summary" => "Remove a smart collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the smart collection.",
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