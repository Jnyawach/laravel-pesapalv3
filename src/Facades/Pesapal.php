<?php

namespace Nyawach\LaravelPesapal\Facades;
use Illuminate\Support\Facades\Facade;
class Pesapal extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'nyawach-pesapal';
    }
}
