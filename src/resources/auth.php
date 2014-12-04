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
	    
        "postAuth" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/oauth/access_token",
            "summary" => "Retrieve Access Token",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "client_id" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The API Key for the app."
                ),
                "client_secret" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The Shared Secret for the app."
                ),
                "code" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The authorization code provided in the redirect."
                ),
            ),
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