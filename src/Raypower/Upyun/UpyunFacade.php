<?php


namespace Raypower\Upyun;

use Illuminate\Support\Facades\Facade;

class UpyunFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'upyun';
    }
}