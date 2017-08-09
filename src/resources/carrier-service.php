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
         *    getCarrierServices() method
         *
         *    reference: https://help.shopify.com/api/reference/carrierservice
         */
        "getCarrierServices" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/carrier_services.json",
            "summary" => "Retrieve a list of all Carrier Services",
            "responseModel" => "defaultJsonResponse"
        ),
        
        
        /**
         *    getCarrierService() method
         *
         *    reference: https://help.shopify.com/api/reference/carrierservice
         */
        "getCarrierService" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/carrier_services/{id}.json",
            "summary" => "Retrieve a single Carrier Service",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Carrier Service.",
                    "required" => true
                )
            )
        ),
        
        
        /**
         *    createCarrierService() method
         *
         *    reference: https://help.shopify.com/api/reference/carrierservice
         */
        "createCarrierService" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/carrier_services.json",
            "summary" => "Create a Carrier Service.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "carrier_service" => array(
	                "location" => "json",
	                "parameters" => array(
		                "name" => array(
		                    "type" => "string",
		                    "location" => "uri",
		                    "description" => "The name of the shipping service as seen by merchants and their customers."
		                ),
		                "callback_url" => array(
		                    "type" => "string",
		                    "location" => "uri",
		                    "description" => "States the URL endpoint that shopify needs to retrieve shipping rates. This must be a public URL."
		                ),
		                "format" => array(
		                    "type" => "string",
		                    "location" => "uri",
		                    "description" => "Default: json."
		                ),
		                "service_discovery" => array(
		                    "type" => "boolean",
		                    "location" => "uri",
		                    "description" => "States if merchants are able to send dummy data to your service through the Shopify admin to see shipping rate examples. Valid values are true and false."
		                ),
		                "carrier_service_type" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Distinguishes between api or legacy carrier services."
		                ),
		                "active" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => ""
		                )
	                )
                )
            )
        ),
        
        
        /**
         *    updateCarrierService() method
         *
         *    reference: https://help.shopify.com/api/reference/carrierservice
         */
        "updateCarrierService" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/carrier_services/{id}.json",
            "summary" => "Update a Carrier Service.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
	  	            "type" => "number",
                    "location" => "uri",
                    "description" => "he ID number of the carrier service.",
                    "required" => true
	            ),
                "carrier_service" => array(
	                "location" => "json",
	                "parameters" => array(
		                "id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID number of the carrier service."
		                ),
		                "name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the shipping service as seen by merchants and their customers."
		                ),
		                "callback_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "States the URL endpoint that shopify needs to retrieve shipping rates. This must be a public URL."
		                ),
		                "format" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Default: json."
		                ),
		                "service_discovery" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "States if merchants are able to send dummy data to your service through the Shopify admin to see shipping rate examples. Valid values are true and false."
		                ),
		                "carrier_service_type" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Distinguishes between api or legacy carrier services."
		                ),
		                "active" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => ""
		                )
	                )
                )
            )
        ),
        
        
        /**
         *    deleteCarrierService() method
         *
         *    reference: https://help.shopify.com/api/reference/article
         */
        "deleteCarrierService" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/carrier_services/{id}.json",
            "summary" => "Delete an carrier service.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the carrier service.",
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