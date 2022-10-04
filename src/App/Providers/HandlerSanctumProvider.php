<?php

namespace Ibnudirsan\HandlerSanctum\App\Providers;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\HandlerSanctum\App\Commands\publishCommand;
use Ibnudirsan\HandlerSanctum\App\Commands\versionCommand;


class HandlerSanctumProvider extends ServiceProvider
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
            __DIR__.'/../../Config/HandlerSanctum.php' => config_path('HandlerSanctum.php'),
        ], 'sanctum-handler-ibnudirsan');
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../Config/HandlerSanctum.php', 'HandlerSanctum');
    }

}