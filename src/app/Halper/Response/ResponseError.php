<?php

namespace Ibnudirsan\HandlerSanctum\App\Halper\Response;


use Illuminate\Support\Facades\Facade;
use Ibnudirsan\HandlerSanctum\App\Halper\Facade\ErrorMessge;

class ResponseError extends Facade {

    protected static function getFacadeAccessor()
    {
        return ErrorMessge::class;
    }

}