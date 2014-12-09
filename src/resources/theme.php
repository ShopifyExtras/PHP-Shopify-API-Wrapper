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
         *    getThemes() method
         *
         *    reference: http://docs.shopify.com/api/theme
         */
        "getThemes" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/themes.json",
            "summary" => "Receive a list of all themes.",
            "responseModel" => "defaultJsonResponse"
        ),

        
        /**
         *    getTheme() method
         *
         *    reference: http://docs.shopify.com/api/theme
         */
        "getTheme" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/themes/{id}.json",
            "summary" => "Get a single theme.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the theme.",
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
         *    createTheme() method
         *
         *    reference: http://docs.shopify.com/api/theme
         */
        "createTheme" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/themes.json",
            "summary" => "Create a theme by providing the public URL of a .zip containing the theme. The theme always starts out with a role of unpublished. If a different role is provided in the POST request, the theme will be given that role only after all its files have been extracted and stored by Shopify (which might take a couple of minutes).",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "theme" => array(
                    "location" => "json",
                    "parameters" => array(
                        "name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The name of the theme."
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "role" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Specifies how the theme is being used within the shop."
                        )
                    )
                )
            )
        ),


        /**
         *    updateTheme() method
         *
         *    reference: http://docs.shopify.com/api/theme
         */
        "updateTheme" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/themes/{id}.json",
            "summary" => "Update an existing theme.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The themes ID number.",
                    "required" => true
                ),
                "product" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The themes ID number."
                        ),
                        "name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The description of the product, complete with HTML formatting."
                        ),
                        "role" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A human-friendly unique string for the page automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the page."
                        )
                    )
                )
            )
        ),


        /**
         *    deleteTheme() method
         *
         *    reference: http://docs.shopify.com/api/theme
         */
        "deleteTheme" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/themes/{id}.json",
            "summary" => "Remove a theme.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the theme.",
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