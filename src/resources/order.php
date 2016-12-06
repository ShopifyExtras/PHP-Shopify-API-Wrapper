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
		 *    getOrderMetaFields() method
		 *
		 *    reference: there is no docs???
		 */
		"getOrderMetaFields" => array(
			"httpMethod" => "GET",
			"uri" => "/admin/orders/{id}/metafields.json",
			"summary" => "Retrieve a specific order.",
			"responseModel" => "defaultJsonResponse",
			"parameters" => array(
				"id" => array(
					"type" => "string",
					"location" => "uri",
					"description" => "The ID of the order."
				)
			)
		),

        /**
         *    getOrders() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "getOrders" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders.json",
            "summary" => "Retrieve a list of Orders (OPEN Orders by default, use status=any for ALL orders).",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "ids" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Shopify order ids to specifically fetch",
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50) (maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "created_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show orders created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show orders created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show orders last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show orders last updated before date (format: 2008-12-31 03:00)."
                ),
                "processed_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show orders imported after date (format: 2008-12-31 03:00)."
                ),
                "processed_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Show orders imported before date (format: 2008-12-31 03:00)."
                ),
                "status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => ""
                ),
                "financial_status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => ""
                ),
                "fulfillment_status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => ""
                ),
                "fields" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Comma-separated list of fields to include in the response."
                ),
                "_apiFeatures" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Optional API features that should be enabled as part of the request."
                )
            )
        ),

        
        /**
         *    getOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "getOrder" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/{id}.json",
            "summary" => "Retrieve a specific order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the order."
                ),
                "fields" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        

        /**
         *    getOrderCount() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "getOrderCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/orders/count.json",
            "summary" => "Retrieve a count of all the orders.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "created_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Count orders created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Count orders created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Count orders last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => "Count orders last updated before date (format: 2008-12-31 03:00)."
                ),
                "status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => ""
                ),
                "financial_status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => ""
                ),
                "fulfillment_status" => array(
	                "type" => "string",
	                "location" => "query",
	                "description" => ""
                )
            )
        ),
        

        /**
         *    closeOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "closeOrder" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{id}/close.json",
            "summary" => "Close an order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order."
                )
            )
        ),


        /**
         *    openOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "openOrder" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{id}/open.json",
            "summary" => "Re-open a closed order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order."
                )
            )
        ),


        /**
         *    cancelOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "cancelOrder" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders/{id}/cancel.json",
            "summary" => "Cancel an order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order."
                ),
                "order" => array(
                    "location" => "json",
                    "parameters" => array(
		                "amount" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "Amount to refund (decimal ex: 21.20). If set, Shopify will attempt to void/refund the payment depending on the status."
		                ),
		                "restock" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "Restock the items for this order back to your store."
		                ),
		                "reason" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The reason for the order cancellation (one of customer, inventory, fraud, other)."
		                ),
		                "email" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "Send an email to the customer notifying them of the cancellation."
		                )
	                )
				)
            )
        ),


		/**
         *    createOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "createOrder" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/orders.json",
            "summary" => "Create a new order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"order" => array(
            		"location" => "json",
                    "parameters" => array(
		            	"email" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The customer's email address. Is required when a billing address is present."
		                ),
		                "send_receipt" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "The ID of the order."
		                ),
		                "send_fulfillment_receipt" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "line_items" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A list of line item objects, each one containing information about an item in the order."
		                ),
		                "tax_lines" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An array of tax_line objects, each of which details the total taxes applicable to the order."
		                ),
		                "transactions" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "total_tax" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the taxes applied to the order (must be positive)."
		                ),
		                "currency" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The three letter code (ISO 4217) for the currency used for the payment."
		                ),
		                "customer" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "financial_status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "billing_address" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The mailing address associated with the payment method."
		                ),
		                "shipping_address" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The mailing address to where the order will be shipped."
		                ),
		                "browser_ip" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The IP address of the browser used by the customer when placing the order."
		                ),
		                "buyer_accepts_marketing" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "Indicates whether or not the person who placed the order would like to receive email updates from the shop. This is set when checking the 'I want to receive occasional emails about new products, promotions and other news' checkbox during checkout. Valid values are true and false."
		                ),
		                "cancel_reason" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The reason why the order was cancelled."
		                ),
		                "cancelled_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the order was cancelled. If the order was cancelled, the API returns this value in ISO 8601 format. If the order was not cancelled, this value is 'null.'"
		                ),
		                "cart_token" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Unique identifier for a particular cart that is attached to a particular order."
		                ),
		                "client_details" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An object containing information about the client."
		                ),
		                "closed_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the order was closed. If the order was closed, the API returns this value in ISO 8601 format. If the order was not closed, this value is null."
		                ),
		                "discount_codes" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Applicable discount codes that can be applied to the order. If no codes exist the value will default to blank."
		                ),
		                "fulfillments" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "fulfillment_status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. For example, if an order has three tags: tag1, tag2, tag3. Each individual tag is limited to 40 characters in length."
		                ),
		                "landing_site" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URL for the page where the buyer landed when entering the shop."
		                ),
		                "name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The customer's order name as represented by a number."
		                ),
		                "note" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The text of an optional note that a shop owner can attach to the order."
		                ),
		                "note_attributes" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Extra information that is added to the order. Each array entry must contain a hash with 'name' and 'value' keys as shown above."
		                ),
		                "order_number" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A unique numeric identifier for the order. This one is used by the shop owner and customer. This is different from the id property, which is also a unique numeric identifier for the order, but used for API purposes."
		                ),
		                "processed_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the order was imported, in ISO 8601 format. This value can be set to dates in the past when importing from other systems. If no value is provided, it will be auto-generated."
		                ),
		                "processing_method" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "States the type of payment processing method. Valid values are: checkout, direct, manual, offsite or express."
		                ),
		                "referring_site" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The website that the customer clicked on to come to the shop."
		                ),
		                "refund" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The list of refunds applied to the order."
		                ),
		                "shipping_lines" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An array of shipping_line objects, each of which details the shipping methods used."
		                ),
		                "source_name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Where the order originated."
		                ),
		                "subtotal_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Price of the order before shipping and taxes."
		                ),
		                "taxes_included" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "States whether or not taxes are included in the order subtotal. Valid values are 'true' or 'false'."
		                ),
		                "token" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Unique identifier for a particular order."
		                ),
		                "total_discounts" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The total amount of the discounts to be applied to the price of the order."
		                ),
		                "total_line_items_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the prices of all the items in the order."
		                ),
		                "total_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the prices of all the items in the order, taxes and discounts included (must be positive)."
		                ),
		                "total_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the prices of all the items in the order, taxes and discounts included (must be positive)."
		                ),
		                "total_weight" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the weights of the line items in the order, in grams."
		                )
	                )
				)
            )
        ),


		/**
         *    updateOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "updateOrder" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/orders/{id}.json",
            "summary" => "Create a new order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the order."
                ),
            	"order" => array(
            		"location" => "json",
                    "parameters" => array(
                    	"id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID of the order."
		                ),
		            	"email" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The customer's email address. Is required when a billing address is present."
		                ),
		                "send_receipt" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "The ID of the order."
		                ),
		                "send_fulfillment_receipt" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "line_items" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A list of line item objects, each one containing information about an item in the order."
		                ),
		                "tax_lines" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An array of tax_line objects, each of which details the total taxes applicable to the order."
		                ),
		                "transactions" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "total_tax" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the taxes applied to the order (must be positive)."
		                ),
		                "currency" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The three letter code (ISO 4217) for the currency used for the payment."
		                ),
		                "customer" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "financial_status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "billing_address" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The mailing address associated with the payment method."
		                ),
		                "shipping_address" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The mailing address to where the order will be shipped."
		                ),
		                "browser_ip" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The IP address of the browser used by the customer when placing the order."
		                ),
		                "buyer_accepts_marketing" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "Indicates whether or not the person who placed the order would like to receive email updates from the shop. This is set when checking the 'I want to receive occasional emails about new products, promotions and other news' checkbox during checkout. Valid values are true and false."
		                ),
		                "cancel_reason" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The reason why the order was cancelled."
		                ),
		                "cancelled_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the order was cancelled. If the order was cancelled, the API returns this value in ISO 8601 format. If the order was not cancelled, this value is 'null.'"
		                ),
		                "cart_token" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Unique identifier for a particular cart that is attached to a particular order."
		                ),
		                "client_details" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An object containing information about the client."
		                ),
		                "closed_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the order was closed. If the order was closed, the API returns this value in ISO 8601 format. If the order was not closed, this value is null."
		                ),
		                "discount_codes" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Applicable discount codes that can be applied to the order. If no codes exist the value will default to blank."
		                ),
		                "fulfillments" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "fulfillment_status" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => ""
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. For example, if an order has three tags: tag1, tag2, tag3. Each individual tag is limited to 40 characters in length."
		                ),
		                "landing_site" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URL for the page where the buyer landed when entering the shop."
		                ),
		                "name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The customer's order name as represented by a number."
		                ),
		                "note" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The text of an optional note that a shop owner can attach to the order."
		                ),
		                "note_attributes" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Extra information that is added to the order. Each array entry must contain a hash with 'name' and 'value' keys as shown above."
		                ),
		                "order_number" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A unique numeric identifier for the order. This one is used by the shop owner and customer. This is different from the id property, which is also a unique numeric identifier for the order, but used for API purposes."
		                ),
		                "processed_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the order was imported, in ISO 8601 format. This value can be set to dates in the past when importing from other systems. If no value is provided, it will be auto-generated."
		                ),
		                "processing_method" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "States the type of payment processing method. Valid values are: checkout, direct, manual, offsite or express."
		                ),
		                "referring_site" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The website that the customer clicked on to come to the shop."
		                ),
		                "refund" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The list of refunds applied to the order."
		                ),
		                "shipping_lines" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "An array of shipping_line objects, each of which details the shipping methods used."
		                ),
		                "source_name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Where the order originated."
		                ),
		                "subtotal_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Price of the order before shipping and taxes."
		                ),
		                "taxes_included" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "States whether or not taxes are included in the order subtotal. Valid values are 'true' or 'false'."
		                ),
		                "token" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Unique identifier for a particular order."
		                ),
		                "total_discounts" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The total amount of the discounts to be applied to the price of the order."
		                ),
		                "total_line_items_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the prices of all the items in the order."
		                ),
		                "total_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the prices of all the items in the order, taxes and discounts included (must be positive)."
		                ),
		                "total_price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the prices of all the items in the order, taxes and discounts included (must be positive)."
		                ),
		                "total_weight" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The sum of all the weights of the line items in the order, in grams."
		                )
	                )
				)
            )
        ),


        /**
         *    deleteOrder() method
         *
         *    reference: http://docs.shopify.com/api/order
         */
        "deleteOrder" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/orders/{id}.json",
            "summary" => "Delete an order.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the order."
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
