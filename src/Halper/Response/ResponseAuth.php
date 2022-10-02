<?php

namespace Ibnudirsan\HandlerSanctum\Halper\Response;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\HandlerSanctum\Halper\Facade\AuthMessage;


class ResponseAuth extends Facade {
    
    protected static function getFacadeAccessor()
    {
        return AuthMessage::class;
    }

}