<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Facade;

class AuthMessage {

    public function loginSuccess($arguments)
    {
        $errorStatus = false;
        $status      = "Success";

        $responseError = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 201
                ],
                'data'  => $arguments
            ]
        ];
            return response()->json($responseError, 201);
    }

    public function loginInvalid($arguments)
    {
        $errorStatus = true;
        $status      = "Invalid";

        $responseError = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 401
                ],
                'data'  => [
                    'message'   => $arguments
                ]
            ]
        ];
            return response()->json($responseError, 401);
    }

}