# Shopify API Wrapper 
By [ShopifyExtras.com](http://www.shopifyextras.com) - 24/7 Shopify Support - Bugs Resolved Same Day

### Installing via Composer
The recommended way to install the wrapper is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of the wrapper:

```bash
composer require shopifyextras/shopify-api-wrapper
```
After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

### Getting Started

First you will need to initialise the client like this:

```
$client = Shopify::settings(array(
   "shopUrl" => $shopUrl,
   "X-Shopify-Access-Token" => $accessToken
));
```

Then you can begin making requests:
```
// Get a list of all products. 
$client->getProducts();

// Get a list of all orders. 
$client->getOrders();

// Get a specific product.
$client->getProduct(array("id", $product_id));
```

### Bugs & Issues
If you spot any bugs, please report it using the issue tracker. If you would like to contribute to the project please feel free to make your amends and submit a pull request. 

### Professional Services
Unfortunately we are unable to provide free technical support for the wrapper. If you require this kind of help then please contact us by emailing [help@shopifyextras.com](mailto:help@shopifyextras.com). 