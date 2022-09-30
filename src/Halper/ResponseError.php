<?

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

class ResponseError {

    public static function Validate($validator)
    {
        /**
        * Handling Errors Validate
        */
        if($validator->fails()){

            $errorStatus = true;
            $status      = "Bad Request";
            $message     = $validator->errors();

            $resultError = [
                        'error'     => $errorStatus,
                        'info'      => [
                            'status'    => $status,
                            'httpcode'  => 400,
                            'message'   => $message
                ]
            ];

                return response()->json($resultError,400);
        }
    }

    public function NotFound()
    {
        /**
        * Handling Errors Not Found
        */
        $errorStatus = true;
        $status      = "Not Found";
        $message     = "Data Not Found";

        $resultError = [
                'error'     =>$errorStatus,
                'info'      => [
                    'Status'    => $status,
                    'httpcode'  => 400,
                    'Message'   => $message
            ]
        ];
            return response()->json($resultError, 404);
    }

    public function serverError()
    {
        /**
        * Handling Internal Server Error
        */
        $errorStatus = true;
        $status      = "Server Error";
        $message     = "Internal Server Error";

        $resultError = [    
            'error'     =>$errorStatus,
            'info'      => [
                'Status'    => $status,
                'httpcode'  => 400,
                'Message'   => $message
            ]
        ];
            return response()->json($resultError, 500);
    }
}
