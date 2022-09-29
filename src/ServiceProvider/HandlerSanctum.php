<?php

namespace Ibnudirsan\LaraHandlerSanctum\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\LaraHandlerSanctum\Halper\Response;

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
        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ],'handler-sanctum-config');
    }

}