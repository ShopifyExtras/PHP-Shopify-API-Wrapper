<?php namespace Shopify;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use GuzzleHttp\Client as BaseClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

/**
 * @method array getApplicationCharges(array $params)
 * @method array getApplicationCharge(array $params)
 * @method array createApplicationCharge(array $params)
 * @method array activeApplicationCharge(array $params)
 * @method array getArticle(array $params)
 * @method array createArticle(array $params)
 * @method array getApplicationCredits(array $params)
 * @method array getApplicationCredit(array $params)
 * @method array createApplicationCredit(array $params)
 * @method array getArticles(array $params)
 * @method array getArticlesCount(array $params)
 * @method array updateArticle(array $params)
 * @method array getAuthors(array $params)
 * @method array getTags(array $params)
 * @method array getBlogTags(array $params)
 * @method array deleteArticle(array $params)
 * @method array getAssets(array $params)
 * @method array getAsset(array $params)
 * @method array updateAsset(array $params)
 * @method array deleteAsset(array $params)
 * @method array postAuth(array $params)
 * @method array getBlogs(array $params)
 * @method array getBlogCount(array $params)
 * @method array getBlog(array $params)
 * @method array createBlog(array $params)
 * @method array updateBlog(array $params)
 * @method array deleteBlog(array $params)
 * @method array getCarrierServices(array $params)
 * @method array getCarrierService(array $params)
 * @method array createCarrierService(array $params)
 * @method array updateCarrierService(array $params)
 * @method array deleteCarrierService(array $params)
 * @method array getCheckouts(array $params)
 * @method array getCheckoutCount(array $params)
 * @method array getCollects(array $params)
 * @method array getCollectCount(array $params)
 * @method array getCollect(array $params)
 * @method array getComments(array $params)
 * @method array getCommentCount(array $params)
 * @method array getComment(array $params)
 * @method array createComment(array $params)
 * @method array updateComment(array $params)
 * @method array markCommentAsSpam(array $params)
 * @method array markCommentAsNotSpam(array $params)
 * @method array markCommentAsApproved(array $params)
 * @method array removeComment(array $params)
 * @method array restoreComment(array $params)
 * @method array getCountries(array $params)
 * @method array getCountryCount(array $params)
 * @method array getCountry(array $params)
 * @method array createCountry(array $params)
 * @method array updateCountry(array $params)
 * @method array deleteCountry(array $params)
 * @method array getCustomCollections(array $params)
 * @method array getCustomCollectionCount(array $params)
 * @method array getCustomCollection(array $params)
 * @method array createCustomCollection(array $params)
 * @method array updateCustomCollection(array $params)
 * @method array deleteCustomCollection(array $params)
 * @method array getCustomerAddresses(array $params)
 * @method array getCustomerAddress(array $params)
 * @method array createCustomerAddress(array $params)
 * @method array updateCustomerAddress(array $params)
 * @method array deleteCustomerAddress(array $params)
 * @method array deleteCustomerAddresses(array $params)
 * @method array setCustomersDefaultAddress(array $params)
 * @method array getCustomerGroups(array $params)
 * @method array getCustomerGroupCount(array $params)
 * @method array getCustomerGroup(array $params)
 * @method array getCustomerGroupCustomers(array $params)
 * @method array getCustomerSavedSearches(array $params)
 * @method array getCustomerSavedSearchesCount(array $params)
 * @method array getCustomerSavedSearch(array $params)
 * @method array getCustomerSavedSearchCustomers(array $params)
 * @method array createCustomerSavedSearch(array $params)
 * @method array updateCustomerSavedSearch(array $params)
 * @method array deleteCustomerSavedSearch(array $params)
 * @method array getCustomers(array $params)
 * @method array getCustomerSearch(array $params)
 * @method array getCustomer(array $params)
 * @method array createCustomer(array $params)
 * @method array updateCustomer(array $params)
 * @method array deleteCustomer(array $params)
 * @method array getDraftOrders(array $params)
 * @method array getDraftOrder(array $params)
 * @method array updateDraftOrder(array $params)
 * @method array getDraftOrderCount(array $params)
 * @method array sendDraftOrderInvoice(array $params)
 * @method array deleteDraftOrder(array $params)
 * @method array completeDraftOrder(array $params)
 * @method array getEvents(array $params)
 * @method array getEventCount(array $params)
 * @method array getEvent(array $params)
 * @method array createFulfillmentEvent(array $params)
 * @method array getFulfillmentServices(array $params)
 * @method array getFulfillmentService(array $params)
 * @method array createFulfillmentService(array $params)
 * @method array updateFulfillmentService(array $params)
 * @method array deleteFulfillmentService(array $params)
 * @method array getFulfillments(array $params)
 * @method array getFulfillmentCount(array $params)
 * @method array getFulfillment(array $params)
 * @method array createFulfillment(array $params)
 * @method array updateFulfillment(array $params)
 * @method array completeFulfillment(array $params)
 * @method array cancelFulfillment(array $params)
 * @method array getLocations(array $params)
 * @method array getLocation(array $params)
 * @method array getMetafields(array $params)
 * @method array getProductMetafields(array $params)
 * @method array getMetafieldsCount(array $params)
 * @method array getProductMetafieldsCount(array $params)
 * @method array getMetafield(array $params)
 * @method array getProductMetafield(array $params)
 * @method array createMetafield(array $params)
 * @method array createProductMetafield(array $params)
 * @method array updateMetafield(array $params)
 * @method array updateProductMetafield(array $params)
 * @method array deleteMetafield(array $params)
 * @method array deleteProductMetafield(array $params)
 * @method array getOrderRisks(array $params)
 * @method array getOrderRisk(array $params)
 * @method array updateOrderRisk(array $params)
 * @method array deleteOrderRisk(array $params)
 * @method array getOrders(array $params)
 * @method array getOrder(array $params)
 * @method array getOrderCount(array $params)
 * @method array closeOrder(array $params)
 * @method array openOrder(array $params)
 * @method array cancelOrder(array $params)
 * @method array createOrder(array $params)
 * @method array updateOrder(array $params)
 * @method array deleteOrder(array $params)
 * @method array getPages(array $params)
 * @method array getPageCount(array $params)
 * @method array getPage(array $params)
 * @method array createPage(array $params)
 * @method array updatePage(array $params)
 * @method array deletePage(array $params)
 * @method array getProductImages(array $params)
 * @method array getProductImageCount(array $params)
 * @method array getProductImage(array $params)
 * @method array createProductImage(array $params)
 * @method array updateProductImage(array $params)
 * @method array deleteProductImage(array $params)
 * @method array getProductVariants(array $params)
 * @method array getProductVariantCount(array $params)
 * @method array getProductVariant(array $params)
 * @method array createProductVariant(array $params)
 * @method array updateProductVariant(array $params)
 * @method array deleteProductVariant(array $params)
 * @method array getProducts(array $params)
 * @method array getProductCount(array $params)
 * @method array getProduct(array $params)
 * @method array createProduct(array $params)
 * @method array updateProduct(array $params)
 * @method array deleteProduct(array $params)
 * @method array getProvinces(array $params)
 * @method array getProvinceCount(array $params)
 * @method array getProvince(array $params)
 * @method array updateProvince(array $params)
 * @method array getRecurringApplicationCharges(array $params)
 * @method array getRecurringApplicationCharge(array $params)
 * @method array createRecurringApplicationCharge(array $params)
 * @method array activateRecurringApplicationCharge(array $params)
 * @method array deleteRecurringApplicationCharges(array $params)
 * @method array getRedirects(array $params)
 * @method array getRedirectsCount(array $params)
 * @method array getRedirect(array $params)
 * @method array createRedirect(array $params)
 * @method array updateRedirect(array $params)
 * @method array deleteRedirect(array $params)
 * @method array getRefund(array $params)
 * @method array getScriptTags(array $params)
 * @method array createScriptTag(array $params)
 * @method array updateScriptTag(array $params)
 * @method array deleteScriptTag(array $params)
 * @method array getShippingZones(array $params)
 * @method array getShop()
 * @method array getSmartCollections(array $params)
 * @method array getSmartCollectionsCount(array $params)
 * @method array getSmartCollection(array $params)
 * @method array createSmartCollection(array $params)
 * @method array updateSmartCollection(array $params)
 * @method array updateSmartCollectionOrder(array $params)
 * @method array deleteSmartCollection(array $params)
 * @method array getThemes(array $params)
 * @method array getTheme(array $params)
 * @method array createTheme(array $params)
 * @method array updateTheme(array $params)
 * @method array deleteTheme(array $params)
 * @method array getTransactions(array $params)
 * @method array getTransactionCount(array $params)
 * @method array getTransaction(array $params)
 * @method array createTransaction(array $params)
 * @method array updateWebhook(array $params)
 * @method array getUsers(array $params)
 * @method array getUser(array $params)
 * @method array getWebhooks(array $params)
 * @method array getWebhookCount(array $params)
 * @method array getWebhook(array $params)
 * @method array createWebhook(array $params)
 * @method array deleteWebhook(array $params)
 */
