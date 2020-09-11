<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\ConsultasFormRequest; //validacion de los datos de formulario
use Illuminate\Http\Request;

class ConsultasController extends Controller
{

    function mostrarConsulta(ConsultasFormRequest $request){
        $nombre = $request->input('fname');
        $rangoInicio = $request->input('rinic');
        $rangoFinal = $request->input('rfin');
        $idEmployee = $request->input('idemp');
        $tipo = $request->input('mySelect');
        
        switch ($tipo){

            case 'employees':
                $employees = Employee::select('id','first_name', 'last_name','gender')->whereBetween('id',[$rangoInicio,$rangoFinal])->get();
                return view('listaempleados', compact('employees','nombre'));                
            break;

            case 'titles':
                $titles = Employee::find($idEmployee)->titles;
                return view('listatitulos', compact('titles','nombre'));
            break;
        }
    }

    
}
