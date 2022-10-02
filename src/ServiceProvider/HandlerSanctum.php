<?php

namespace Ibnudirsan\HandlerSanctum\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class HandlerSanctum extends ServiceProvider
{
    /**
     * Register services.
     *
     */
    public function register(): void
    {
        $this->app->singleton('Ibnudirsan\HandlerSanctum\Commands', function($app) {
            return $app[
                'Ibnudirsan\HandlerSanctum\Commands\versionCommand',
                'Ibnudirsan\HandlerSanctum\Commands\publishCommand'
            ];
        });
        $this->commands('Ibnudirsan\HandlerSanctum\Commands');
    }

    /**
     * Bootstrap services.
     *
     */
    public function boot(): void
    {
        $this->registerConfig();
        $this->publishes([
            __DIR__.'/../../config/HandlerSanctum.php' => config_path('HandlerSanctum.php'),
        ], 'sanctum-handler-ibnudirsan');
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/HandlerSanctum.php',
            'sanctum-handler-ibnudirsan'
        );
    }

}