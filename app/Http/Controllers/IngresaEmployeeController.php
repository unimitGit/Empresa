<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Message;
use App\Events\UsuarioCreado;
//use App\Events\NewMessageNotification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;


class IngresaEmployeeController extends Controller
{
    function ingresar(Request $request){
        $nombre = $request->input('fname');
        $apellido = $request->input('lname');
        $fechaNacimiento = $request->input('birthdate');
        $fechaVinculacion = $request->input('hiredate');
        $genero = $request->input('gender');
        

        $employee = new Employee;
        $employee->first_name = $nombre;
        $employee->last_name =  $apellido;
        $employee->birth_date = $fechaNacimiento;
        $employee->hire_date =  $fechaVinculacion;
        $employee->gender = $genero;

        if($employee->save()){
            
            $user_id = Auth::user()->id;

            $message = new Message;
            $message->setAttribute('from', $user_id);
            $message->setAttribute('to', 1);
            $message->setAttribute('message', 'El usuario ' . $user_id . ' ha registrado a ' . $nombre . ' '. $apellido);
            $message->save();
         
            event(new UsuarioCreado($message)); // <-- broadcasting
            Cache::increment('maximo');
            echo  $nombre . ' '. $apellido .' ha sido guardado correctamente';
            echo  '<b> <a href="/ingresarusuario">Volver</a>';

        }else {
            echo 'error, se ha producido un error';
        }        
    }    
}