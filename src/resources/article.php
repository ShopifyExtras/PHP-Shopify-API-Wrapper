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
         *    getArticles() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "getArticles" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs/{blog_id}/articles.json",
            "summary" => "Get a list of all articles from a certain blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Blog."
                ),
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
                    "description" => "Show articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Show articles published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "published - Show only published articles. unpublished - Show only unpublished articles. any - Show all articles (default)."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "comma-separated list of fields to include in the response."
                )
            )
        ),
        
        
        /**
         *    getArticlesCount() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "getArticlesCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs/{blog_id}/articles/count.json",
            "summary" => "Get a count of all articles from a certain blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Blog."
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count articles created after date (format: 2008-12-31 03:00)."
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count articles created before date (format: 2008-12-31 03:00)."
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count articles last updated after date (format: 2008-12-31 03:00)."
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count articles last updated before date (format: 2008-12-31 03:00)."
                ),
                "published_at_min" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count articles published after date (format: 2008-12-31 03:00)."
                ),
                "published_at_max" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Count articles published before date (format: 2008-12-31 03:00)."
                ),
                "published_status" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "published - Count only published articles. unpublished - Count only unpublished articles. any - Count all articles (default)."
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
            "uri" => "/admin/blogs/{blog_id}/articles/{articleId}.json",
            "summary" => "Get a single article by its ID and the ID of the parent blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Blog."
                ),
                "articleId" => array(
	                "type" => "number",
                    "location" => "uri",
                    "description" => "The ID of the Article."
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "uri",
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
                    "description" => "A unique numeric identifier for the blog containing the article."
                ),
                "article" => array(
		            "location" => "postField",
		            "parameters" => array(
		         	    "author" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The name of the author of this article."
		                ),
		         	    "title" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The title of the article."
		                ),
		                "author" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The name of the author of this article."
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
		                ),
		                "summary_html" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The text of the summary of the article, complete with HTML markup."
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The text of the body of the article, complete with HTML markup."
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "States the name of the template an article is using if it is using an alternate template. If an article is using the default article.liquid template, the value returned is \"null\"."
		                ),
		                "published" => array(
		                    "type" => "boolean",
		                    "location" => "postField",
		                    "description" => "States whether or not the article is visible. Valid values are \"true\" for published or \"false\" for hidden."
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The date and time when the article was published. The API returns this value in ISO 8601 format."
		                ),
		                "user_id" => array(
			                "type" => "number",
		                    "location" => "postField",
		                    "description" => "A unique numeric identifier for the author of the article."
		                )
					)
	            )
            )
        ),
        
        
        /**
         *    updateArticle() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "updateArticle" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/blogs/{blog_id}/articles/{article_id}.json",
            "summary" => "Create a new article for a blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the blog containing the article."
                ),
                "article_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "A unique numeric identifier for the article you are updating."
                ),
                "article" => array(
		            "location" => "postField",
		            "parameters" => array(
		         	    "id" => array(
		                    "type" => "number",
		                    "location" => "postField",
		                    "description" => "A unique numeric identifier for the article you are updating."
		                ),
		         	    "author" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The name of the author of this article."
		                ),
		         	    "title" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The title of the article."
		                ),
		                "author" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The name of the author of this article."
		                ),
		                "tags" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
		                ),
		                "summary_html" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The text of the summary of the article, complete with HTML markup."
		                ),
		                "body_html" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The text of the body of the article, complete with HTML markup."
		                ),
		                "template_suffix" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "States the name of the template an article is using if it is using an alternate template. If an article is using the default article.liquid template, the value returned is \"null\"."
		                ),
		                "published" => array(
		                    "type" => "boolean",
		                    "location" => "postField",
		                    "description" => "States whether or not the article is visible. Valid values are \"true\" for published or \"false\" for hidden."
		                ),
		                "published_at" => array(
		                    "type" => "string",
		                    "location" => "postField",
		                    "description" => "The date and time when the article was published. The API returns this value in ISO 8601 format."
		                ),
		                "user_id" => array(
			                "type" => "number",
		                    "location" => "postField",
		                    "description" => "A unique numeric identifier for the author of the article."
		                )
					)
	            )
            )
        ),
     
		/**
         *    getAuthors() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "getAuthors" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/articles/authors.json",
            "summary" => "Get a list of all the authors of articles.",
            "responseModel" => "defaultJsonResponse",
        ),  
        
        
        /**
         *    getTags() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "getTags" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/articles/tags.json",
            "summary" => "Get a list of all the tags of articles.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "popular" => array(
                    "type" => "boolean",
                    "location" => "uri",
                    "description" => "A flag to indicate only to a certain number of the most popular tags."
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The number of tags to return."
                )
            )
        ),   
        
        
        /**
         *    getBlogTags() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "getBlogTags" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/blogs/{blog_id}/articles/tags.json",
            "summary" => "Get a list of all tags from a specific blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the blog."
                ),
                "popular" => array(
                    "type" => "boolean",
                    "location" => "uri",
                    "description" => "A flag to indicate only to a certain number of the most popular tags."
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The number of tags to return."
                )
            )
        ),   
        
        
        /**
         *    deleteArticle() method
         *
         *    reference: http://docs.shopify.com/api/article
         */
        "deleteArticle" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/blogs/{blog_id}/articles/{article_id}.json",
            "summary" => "Delete an article of a blog.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "blog_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the blog."
                ),
                "article_id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the article."
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