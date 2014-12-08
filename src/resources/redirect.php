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
         *    getRedirects() method
         *
         *    reference: http://docs.shopify.com/api/redirect
         */
        "getRedirects" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/redirects.json",
            "summary" => "Get a list of all URL redirects for your shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID."
                ),
                "path" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show Redirects with given path."
                ),
                "target" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show Redirects with given target."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response"
                ),
            )
        ),
        
                
        /**
         *    getRedirectsCount() method
         *
         *    reference: http://docs.shopify.com/api/redirect
         */
        "getRedirectsCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/redirects/count.json",
            "summary" => "Get a count of all URL redirects for your shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "path" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count Redirects with given path."
                ),
                "target" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count Redirects with given target."
                )
            )
        ),
        
        
        /**
         *    getRedirect() method
         *
         *    reference: http://docs.shopify.com/api/redirect
         */
        "getRedirect" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/redirects/{id}.json",
            "summary" => "Get a single redirect.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Product."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    createRedirect() method
         *
         *    reference: http://docs.shopify.com/api/redirect
         */
        "createRedirect" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/redirects.json",
            "summary" => "Create a new redirect.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "redirect" => array(
		            "location" => "json",
		            "parameters" => array(
		                "path" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The url path."
		                ),
		                "target" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The target url."
		                )
                	)
                )
            )
        ),
        
              
        /**
         *    updateRedirect() method
         *
         *    reference: http://docs.shopify.com/api/redirect
         */
        "updateRedirect" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/redirects/{id}.json",
            "summary" => "Update a redirect's path and/or target URIs.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the redirect."
                ),
	            "redirect" => array(
		            "id" => array(
	                    "type" => "number",
	                    "location" => "json",
	                    "description" => "The ID of the redirect."
	                ),
	                "path" => array(
	                    "type" => "string",
	                    "location" => "json",
	                    "description" => "Show Redirects with given path."
	                ),
	                "target" => array(
	                    "type" => "string",
	                    "location" => "json",
	                    "description" => "Show Redirects with given target."
	                ),
		           
	            )               
            )
        ),
       
        
        /**
         *    deleteRedirect() method
         *
         *    reference: http://docs.shopify.com/api/redirect
         */
        "deleteRedirect" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/redirects/{id}.json",
            "summary" => "Delete a store redirect",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the redirect."
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