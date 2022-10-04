<?php

namespace Ibnudirsan\HandlerSanctum\App\Halper\Facade;

class LogMessage {

    /**
    * Handling Method Default Success
    */
    public static function Success($arguments = ["message" => "Data Process Successfully."])
    {
        $errorStatus = false;
        $status      = "OK";

        $responseError = [
            config('HandlerSanctum.prefix.name') => [
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