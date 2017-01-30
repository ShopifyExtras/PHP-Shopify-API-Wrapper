<?php namespace Shopify;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use GuzzleHttp\Client as BaseClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

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
//        "shopUrl" => [
//            "type" => "string",
//            "location" => "uri",
//            "required" => true,
//        ],
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
            "sentAs" => "application/json",
        ],
        "X-Shopify-Access-Token" => [
            "type" => "string",
            "location" => "header",
            "description" => "The Auth Token.",
        ],
    ];

    /**
     * Create a new GuzzleClient Service, ability to use the client
     * without setting properties on instantiation.
     *
     * @param  array $attributes
     *
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
     * @param  array $settings
     *
     * @return static
     */
    public function settings(array $settings)
    {
        $this->settings = array_merge($this->settings, $settings);
        if ($this->serviceClient) {
            $this->buildClient();
        }

        return $this;
    }


    /**
     * Load resource configuration file and return array.
     *
     * @param  string $name
     *
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
            $this->description
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
        if ($this->baseClientAdapter) {
            $settings['adapter'] = $this->baseClientAdapter;
        }

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
                'models' => [],
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
     *
     * @return array
     */
    private function loadServiceDescription(array $service, array $description)
    {
        foreach ($service as $section => $set) {
            if ($section == 'operations') {
                // add global parameters to the operation parameters
                foreach ($set as &$op) {
                    $op['parameters'] = isset($op['parameters'])
                        ? $op['parameters'] + $this->globalParams
                        : $this->globalParams;
                }
            }
            $description[$section] = $description[$section] + $set;
        }

        return $description;
    }


    public function __call($method, $parameters)
    {
        if (!$this->serviceClient) {
            $this->buildClient();
        }

        return call_user_func_array([$this->serviceClient, $method], $parameters);
    }

}
