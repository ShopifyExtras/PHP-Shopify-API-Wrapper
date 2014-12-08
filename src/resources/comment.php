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
         *    reference: http://docs.shopify.com/api/comments
         */
        "getComments" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/comments.json",
            "summary" => "Get a list of all comments.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "limit" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Amount of results (default: 50)(maximum: 250)."
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Page to show (default: 1)."
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show comments created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show comments created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show comments last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show comments last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show comments published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show comments published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "published - Show only published comments. unpublished - Show only unpublished comments. any - Show all comments (default)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "uri",
                )
            )
        ),
        
        
        /**
         *    getCommentCount() method
         *
         *    reference: http://docs.shopify.com/api/comment
         */
        "getCommentCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/comments/count.json",
            "summary" => "Get a count of all comments.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count comments created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count comments created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count comments last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count comments last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count comments published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count comments published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "published - Count only published comments. unpublished - Count only unpublished comments. any - Count all comments (default)."
                ),
                "status" => array(
                    "type" => "string",
                    "location" => "uri",
                )
            )
        ),
        
        
        /**
         *    getComment() method
         *
         *    reference: http://docs.shopify.com/api/comment
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
                    "description" => "The ID of the comemnt."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    createComment() method
         *
         *    reference: http://docs.shopify.com/api/comment
         */
        "createComment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comemnts.json",
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
         *    reference: http://docs.shopify.com/api/comment
         */
        "updateComment" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/comemnts/{id}.json",
            "summary" => "Update a comement for an article.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "json",
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
         *    reference: http://docs.shopify.com/api/comment
         */
        "markCommentAsSpam" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comemnts/{id}/spam.json",
            "summary" => "Mark a comment as spam, helping to train our spam detection as well as remove the comment sometime soon.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "json",
                )
            )
        ),

     
		/**
         *    markCommentAsNotSpam() method
         *
         *    reference: http://docs.shopify.com/api/comment
         */
        "markCommentAsNotSpam" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comemnts/{id}/not_spam.json",
            "summary" => "Mark a comment as not spam, restoring a comment marked as spam back to published.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "json",
                )
            )
        ),
        

        /**
         *    markCommentAsApproved() method
         *
         *    reference: http://docs.shopify.com/api/comment
         */
        "markCommentAsApproved" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comemnts/{id}/approve.json",
            "summary" => "Approve a comment that is currently pending unapproved so that it will be published on the site.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
            	"id" => array(
                    "type" => "string",
                    "location" => "json",
                )
            )
        ),


        /**
         *    removeComment() method
         *
         *    reference: http://docs.shopify.com/api/comment
         */
        "removeComment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comemnts/{id}/remove.json",
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
         *    reference: http://docs.shopify.com/api/comment
         */
        "restoreComment" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/comemnts/{id}/restore.json",
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