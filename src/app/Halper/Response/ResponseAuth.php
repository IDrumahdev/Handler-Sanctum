<?php

namespace Ibnudirsan\HandlerSanctum\App\Halper\Response;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\HandlerSanctum\App\Halper\Facade\AuthMessage;


class ResponseAuth extends Facade {
    
    protected static function getFacadeAccessor()
    {
        return AuthMessage::class;
    }

}