class Client
{
	
	/**
     * Guzzle service description
     *
     * @var \Shopify\Description
     */
    private $description;
    
	
	/**
     * Guzzle base client
     *
     * @var \GuzzleHttp\Client
     */
    private $baseClient;
    
    
    /**
     * Adapter for Guzzle base client
     *
     * @var \GuzzleHttp\Adapter\AdapterInterface
     */
    private $baseClientAdapter;
    
    
    /**
     * Api client services
     *
     * @var \GuzzleHttp\Command\Guzzle\GuzzleClient
     */
    private $serviceClient;
    
    
    /**
     * Shopify client config settings
     *
     * @var array
     */
    private $settings = [];
    
    
    /**
     * Request header items
     *
     * @var array
     */
    private $globalParams = [
            "shopUrl" => [
                "type" => "string",
                "location" => "uri",
                "required" => true,
            ],
            "account_token" => [
                "type" => "string",
                "location" => "header",
                "required" => false,
                "sentAs" => "X-Shopify-Access-Token",
            ],
            "Content-Type" => [
	            "type" => "string",
	            "location" => "header",
	            "required" => false,
	            "sentAs" => "application/json"
            ],
            "X-Shopify-Access-Token" => [
                "type" => "string",
                "location" => "header",
                "description" => "The Auth Token."
			]
        ];

