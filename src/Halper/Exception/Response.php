<?php

namespace Ibnudirsan\HandlerSanctum\Halper\Exception;

class Response {
    
    public static function Status($httpCode)
    {   
        if ($httpCode == 400) { //400

            $errorStatus = true;
            $status      = "Bad Request";
            $message     = "Access Bad Request";
    
            $responseError = [
                'app'   => [
                    'info'      => [
                        'error'     => $errorStatus,
                        'Status'    => $status,
                        'httpcode'  => 400
                    ],
                    'data'  => [
                        'Message'   => $message
                    ]
                ]
            ];
                return response()->json($responseError, 400);

        } elseif ($httpCode == 401) { //401

            $errorStatus = true;
            $status      = "Unauthorized";
            $message     = "Unauthorized Access.";
    
            $responseError = [
                'app'   => [
                    'info'      => [
                        'error'     => $errorStatus,
                        'Status'    => $status,
                        'httpcode'  => 401
                    ],
                    'data'  => [
                        'Message'   => $message
                    ]
                ]
            ];
                return response()->json($responseError, 401);

        } elseif ($httpCode == 403) { //403

            $errorStatus = true;
            $status      = "Forbidden";
            $message     = "Forbidden Access.";
    
            $responseError = [
                'app'   => [
                    'info'      => [
                        'error'     => $errorStatus,
                        'Status'    => $status,
                        'httpcode'  => 403
                    ],
                    'data'  => [
                        'Message'   => $message
                    ]
                ]
            ];
                return response()->json($responseError, 403);

        } elseif ($httpCode == 404) { //404

            $errorStatus = true;
            $status      = "Not Found";
            $message     = "Check Incorrect URL.";
    
            $responseError = [
                'app'   => [
                    'info'      => [
                        'error'     => $errorStatus,
                        'Status'    => $status,
                        'httpcode'  => 404
                    ],
                    'data'  => [
                        'Message'   => $message
                    ]
                ]
            ];
                return response()->json($responseError, 404);

        } elseif ($httpCode == 405) { //405

            $errorStatus = true;
            $status      = "Method Not Allowed";
            $message     = "Check Incorrect Method.";
    
            $responseError = [
                'app'   => [
                    'info'      => [
                        'error'     => $errorStatus,
                        'Status'    => $status,
                        'httpcode'  => 405
                    ],
                    'data'  => [
                        'Message'   => $message
                    ]
                ]
            ];
                return response()->json($responseError, 405);

        } elseif ($httpCode == 500) { //500

            $errorStatus = true;
            $status      = "Internal Server Error";
            $message     = "Access Internal Server Error.";
    
            $responseError = [
                'app'   => [
                    'info'      => [
                        'error'     => $errorStatus,
                        'Status'    => $status,
                        'httpcode'  => 500
                    ],
                    'data'  => [
                        'Message'   => $message
                    ]
                ]
            ];
                return response()->json($responseError, 500);

        }
    }
}