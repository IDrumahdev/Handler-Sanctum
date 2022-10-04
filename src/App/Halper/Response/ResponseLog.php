<?php

namespace Ibnudirsan\HandlerSanctum\App\Halper\Response;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\HandlerSanctum\App\Halper\Facade\LogMessage;

class ResponseLog extends Facade {

    protected static function getFacadeAccessor()
    {
        return LogMessage::class;
    }

}