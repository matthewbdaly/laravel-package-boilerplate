<?php

namespace Package\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service provider
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../../routes.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'packagename');
        $this->publishes([
            __DIR__.'/../views', resource_path('views/vendor/packagename')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
