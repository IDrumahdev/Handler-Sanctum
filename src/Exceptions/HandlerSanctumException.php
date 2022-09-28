<?php

namespace Ibnudirsan\LaraHandlerSanctum\Exceptions;

use Throwable;
use Ibnudirsan\LaraHandlerSanctum\Halper\Response;
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
        /**
        * Jika status code 500 dan selain 500.
        */
        if ($request->is('api/*')) {
            $code = method_exists($exception, 'getStatusCode');
            if (method_exists($exception, 'getStatusCode')) {
                $statusCode = $this->prepareException($exception)->getStatusCode();
                return Response::Status($statusCode);
            } else {
                    $statusCode = 500;
            }
        }

        if ($request->is('api/*') && auth('sanctum')->check() == false || empty($request->header('Authorization'))){

            $errorStatus = true;
            $status      = "Unauthorized";
            $typeToken   = "TokenKey";
            $message     = "Unauthorized Access.";

            $response = [
                    'status'    =>$status,
                    'httpcode'  =>401,
                    'type'      =>$typeToken,
                    'error'     =>$errorStatus,
                    'info'      => [
                        'message'   =>$message
                ]
            ];
                return response()->json($response, 401);
        }
            return parent::render($request, $exception);
    }
}