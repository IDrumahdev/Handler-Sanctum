<?php

namespace Ibnudirsan\HandlerSanctum\Halper\Facade;

class AuthMessage {

    /**
    * Handling Login Success
    */
    public function loginSuccess($arguments)
    {
        $errorStatus = false;
        $status      = "Created";

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

    /**
    * Handling login Invalid
    */
    public function loginInvalid($arguments = ['message' => 'Login Failed to generate API Token.'])
    {
        $errorStatus = true;
        $status      = "Unauthorized";

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