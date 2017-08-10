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
         *    getPolicies() method
         *
         *    reference: http://docs.shopify.com/api/reference/policy
         */
        "getPolicies" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/policies.json",
            "summary" => "Retrieve a list of all policies.",
            "responseModel" => "defaultJsonResponse"
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
