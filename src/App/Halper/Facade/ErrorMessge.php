<?php

namespace Ibnudirsan\HandlerSanctum\App\Halper\Facade;

class ErrorMessge {

    public static function Validate($validator)
    {
        /**
        * Handling Errors Validate
        */
        $errorStatus = true;
        $status      = "Bad Request";
        $message     = $validator->errors();

        $response = [
            config('HandlerSanctum.prefix.name') => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 400
                ],
                'message'  => [
                    'data'  => $message
                ]
            ]
        ];
            return response()->json($response, 400);

    }

    public function NotFound($arguments = ["message" => "Data Not Found"])
    {
        /**
        * Handling Errors Not Found
        */
        $errorStatus = true;
        $status      = "Not Found";
    
        $response = [
            config('HandlerSanctum.prefix.name') => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 404
                ],
                    'message'  => [
                        'data'  => $arguments
                ]
            ]
        ];
            return response()->json($response, 404);
    }

    public function serverError($arguments = ["message" => "Internal Server Error"])
    {
        /**
        * Handling Internal Server Error
        */

        $errorStatus = true;
        $status      = "Server Error";
    
        $response = [
            config('HandlerSanctum.prefix.name') => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 500
                ],
                    'message'  => [
                        'data'  => $arguments
                ]
            ]
        ];
            return response()->json($response, 500);
    }

}
