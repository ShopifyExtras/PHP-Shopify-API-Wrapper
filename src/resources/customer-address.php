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
         *    getCustomerAddresses() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "getCustomerAddresses" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers/{id}/addresses.json",
            "summary" => "Retrieve all addresses for a customer",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "The ID of the Customer."
                ),
                "limit" => array(
	                "type" => "integer",
	                "location" => "uri",
	                "description" => "Amount of results (default: 50) (maximum: 250)"
                ),
                "page" => array(
	             	"type" => "integer",
	             	"location" => "uri",
	             	"description" => "Page to show (default: 1)"   
                )
            )
        ),
        
        /**
         *    getCustomerAddress() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "getCustomerAddress" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers/{id}/addresses/{addressId}.json",
            "summary" => "Get a count of all articles from a certain blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "The ID of the Customer."
                ),
                "addressId" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "The ID of the Address."
                )
            )
        ),


        /**
         *    createCustomerAddress() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "createCustomerAddress" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/customers.json",
            "summary" => "Creates a new address for a customer.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "address" => array(
                    "location" => "postField",
                    "parameters" => array(
                        "address1" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "address2" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "city" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "company" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "first_name" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "last_name" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "phone" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "province" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "country" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "zip" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "name" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "province_code" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "country_code" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "country_name" => array(
                            "type" => "string",
                            "location" => "postField",
                        )
                    )
                )
            )
        ),


        /**
         *    updateCustomerAddress() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "updateCustomerAddress" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/customers/{customer_id}/addresses/{id}.json",
            "summary" => "Update a a customers address.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "customer_id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "address" => array(
                    "location" => "postField",
                    "parameters" => array(
                         "customer_id" => array(
                            "type" => "number",
                            "location" => "postField",
                        ),
                        "id" => array(
                            "type" => "number",
                            "location" => "postField",
                        ),
                        "address1" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "address2" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "city" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "company" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "first_name" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "last_name" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "phone" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "province" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "country" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "zip" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "name" => array(
                            "type" => "boolean",
                            "location" => "postField",
                        ),
                        "province_code" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "country_code" => array(
                            "type" => "string",
                            "location" => "postField",
                        ),
                        "country_name" => array(
                            "type" => "string",
                            "location" => "postField",
                        )
                    )
                )
            )
        ),


        /**
         *    deleteCustomerAddress() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "deleteCustomerAddress" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/countries/{customer_id}/addresses/{id}.json",
            "summary" => "Delete a customers address.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "customer_id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                )
            )
        ),


        /**
         *    deleteCustomerAddresses() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "deleteCustomerAddresses" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/countries/{id}/addresses/set.json?operation=destroy",
            "summary" => "Ddestroying multiple customer addresses.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri"
                ),
                "address_ids[]" => array(
                    "type" => "string",
                    "location" => "uri"
                )
            )
        ),


        /**
         *    setCustomersDefaultAddress() method
         *
         *    reference: http://docs.shopify.com/api/customeraddress
         */
        "setCustomersDefaultAddress" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/customers/{customer_id}/addresses/{id}/default.json",
            "summary" => "Assigning a new default address to a customer.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "customer_id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
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