<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

use Ibnudirsan\LaraHandlerSanctum\Halper\Response;

class renderResponse
{
    public static function handler($request, $exception)
    {
        /**
        * render result code.
        */
        if ($request->is('api/*')) {
            $code = method_exists($exception, 'getStatusCode');
                if (method_exists($exception, 'getStatusCode')) {
                    $statusCode = $this->prepareException($exception)->getStatusCode();
                    return Response::Status($statusCode);
                } else {
                        $statusCode = 500;
                        return Response::Status($statusCode);
                }
        }

    }
}