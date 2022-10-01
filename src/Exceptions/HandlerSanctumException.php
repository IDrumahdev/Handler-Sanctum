<?php

namespace Ibnudirsan\LaraHandlerSanctum\Exceptions;

use Throwable;

use Ibnudirsan\LaraHandlerSanctum\Halper\Exception\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class HandlerSanctumException extends ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

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

        if ($request->is(config('handler.prefix.api'))) {
            if (method_exists($exception, 'getStatusCode')) {
                $statusCode = $this->prepareException($exception)->getStatusCode();
                return Response::Status($statusCode);
            } else {
                    $statusCode = 500;
            }
        }

        if ($request->is(config('handler.prefix.api')) && auth('sanctum')->check() == false || empty($request->header('Authorization'))){
            return Response::Status(401);
        }
            return parent::render($request, $exception);
    }
}