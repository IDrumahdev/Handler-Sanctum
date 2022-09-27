<?php

namespace Ibnudirsan\LaraHandlerSanctum\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Ibnudirsan\LaraHandlerSanctum\Halper\Response;
use Ibnudirsan\LaraHandlerSanctum\Halper\renderResponse;

class HandlerSanctum extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Response::class, renderResponse::class);

        $this->app->singleton('Ibnudirsan\LaraHandlerSanctum\Exceptions', function($app) {
            return $app['Ibnudirsan\LaraHandlerSanctum\Exceptions\Handler'];
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}