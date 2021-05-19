<?php

namespace JeffAlmeida\CrudGeneric;

use Illuminate\Support\ServiceProvider;

class CrudGenericServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'jeff-almeida');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'jeff-almeida');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/crud-generic.php', 'crud-generic');

        // Register the service the package provides.
        $this->app->singleton('crud-generic', function ($app) {
            return new CrudGeneric;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['crud-generic'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/crud-generic.php' => config_path('crud-generic.php'),
        ], 'crud-generic.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/jeff-almeida'),
        ], 'crud-generic.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/jeff-almeida'),
        ], 'crud-generic.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/jeff-almeida'),
        ], 'crud-generic.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
