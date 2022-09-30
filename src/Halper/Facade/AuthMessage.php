<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Facade;

class AuthMessage {

    public function loginSuccess($arguments)
    {
        $errorStatus = false;
        $status      = "Success";
        $username    = $arguments['name'];
        $token       = $arguments['token'];
        $message     = $arguments['message'];

        $responseError = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 201
                ],
                'data'  => [
                    'username'  => $username,      
                    'token'     => $token,
                    'message'   => $message
                ]
            ]
        ];
            return response()->json($responseError, 201);
    }

    public function loginInvalid($arguments)
    {
        $errorStatus = true;
        $status      = "Invalid";
        $message     = $arguments['message'];

        $responseError = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 401
                ],
                'data'  => [
                    'message'   => $message
                ]
            ]
        ];
            return response()->json($responseError, 401);
    }

}