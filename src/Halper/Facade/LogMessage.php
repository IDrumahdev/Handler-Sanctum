<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Facade;

class LogMessage {

    /**
    * Handling Method Default Success
    */
    public static function Success($arguments = ["message" => "Data Process Successfully"])
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