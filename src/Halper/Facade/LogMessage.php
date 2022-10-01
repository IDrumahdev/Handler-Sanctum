<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Facade;

class LogMessage {

    public static function Success($arguments)
    {
        $errorStatus = false;
        $status      = "Success";

        $responseError = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200
                ],
                'data'  => $arguments
            ]
        ];
            return response()->json($responseError, 200);
    }
    
}