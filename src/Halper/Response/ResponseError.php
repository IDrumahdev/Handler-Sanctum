<?php

namespace Ibnudirsan\HandlerSanctum\Halper\Response;

use Ibnudirsan\HandlerSanctum\Halper\Facade\ErrorMessge;
use Illuminate\Support\Facades\Facade;

class ResponseError extends Facade {

    protected static function getFacadeAccessor()
    {
        return ErrorMessge::class;
    }

}