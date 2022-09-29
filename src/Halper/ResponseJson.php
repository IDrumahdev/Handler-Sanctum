<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

class ResponseJson {

    public static function Cretae($data)
    {
        $errorStatus = false;
        $status      = "Create Data";
        $message     = "Successfully created Data";
        $result      = $data->makeHidden(config('handler.hidden'));

        $response = [
            'app'   => [
                'info'      => [
                    'error'     =>$errorStatus,
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

    public static function Read($data)
    {
        # code...
    }

    public static function Show($data)
    {
        $errorStatus = false;
        $status      = "Show Data";
        $message     = "Successfully displaying Data";
        $result      = $data->makeHidden(config('handler.hidden'));

        $response = [
        'app'   => [
                'info'      => [
                    'error'     =>$errorStatus,
                    'Status'    => $status,
                    'httpcode'  => 200,
                    'Message'   => $message
                ],
                'result'    => [
                    'data'  => $result
                ]
            ]
        ];
            return response()->json($response, 200);
    }

    public static function update($data = [])
    {
        # code...
    }

    public static function Delete($data = [])
    {
        # code...
    }

}