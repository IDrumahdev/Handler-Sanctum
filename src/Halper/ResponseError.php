<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

class ResponseError {

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

    public function NotFound()
    {
        /**
        * Handling Errors Not Found
        */
        $errorStatus = true;
        $status      = "Not Found";
        $message     = "Data Not Found";
    
        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 404
                ],
                    'message'  => [
                        'data'  => $message
                ]
            ]
        ];
            return response()->json($response, 404);
    }

    public function serverError()
    {
        /**
        * Handling Internal Server Error
        */

        $errorStatus = true;
        $status      = "Server Error";
        $message     = "Internal Server Error";
    
        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 500
                ],
                    'message'  => [
                        'data'  => $message
                ]
            ]
        ];
            return response()->json($response, 500);
    }
}