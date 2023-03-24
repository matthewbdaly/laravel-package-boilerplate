<?php

declare(strict_types=1);

namespace Package\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service provider
 */
final class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../routes.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'packagename');
        $this->publishes([
            __DIR__ . '/../views', resource_path('views/vendor/packagename'),
        ]);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        // Placeholder
    }
}
