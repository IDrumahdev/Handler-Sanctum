<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

use Ibnudirsan\LaraHandlerSanctum\Halper\Response;

class renderResponse
{
    public static function handler($request, $statusCode, $check, $Authorization)
    {
        /**
        * render result code.
        */
        if ($request->is('api/*') && $check == false || empty($Authorization)){
            return Response::Status(401);
        } elseif ($request->is('api/*')) {
            return Response::Status($statusCode);
        } 
    }
}