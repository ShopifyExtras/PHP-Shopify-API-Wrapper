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
         *    getCustomerSavedSearches() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "getCustomerSavedSearches" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches.json",
            "summary" => "Get a list of all customer saved searches",
            "responseModel" => "defaultJsonResponse",
        ),
        
        
        /**
         *    getCustomerSavedSearchesCount() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "getCustomerSavedSearchesCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/count.json",
            "summary" => "Get a count of all customer saved searches",
            "responseModel" => "defaultJsonResponse"
        ),
        

        /**
         *    getCustomerSavedSearch() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "getCustomerSavedSearch" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Get a single customer saved search",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Saved Search.",
                    "required" => true
                )
            )
        ),

        
        /**
         *    getCustomerSavedSearchCustomers() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "getCustomerSavedSearchCustomers" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/{id}/customers.json",
            "summary" => "Get all customers who match the criteria for the specified customer saved search",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Saved Search.",
                    "required" => true
                )
            )
        ),


        /**
         *    createCustomerSavedSearch() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "createCustomerSavedSearch" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/customer_saved_searches.json",
            "summary" => "Create a new customer saved search.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "customer_saved_search" => array(
                    "location" => "json",
                    "parameters" => array(
                        "name" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "query" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "body" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "accepts_marketing" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "country" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "last_order_date" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "orders_count" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "state" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "tag" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "total_spent" => array(
                            "type" => "string",
                            "location" => "json",
                        )
                    )
                )
            )
        ),


        /**
         *    updateCustomerSavedSearch() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "updateCustomerSavedSearch" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Update a customer saved search.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "required" => true
                ),
                "customer_saved_search" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                        ),
                        "name" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "query" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "body" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "accepts_marketing" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "country" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "last_order_date" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "orders_count" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "state" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "tag" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "total_spent" => array(
                            "type" => "string",
                            "location" => "json",
                        )
                    )
                )
            )
        ),


        /**
         *    deleteCustomerSavedSearch() method
         *
         *    reference: https://help.shopify.com/api/reference/customersavedsearch
         */
        "deleteCustomerSavedSearch" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Delete a customers saved search.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the CustomerSavedSearch.",
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