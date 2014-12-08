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
         *    getBlogs() method
         *
         *    reference: http://docs.shopify.com/api/blog
         */
        "getBlogs" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs.json",
            "summary" => "Retrieve a list of all Blogs",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "since_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Restrict results to after the specified ID."
                ),
                "handle" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Filter by Blog handle."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getBlogCount() method
         *
         *    reference: http://docs.shopify.com/api/blog
         */
        "getBlogCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs/count.json",
            "summary" => "Retrieve a count of all Blogs",
            "responseModel" => "defaultJsonResponse"
        ),
        
        
        /**
         *    getBlog() method
         *
         *    reference: http://docs.shopify.com/api/blog
         */
        "getBlog" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs/{id}.json",
            "summary" => "Retrieve a single Blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Blog."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    createBlog() method
         *
         *    reference: http://docs.shopify.com/api/blog
         */
        "createBlog" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/blogs.json",
            "summary" => "Create a new blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "blog" => array(
		            "location" => "json",
		            "parameters" => array(
		                "title" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The ID of the Blog."
		                ),
		                "commentable" => array(
			                "type" => "string",
		                    "location" => "json",
		                    "description" => "Indicates whether readers can post comments to the blog and if comments are moderated or not. Possible values are: no (default): Readers cannot post comments to blog articles. moderate: Readers can post comments to blog articles, but comments must be moderated before they appear.
yes: Readers can post comments to blog articles without moderation."   
		                ),
		                "feedburner_location" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "URL to the feedburner location for blogs that have enabled feedburner through their store admin."
		                ),
		                "handle" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A human-friendly unique string for a blog automatically generated from its title. This handle is used by the Liquid templating language to refer to the blog."
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "States the name of the template a blog is using if it is using an alternate template. If a blog is using the default blog.liquid template, the value returned is \"null\"."
		                )
	                )
                )
            )
        ),


		/**
         *    updateBlog() method
         *
         *    reference: http://docs.shopify.com/api/blog
         */
        "updateBlog" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/blogs/{id}.json",
            "summary" => "Update a blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
	            "id" => array(
                    "type" => "number",
                    "location" => "json",
                    "description" => "The ID of the Blog."
                ),
	            "blog" => array(
		            "location" => "json",
		            "parameters" => array(
			            "id" => array(
		                    "type" => "number",
		                    "location" => "json",
		                    "description" => "The ID of the Blog."
		                ),
		                "title" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "The ID of the Blog."
		                ),
		                "commentable" => array(
			                "type" => "string",
		                    "location" => "json",
		                    "description" => "Indicates whether readers can post comments to the blog and if comments are moderated or not. Possible values are: no (default): Readers cannot post comments to blog articles. moderate: Readers can post comments to blog articles, but comments must be moderated before they appear.
yes: Readers can post comments to blog articles without moderation."   
		                ),
		                "feedburner_location" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "URL to the feedburner location for blogs that have enabled feedburner through their store admin."
		                ),
		                "handle" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "A human-friendly unique string for a blog automatically generated from its title. This handle is used by the Liquid templating language to refer to the blog."
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "json",
		                    "description" => "States the name of the template a blog is using if it is using an alternate template. If a blog is using the default blog.liquid template, the value returned is \"null\"."
		                )
	                )
                )
            )
        ),
        
        
        /**
         *    deleteBlog() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "deleteBlog" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/blogs/{id}.json",
            "summary" => "Delete a blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the blog."
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