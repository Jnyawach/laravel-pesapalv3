<?php

namespace Nyawach\LaravelPesapal\Facades;
use Illuminate\Support\Facades\Facade;
class LaravelPesapal extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'nyawach-pesapal';
    }
}
