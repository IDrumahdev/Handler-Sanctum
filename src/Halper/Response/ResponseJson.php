<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Response;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\LaraHandlerSanctum\Halper\Facade\JsonMessage;

class ResponseJson extends Facade {

    protected static function getFacadeAccessor()
    {
        return JsonMessage::class;
    }

}