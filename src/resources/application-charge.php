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
         *    getApplicationCharges() method
         *
         *    reference: http://docs.shopify.com/api/applicationcharge
         */
        "getApplicationCharges" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/application_charges.json",
            "summary" => "All charges that have been requested are retrieved by this request.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getApplicationCharge() method
         *
         *    reference: http://docs.shopify.com/api/applicationcharge
         */
        "getApplicationCharge" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/application_charges/{id}.json",
            "summary" => "Retrive a single application charge.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the application charge.",
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
         *    createApplicationCharge() method
         *
         *    reference: http://docs.shopify.com/api/applicationcharge
         */
        "createApplicationCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/application_charges.json",
            "summary" => "Create a new one-time application charge.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "application_charge" => array(
		            "location" => "json",
					"parameters" => array(
						"name" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the one-time application charge."
		                ),
						"price" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The price of the the one-time application charge."
		                ),	
		                "return_url" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The URL the customer is sent to once they accept/decline a charge."
		                ),
		                "test" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "States whether or not the application charge is a test transaction. Valid values are \"true\" or \"null\"."
		                )
					)
                )
            )
        ),

        
        /**
         *    activeApplicationCharge() method
         *
         *    reference: http://docs.shopify.com/api/applicationcharge
         */
        "activeApplicationCharge" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/application_charges/{id}/activate.json",
            "summary" => "Activate a previously accepted one-time application charge.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the one-time application charge.",
                    "required" => true
                ),
                "api_client_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => ""
                ),
                "created_at" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The date and time when the one-time application charge was created. The API returns this value in ISO 8601 format."
                ),
                "price" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The price of the the one-time application charge."
                ),
                "return_url" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The URL the customer is sent to once they accept/decline a charge."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The status of the application charge. Valid values are: pending: The application charge is pernding. accepted: The application charge has been accepted. declined: The application charge has been declined."
                ),
                "test" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "States whether or not the application charge is a test transaction. Valid values are \"true\" or \"null\"."
                ),
                "updated_at" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The date and time when the charge was last updated. The API returns this value in ISO 8601 format."
                ),
                "charge_type" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                ),
                "decorated_return_url" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => ""
                )
            )
        ),
        
        /**
         *    getArticle() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "getArticle" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs/{blog_id}/articles/{article_id}.json",
            "summary" => "Get a single article by its ID and the ID of the parent blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Blog.",
                    "required" => true
                ),
                "article_id" => array(
	                "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Article.",
                    "required" => true
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response."
                )
            )
        ),
        
        /**
         *    createArticle() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "createArticle" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/blogs/{blog_id}/articles.json",
            "summary" => "Create a new article for a blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the blog containing the article.",
                    "required" => true
                ),
                "article" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "author" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the author of this article."
		                ),
		         	    "title" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The title of the article."
		                ),
		                "author" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The name of the author of this article."
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
		                ),
		                "summary_html" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The text of the summary of the article, complete with HTML markup."
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The text of the body of the article, complete with HTML markup."
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "States the name of the template an article is using if it is using an alternate template. If an article is using the default article.liquid template, the value returned is \"null\"."
		                ),
		                "published" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                    "description" => "States whether or not the article is visible. Valid values are \"true\" for published or \"false\" for hidden."
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The date and time when the article was published. The API returns this value in ISO 8601 format."
		                ),
		                "user_id" => array(
			                "type" => "number",
		                    "location" => "json",
		                    "description" => "A unique numeric identifier for the author of the article."
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