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
         *    getScriptTags() method
         *
         *    reference: https://help.shopify.com/api/reference/scripttag
         */
        "getScriptTags" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/script_tags.json",
            "summary" => "Receive a list of all script tags.",
            "responseModel" => "defaultJsonResponse"
        ),

       /**
         *    createScriptTag() method
         *
         *    reference: https://docs.shopify.com/api/uiintegrations/scripttag
         */
        "createScriptTag" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/script_tags.json",
            "summary" => "Create a new script tag.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "script_tag" => array(
                    "location" => "json",
                    "parameters" => array(
                        "event" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Should be onload"
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        )
                    )
                )
            )
        ),

       
        /**
         *    updateScriptTag() method
         *
         *    reference: https://help.shopify.com/api/reference/scripttag
         */
        "updateScriptTag" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/script_tags/{id}.json",
            "summary" => "Update a script tag.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The scripts ID number.",
                    "required" => true
                ),
                "script_tag" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The scripts ID number."
                        ),
                        "src" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        )
                    )
                )
            )
        ),

        /**
         *    deleteScriptTag() method
         *
         *    reference: https://help.shopify.com/api/reference/scripttag
         */
        "deleteScriptTag" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/script_tags/{id}.json",
            "summary" => "Delete a script tag.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The script tag ID number.",
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
