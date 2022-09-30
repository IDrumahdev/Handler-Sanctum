<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\LaraHandlerSanctum\Halper\Facade\AuthMessage;


class ResponseAuth extends Facade {
    
    protected static function getFacadeAccessor()
    {
        return AuthMessage::class;
    }

}