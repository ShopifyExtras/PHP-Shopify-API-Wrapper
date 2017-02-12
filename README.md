# Shopify API Wrapper
By [Zapiet.com](http://www.zapiet.com) - Zapiet - Creators of the Store Pickup + Delivery app.

### Installing via Composer
The recommended way to install the wrapper is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of the wrapper:

```bash
composer require shopifyextras/shopify-php-api-wrapper
```
After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

### Getting Started

First you will need to initialise the client like this:

```php
$client = new \Shopify\Client([
   "shopUrl" => $shopUrl,
   "X-Shopify-Access-Token" => $accessToken
]);
```

Then you can begin making requests like shown below. Please note that the list of requests below is not complete. All endpoints are available just take a look in the /src/resources folder for reference.

### Orders
```php
// Get a list of all orders.
$client->getOrders();

// Get a specific order.
$client->getOrder(['id' => $order_id]);

// Get Order ID and Total Price for a specific order. 
$client->getOrder(['id' => $order_id, 
                   'fields' => 'id,total_price']);
```

### Products
```php
// Get a list of all products.
$client->getProducts();

// Get a specific product.
$client->getProduct(["id" => $product_id]);
```

### Product Variants
```php
// Get a list of all variants for a specific product.
$client->getProductVariants(["id" => $product_id]);

// Get a specific product variant.
$client->getProductVariant(["id" => $variant_id]);

// Get metafields for a specific variant. 
$client->getProductVariantMetafields(["id" => $variant_id]);
```

### Bugs & Issues
If you spot any bugs, please report it using the issue tracker. If you would like to contribute to the project please feel free to make your amends and submit a pull request.

### Professional Services
Unfortunately we are unable to provide free technical support for the wrapper. If you require this kind of help then please contact us by emailing [support@zapiet.com](mailto:support@zapiet.com).

Test the API at [RapidAPI](https://rapidapi.com/package/Shopify/functions?utm_source=ShopifyGitHub&utm_medium=button).
