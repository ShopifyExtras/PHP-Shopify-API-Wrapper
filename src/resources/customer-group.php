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
         *    getCustomerGroups() method
         *
         *    reference: http://docs.shopify.com/api/customergroup
         */
        "getCustomerGroups" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches.json",
            "summary" => "Get a list of all customer groups",
            "responseModel" => "defaultJsonResponse",
        ),
        
        /**
         *    getCustomerGroupCount() method
         *
         *    reference: http://docs.shopify.com/customergroup
         */
        "getCustomerGroupCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/count.json",
            "summary" => "Get a count of all customer groups",
            "responseModel" => "defaultJsonResponse"
        ),
        
        /**
         *    getCustomerGroup() method
         *
         *    reference: http://docs.shopify.com/api/customergroup
         */
        "getCustomerGroup" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/{id}.json",
            "summary" => "Retrieve a single Customer Group",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Customer Group."
                )
            )
        ),
        
        /**
         *    getCustomerGroupCustomers() method
         *
         *    reference: http://docs.shopify.com/api/customergroup
         */
        "getCustomerGroupCustomers" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customer_saved_searches/{id}/customers.json",
            "summary" => "Get all customers who match the criteria for the specified customer group",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Customer Group."
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