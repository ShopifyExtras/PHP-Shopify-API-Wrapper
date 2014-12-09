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
         *    getProvinces() method
         *
         *    reference: http://docs.shopify.com/api/province
         */
        "getProvinces" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/countries/{country_id}/provinces.json",
            "summary" => "Get a all provinces.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "country_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the country the province belongs to.",
                    "required" => true
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "fields" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getProvinceCount() method
         *
         *    reference: http://docs.shopify.com/api/province
         */
        "getProvinceCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/countries/{country_id}/provinces/count.json",
            "summary" => "Get a count of all provinces.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "country_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the country the province belongs to.",
                    "required" => true
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                )
            )
        ),
        
        
        /**
         *    getProvince() method
         *
         *    reference: http://docs.shopify.com/api/province
         */
        "getProvince" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/countries/{country_id}/provinces/{id}.json",
            "summary" => "Get a count of all provinces.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the province.",
                    "required" => true
                ),
                "country_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the country the province belongs to.",
                    "required" => true
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                )
            )
        ),
        
        
        /**
         *    updateProvince() method
         *
         *    reference: http://docs.shopify.com/api/province
         */
        "updateProvince" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/countries/{country_id}/provinces/{id}.json",
            "summary" => "Update a province's tax rate.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the province.",
                    "required" => true
                ),
                "country_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The id of the country the province belongs to.",
                    "required" => true
                ),
                "province" => array(
                    "parameters" => array(
                         "tax" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "New tax rate."
                        )
                    )
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