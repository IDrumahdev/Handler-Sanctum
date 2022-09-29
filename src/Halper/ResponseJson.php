<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

class ResponseJson {

    public static function cretae($data)
    {
        $errorStatus = false;
        $status      = "Create Data";
        $message     = "Successfully created Data";
        $result      = $data->makeHidden(config('handler.hidden'));

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
        $status      = "Read Data";
        $message     = "Successfully Read Data";
        $result      = $data->makeHidden(config('handler.hidden'));

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
        $status      = "Show Data";
        $message     = "Successfully displaying Data";
        $result     = $data->setCollection($data->getCollection()->makeHidden(config('handler.hidden')));

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

    public static function update($data = true)
    {
        $errorStatus = false;
        $status      = "Update Data";
        $message     = "Successfully updated Data";

        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'Message'   => $message
                ],
                'result'  => [
                    'updated'  => (boolean)$data
                ]
            ]
        ];
            return response()->json($response, 200);
    }

    public static function delete($data = true)
    {
        $errorStatus = false;
        $status      = "Delete Data";
        $message     = "Successfully deleted Data";

        $response = [
            'app'   => [
                'info'      => [
                    'error'     => $errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'Message'   => $message
                ],
                'result'  => [
                    'updated'  => (boolean)$data
                ]
            ]
        ];
            return response()->json($response, 200);
    }

}