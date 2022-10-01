<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\LaraHandlerSanctum\Halper\Facade\LogMessage;

class ResponseLog extends Facade {

    protected static function getFacadeAccessor()
    {
        return LogMessage::class;
    }

}