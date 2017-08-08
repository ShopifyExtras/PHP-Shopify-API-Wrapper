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
         *    getPages() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "getPages" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/pages.json",
            "summary" => "Get a list of all pages.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50)(maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "title" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages by Title."
                ),
                "handle" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Filter by Page handle."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show pages published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "published - Show only published pages. unpublished - Show only unpublished pages. any - Show all pages (default)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getPageCount() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "getPageCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/pages/count.json",
            "summary" => "Get a count of all pages.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "title" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages with a given title."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Pages published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "published - Show only published pages. unpublished - Show only unpublished pages. any - Show all pages (default)."
                )
            )
        ),
        
        
        /**
         *    getPage() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "getPage" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/pages/{id}.json",
            "summary" => "Retrieve a single page.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Page.",
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
         *    createPage() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "createPage" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/pages.json",
            "summary" => "Create a new page.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "page" => array(
		            "location" => "json",
		            "parameters" => array(
		                "author" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the person who created the page."
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Text content of the page, complete with HTML markup."
		                ),
		                "handle" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A human-friendly unique string for the page automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the page."
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The suffix of the liquid template being used. By default, the original template is called page.liquid, without any suffix. Any additional templates will be: page.suffix.liquid."
		                ),
		                "title" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The title of the page."
		                ),
		                "published" => array(
			                "type" => "boolean",
		                    "location" => "json",
		                    "description" => ""
		                )
					)
				)
            )
        ),
        
        
        /**
         *    updatePage() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "updatePage" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/pages/{id}.json",
            "summary" => "Update a page.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the page.",
                    "required" => true
                ),
	            "page" => array(
		            "location" => "json",
		            "parameters" => array(
		                "author" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the person who created the page."
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Text content of the page, complete with HTML markup."
		                ),
		                "handle" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A human-friendly unique string for the page automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the page."
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The suffix of the liquid template being used. By default, the original template is called page.liquid, without any suffix. Any additional templates will be: page.suffix.liquid."
		                ),
		                "title" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The title of the page."
		                ),
		                "published" => array(
			                "type" => "boolean",
		                    "location" => "json",
		                    "description" => ""
		                )
					)
				)
            )
        ),
        
        
        /**
         *    deletePage() method
         *
         *    reference: https://help.shopify.com/api/reference/page
         */
        "deletePage" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/pages/{id}.json",
            "summary" => "Delete a page.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the page.",
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