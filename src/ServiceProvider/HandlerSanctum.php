<?php

namespace Ibnudirsan\LaraHandlerSanctum\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\LaraHandlerSanctum\Halper\Exception\Response;

class HandlerSanctum extends ServiceProvider
{
    /**
     * Register services.
     *
     */
    public function register()
    {
        $this->app->bind(Response::class);
        $this->mergeConfigFrom(__DIR__.'/../config/ibnuDirsanSanctum.php', 'sanctum-config-ibnudirsan');
    }

    /**
     * Bootstrap services.
     *
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
              __DIR__.'/../config/ibnuDirsanSanctum.php' => config_path('ibnuDirsanSanctum.php'),
            ], 'config');
        
        }
    }

}