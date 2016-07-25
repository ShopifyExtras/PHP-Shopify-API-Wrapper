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
         *    getAssets() method
         *
         *    reference: http://docs.shopify.com/api/asset
         */
        "getAssets" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/themes/{id}/assets.json",
            "summary" => "Listing theme assets only returns metadata about each asset. You need to request assets individually in order to get their contents.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
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
         *    getAsset() method
         *
         *    reference: http://docs.shopify.com/api/asset
         */
        "getAsset" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/themes/{id}/assets.json",
            "summary" => "Get an asset.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the theme.",
                    "required" => true
                ),
                "asset[key]" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                )
            )
        ),
        
        
        /**
         *    updateAsset() method
         *
         *    reference: http://docs.shopify.com/api/asset
         */
        "updateAsset" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/themes/{id}/assets.json",
            "summary" => "PUT takes care of both creating new assets and updating existing ones.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the asset.",
                    "required" => true
                ),
                "asset" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "key" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The path to the asset within a shop. For example, the asset bg-body-green.gif is located in the assets folder."
		                ),
		         	    "value" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The asset that you are adding."
		                ),
		                "src" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Specifies the location of an asset."
		                ),
		                "attachment" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An asset attached to a store's theme."
		                ),
		                "source_key" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The source key copies an asset."
		                )
					)
	            )
            )
        ),
        
        
        /**
         *    deleteAsset() method
         *
         *    reference: http://docs.shopify.com/api/asset
         */
        "deleteAsset" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/themes/{id}/assets.json",
            "summary" => "Delete assets from your shop.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the theme.",
                    "required" => true
                ),
                "asset[key]" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
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
