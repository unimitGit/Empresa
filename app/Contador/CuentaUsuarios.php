<?php

namespace App\Contador;

use App\Employee;

class CuentaUsuarios implements InterfaceContador
{

    public function retornaMaxUsers(){
        return Employee::count();
    }

}