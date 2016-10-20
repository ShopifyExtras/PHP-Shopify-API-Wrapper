<?php
return array(

	/*
    |--------------------------------------------------------------------------
    | Service Name
    |--------------------------------------------------------------------------
    |
    | Name of the API service these description configs are for.
    |
    */

    "name" => "Shopify",

    /*
    |--------------------------------------------------------------------------
    | Service Description
    |--------------------------------------------------------------------------
    |
    | Description of the API service.
    |
    */

    "description" => "A Shopify API Wrapper built using Guzzle - ShopifyExtras.com",

    /*
    |--------------------------------------------------------------------------
    | Service Configurations
    |--------------------------------------------------------------------------
    |
    | Configuration files of specfic service descriptions to load.
    |
    */

    "services" => array(
        "auth",
        "application-charge",
        "article",
        "asset",
        "blog",
        "carrier-service",
        "checkout",
        "collect",
        "comment",
        "country",
        "custom-collection",
        "customer",
        "customer-address",
        "customer-group",
        "customer-saved-search",
        "discount",
        "event",
        "fulfillment",
        "fulfillment-service",
        "gift-card",
        "location",
        "metafield",
        "order",
        "order-risk",
        "page",
        "product",
        "product-image",
        "product-variant",
        "province",
        "recurring-application-charge",
        "redirect",
        "refund",
        "shop",
        "script-tag",
        "smart-collection",
        "theme",
        "transaction",
        "user",
        "webhook",
        "shipping-zone"
    ),

    /*
    |--------------------------------------------------------------------------
    | Default models
    |--------------------------------------------------------------------------
    |
    | Default response models for typical usage of responses
    |
    */

    "models" => array(
        "defaultJsonResponse" => array(
            "type" => "object",
            "additionalProperties" => array(
                "location" => "json",
            )
        )
    )
);