    /**
     * Create a new GuzzleClient Service, ability to use the client
     * without setting properties on instantiation.
     *
     * @param  array  $attributes
     * @return void
    */
    public function __construct(array $settings = array())
    {
        $this->settings = $settings;
    }


	/**
     * Merge additional settings with existing and save. Overrides
     * existing settings as well.
     *
     * @param  array  $settings
     * @return static
     */
    public function settings(array $settings)
    {
        $this->settings = array_merge($this->settings, $settings);
        if ($this->serviceClient) $this->buildClient();
        return $this;
    }
    

	/**
     * Load resource configuration file and return array.
     *
     * @param  string  $name
     * @return array
     */
    private function loadResource($name)
    {
        return require __DIR__.'/resources/'.$name.'.php';
    }
    

    /**
     * Build new service client from descriptions.
     *
     * @return void
     */
    private function buildClient()
    {
        $client = $this->getBaseClient();
       
        if (!$this->description) {
            $this->reloadDescription();
        }

        $this->serviceClient = new GuzzleClient(
                $client,
                $this->description,
                array(
                    'emitter'  => $this->baseClient->getEmitter(),
                    'defaults' => $this->settings,
                )
            );
    }
    
    /**
     * Retrieve Guzzle base client.
     *
     * @return \GuzzleHttp\Client
     */
    private function getBaseClient()
    {
        return $this->baseClient ?: $this->baseClient = $this->loadBaseClient();
    }
    

    /**
     * Set adapter and create Guzzle base client.
     *
     * @return \GuzzleHttp\Client
     */
    private function loadBaseClient(array $settings = [])
    {
        if ($this->baseClientAdapter)
            $settings['adapter'] = $this->baseClientAdapter;

        return $this->baseClient = new BaseClient($settings);
    }
    

    /**
     * Description works tricky as a 
     * property, reload as a needed.
     *
     * @return void
     */
    private function reloadDescription()
    {
        $this->description = new Description($this->loadConfig());
    }
    
    
    /**
     * Load configuration file and parse resources.
     *
     * @return array
     */
    private function loadConfig()
    {
        $description = $this->loadResource('service-config');
       
        // initial description building, use api info and build base url
        $description = $description + [
                'baseUrl' => 'https://'.$this->settings['shopUrl'],
                'operations' => [],
                'models' => []
            ];
                        
        // process each of the service description resources defined
        foreach ($description['services'] as $serviceName) {
	        
            $service = $this->loadResource($serviceName);
            $description = $this->loadServiceDescription($service, $description);
        
        }

        // dead weight now, clean it up
        unset($description['services']);
        return $description;
    }
    
    
    /**
     * Load service description from resource, add global
     * parameters to operations. Operations and models
     * added to full description.
     *
     * @param  array $service
     * @param  array $description
     * @return array
     */
    private function loadServiceDescription(array $service, array $description)
    {
        foreach ($service as $section => $set) {
            if ($section == 'operations') {
                // add global parameters to the operation parameters
                foreach ($set as &$op)
                    $op['parameters'] = isset($op['parameters'])
                                    ? $op['parameters'] + $this->globalParams
                                    : $this->globalParams;
            }
            $description[$section] = $description[$section] + $set;
        }
        return $description;
    }
    
    
    public function __call($method, $parameters)
    {
		if (!$this->serviceClient) $this->buildClient();

        return call_user_func_array([$this->serviceClient, $method], $parameters);
    }
    
}
