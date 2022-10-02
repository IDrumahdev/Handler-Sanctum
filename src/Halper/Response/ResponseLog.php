<?php

namespace Ibnudirsan\HandlerSanctum\Halper\Response;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\HandlerSanctum\Halper\Facade\LogMessage;

class ResponseLog extends Facade {

    protected static function getFacadeAccessor()
    {
        return LogMessage::class;
    }

}