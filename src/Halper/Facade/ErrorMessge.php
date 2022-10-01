<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Facade;

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
            'app'   => [
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

    public function NotFound($arguments = "Data Not Found")
    {
        /**
        * Handling Errors Not Found
        */
        $errorStatus = true;
        $status      = "Not Found";
    
        $response = [
            'app'   => [
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

    public function serverError($arguments = "Internal Server Error")
    {
        /**
        * Handling Internal Server Error
        */

        $errorStatus = true;
        $status      = "Server Error";
    
        $response = [
            'app'   => [
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
