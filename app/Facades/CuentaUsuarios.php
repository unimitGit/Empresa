<?php

namespace app\Facades;

use Illuminate\Support\Facades\Facade;

class CuentaUsuarios extends Facade{
    protected static function getFacadeAccessor() { return 'contador'; }
}