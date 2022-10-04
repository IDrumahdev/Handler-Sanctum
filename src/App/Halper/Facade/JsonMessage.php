<?php

namespace Ibnudirsan\HandlerSanctum\App\Halper\Facade;

class JsonMessage {

    public static function cretae($data)
    {
        $errorStatus = false;
        $status      = "Created";
        $message     = "Successfully created Data";
        $result      = $data->makeHidden(config('HandlerSanctum.hidden'));

        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 201,
                    'Message'   => $message
                ],
                'result'  => [
                    'data'  => $result
                ]
            ]
        ];
            return response()->json($response, 201);
    }

    public static function read($data)
    {
        $errorStatus = false;
        $status      = "OK";
        $message     = "Successfully Read Data";
        $result      = $data->makeHidden(config('HandlerSanctum.hidden'));

        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'Message'   => $message
                ],
                'result'  => [
                    'data'  => $result
                ]
            ]
        ];
            return response()->json($response, 200);
    }

    public static function show($data)
    {
        $errorStatus = false;
        $status      = "OK";
        $message     = "Successfully displaying Data";
        $result     = $data->setCollection($data->getCollection()->makeHidden(config('HandlerSanctum.hidden')));

        $response = [
        'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'Message'   => $message
                ],
                'result'    => [
                    'count' => $result->total(),
                    'data'  => $result
                ]
            ]
        ];
            return response()->json($response, 200);
    }

    public static function update($arguments = ["message" => "Successfully updated Data.", 'updated'  => true])
    {
        $errorStatus = false;
        $status      = "OK";

        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'message'   => $arguments['message']
                ],
                'result'  => [
                    'updated'   => $arguments['updated']
                ]
            ]
        ];
            return response()->json($response, 200);
    }

    public static function delete($arguments = ["message" => "Successfully deleted Data.", 'deleted'  => true])
    {
        $errorStatus = false;
        $status      = "OK";

        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'Message'   => $arguments['message']
                ],
                'result'  => [
                    'updated'  => $arguments['deleted']
                ]
            ]
        ];
            return response()->json($response, 200);
    }

}