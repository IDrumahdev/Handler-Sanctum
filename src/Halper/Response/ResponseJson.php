<?php

namespace Ibnudirsan\HandlerSanctum\Halper\Response;

use Illuminate\Support\Facades\Facade;
use Ibnudirsan\HandlerSanctum\Halper\Facade\JsonMessage;

class ResponseJson extends Facade {

    protected static function getFacadeAccessor()
    {
        return JsonMessage::class;
    }

}