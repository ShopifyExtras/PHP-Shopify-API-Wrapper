<?php namespace Shopify\Laravel;

use Shopify\Exception\UnauthorizedException;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('shopify', function($app) {

            if (isset($app['config']['services']['shopify'])) {

                $config = array_filter($app['config']['services']['shopify']);

                return new \Shopify\Client($config);

            } else return new \Shopify\Client();

        });

        $app = $this->app;

        $this->app->error(function(UnauthorizedException $exception) use ($app) {
            $app['log']->warning($exception);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('shopify');
    }

}