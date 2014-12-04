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
         *    getCountries() method
         *
         *    reference: http://docs.shopify.com/api/country
         */
        "getCountries" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/countries.json",
            "summary" => "Get a list of all countries.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
         /**
         *    getCountryCount() method
         *
         *    reference: http://docs.shopify.com/api/country
         */
        "getCountryCount" => array(
	      	"httpMethod" => "GET",
            "uri" => "/admin/countries/count.json",
            "summary" => "Get a count of all countries.",
            "responseModel" => "defaultJsonResponse" 
        ),
        
        
         /**
         *    getCountry() method
         *
         *    reference: http://docs.shopify.com/api/country
         */
        "getCountry" => array(
	      	"httpMethod" => "GET",
            "uri" => "/admin/countries/{id}.json",
            "summary" => "Show country.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Country."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    createCountry() method
         *
         *    reference: http://docs.shopify.com/api/country
         */
        "createCountry" => array(
	      	"httpMethod" => "POST",
            "uri" => "/admin/countries.json",
            "summary" => "Create a country.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "country" => array(
                    "location" => "postField",
                    "parameters" => array(
						"name" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The full name of the country, in English."
		                ),
						"code" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The ISO 3166-1 alpha-2 two-letter country code for the country. The code for a given country will be the same as the code for the same country in another shop."
		                ),
		                "tax" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The national sales tax rate to be applied to orders made by customers from that country."
		                )   
                    )
                )
            )
        ),
        
        
        /**
         *    updateCountry() method
         *
         *    reference: http://docs.shopify.com/api/country
         */
        "updateCountry" => array(
	      	"httpMethod" => "PUT",
            "uri" => "/admin/countries/{id}.json",
            "summary" => "Create a country.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The unique numeric identifier for the country. It is important to note that the id for a given country in one shop will not be the same as the id for the same country in another shop."
                ),
                "country" => array(
                    "location" => "postField",
                    "parameters" => array(
	                    "id" => array(
		                    "type" => "number",
		                    "location" => "postField",
		                    "description" => "The unique numeric identifier for the country. It is important to note that the id for a given country in one shop will not be the same as the id for the same country in another shop."
		                ),
						"name" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The full name of the country, in English."
		                ),
						"code" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The ISO 3166-1 alpha-2 two-letter country code for the country. The code for a given country will be the same as the code for the same country in another shop."
		                ),
		                "tax" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The national sales tax rate to be applied to orders made by customers from that country."
		                )   
                    )
                )
            )
        ),
        
        
        /**
         *    deleteCountry() method
         *
         *    reference: http://docs.shopify.com/api/country
         */
        "deleteCountry" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/countries/{id}.json",
            "summary" => "Delete a country.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the country."
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