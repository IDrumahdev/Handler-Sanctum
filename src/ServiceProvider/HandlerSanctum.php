<?php

namespace Ibnudirsan\LaraHandlerSanctum\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\LaraHandlerSanctum\Halper\Exception\Response;

class HandlerSanctum extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Response::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/ibnuDirsanSanctum.php',
            'LaraHandlerSanctum'
        );

        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ],'sanctum-config-ibnudirsan');
    }

}