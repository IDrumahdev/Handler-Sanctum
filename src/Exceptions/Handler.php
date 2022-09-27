<?php

namespace Ibnudirsan\LaraHandlerSanctum\Exceptions;

use Throwable;
use Ibnudirsan\LaraHandlerSanctum\Halper\renderResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception) {
        return "Oke Bro";
    }
}