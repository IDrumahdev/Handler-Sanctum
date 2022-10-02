<?php

namespace Ibnudirsan\LaraHandlerSanctum\Halper\Response;

use Ibnudirsan\LaraHandlerSanctum\Halper\Facade\ErrorMessge;
use Illuminate\Support\Facades\Facade;

class ResponseError extends Facade {

    protected static function getFacadeAccessor()
    {
        return ErrorMessge::class;
    }

}