<?php namespace Fakeheal\OpauthLaravel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Opauth;

class OpauthLaravelServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('fakeheal/opauth-laravel');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['opauth'] = $this->app->share(function ($app) {
            $config = $app['config']->get('opauth-laravel::opauth');
            return new Opauth($config, false);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
