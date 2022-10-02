<?php

namespace Ibnudirsan\HandlerSanctum\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\HandlerSanctum\Commands\publishCommand;
use Ibnudirsan\HandlerSanctum\Commands\versionCommand;

class HandlerSanctum extends ServiceProvider
{
    /**
     * Register services.
     *
     */
    public function register(): void
    {
        $this->registerConfig();
        $this->commands([
            publishCommand::class,
            versionCommand::class
        ]);
    }

    /**
     * Bootstrap services.
     *
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../config/HandlerSanctum.php' => config_path('HandlerSanctum.php'),
        ], 'sanctum-handler-ibnudirsan');
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/HandlerSanctum.php', 'HandlerSanctum');
    }

}