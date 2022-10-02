<?php

namespace Ibnudirsan\HandlerSanctum\Exceptions;

use Throwable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Exceptions\Handler;
use Ibnudirsan\HandlerSanctum\Halper\Exception\Response;
use Ibnudirsan\HandlerSanctum\Halper\Response\ResponseLog;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class HandlerSanctumException extends Handler
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
        if(!config('HandlerSanctum.prefix.api')) {
            Artisan::call("vendor:publish --tag=sanctum-handler-ibnudirsan");
            return ResponseLog::Success([
                'message'   => 'Publishing [sanctum-handler-ibnudirsan] assets.',
                'path'      => '[config/HandlerSanctum.php].'
            ]);
        }elseif($request->is(config('HandlerSanctum.prefix.api'))) {
                if ($exception instanceof HttpExceptionInterface) {
                    $statusCode = $exception->getStatusCode();
                        return Response::Status($statusCode);
                } elseif ($request->is(config('HandlerSanctum.prefix.api')) && auth('sanctum')->check() == false || empty($request->header('Authorization'))){
                        return Response::Status(401);
                } else {
                    $statusCode = 500;
                        return Response::Status($statusCode);
                }
        }
            return parent::render($request, $exception);
    }
}