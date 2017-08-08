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
         *    getComments() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "getComments" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/comments.json",
            "summary" => "Get a list of all comments.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default: 50)(maximum: 250)."
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
                    "description" => "Show comments created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show comments created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show comments last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show comments last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show comments published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show comments published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "published - Show only published comments. unpublished - Show only unpublished comments. any - Show all comments (default)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Comma-separated list of fields to include in the response."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                )
            )
        ),
        
        
        /**
         *    getCommentCount() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "getCommentCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/comments/count.json",
            "summary" => "Get a count of all comments.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count comments created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count comments created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count comments last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count comments last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count comments published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Count comments published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "published - Count only published comments. unpublished - Count only unpublished comments. any - Count all comments (default)."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "query",
                )
            )
        ),
        
        
        /**
         *    getComment() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "getComment" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/comments/{id}.json",
            "summary" => "Get a single comemnts by its ID.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the comment.",
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
         *    createComment() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "createComment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comments.json",
            "summary" => "Create a new comement for an article.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "comment" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "body" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		         	    "author" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "email" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "ip" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "blog_id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "article_id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "published" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "user_id" => array(
			                "type" => "number",
		                    "location" => "json",
		                ),
		                "status" => array(
			                "type" => "string",
		                    "location" => "json",
		                ),
		                "user_agent" => array(
			                "type" => "string",
		                    "location" => "json",
		                )
					)
	            )
            )
        ),
        
        
        /**
         *    updateComment() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "updateComment" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/comments/{id}.json",
            "summary" => "Update a comement for an article.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                ),
                "comment" => array(
		            "location" => "json",
		            "parameters" => array(
		         	    "id" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		         	    "body" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		         	    "author" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "email" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "ip" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "blog_id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "article_id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "published" => array(
		                    "type" => "boolean",
		                    "location" => "json",
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "json",
		                ),
		                "user_id" => array(
			                "type" => "number",
		                    "location" => "json",
		                ),
		                "status" => array(
			                "type" => "string",
		                    "location" => "json",
		                ),
		                "user_agent" => array(
			                "type" => "string",
		                    "location" => "json",
		                )
					)
	            )
            )
        ),


		/**
         *    markCommentAsSpam() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "markCommentAsSpam" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comments/{id}/spam.json",
            "summary" => "Mark a comment as spam, helping to train our spam detection as well as remove the comment sometime soon.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),

     
		/**
         *    markCommentAsNotSpam() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "markCommentAsNotSpam" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comments/{id}/not_spam.json",
            "summary" => "Mark a comment as not spam, restoring a comment marked as spam back to published.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),
        

        /**
         *    markCommentAsApproved() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "markCommentAsApproved" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comments/{id}/approve.json",
            "summary" => "Approve a comment that is currently pending unapproved so that it will be published on the site.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "required" => true
                )
            )
        ),


        /**
         *    removeComment() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "removeComment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comments/{id}/remove.json",
            "summary" => "Remove a comment.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "json",
                )
            )
        ),


        /**
         *    restoreComment() method
         *
         *    reference: https://help.shopify.com/api/reference/comment
         */
        "restoreComment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comments/{id}/restore.json",
            "summary" => "Restore a comment.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "json",
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