<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

class ResponseJson {

    public static function Cretae()
    {
        $errorStatus = false;
        $status      = "Create Data";
        $message     = "Successfully created Data";

        $response = [
            'error'     =>$errorStatus,
            'info'      => [
                'Status'    => $status,
                'httpcode'  => 201,
                'Message'   => $message
                ]
            ];

        return response()->json($response, 201);
    }

    public static function Read()
    {
        # code...
    }

    public function Show($data)
    {
        $errorStatus = false;
        $status      = "Show Data";
        $message     = "Successfully displaying Data";
        $show        = $data->makeHidden(config('handler.hidden'));

        $response = [
            'error'     =>$errorStatus,
            'info'      => [
                'Status'    => $status,
                'httpcode'  => 200,
                'Message'   => $message
            ],
            'result'    => [
                'data'  => $show
            ]
            ];

        return response()->json($response, 200);
    }

    public static function update()
    {
        # code...
    }

    public static function Delete()
    {
        # code...
    }

}