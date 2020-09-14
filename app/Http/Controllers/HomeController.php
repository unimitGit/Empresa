<?php

namespace App\Http\Controllers;

use App\Facades\CuentaUsuarios as TestContador;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function enviaformulario()
    {
        $valorMax = Cache::rememberForever('maximo', function () { // Ojo aqui, enviar parametros a un closure
            return TestContador::retornaMaxUsers();
        });        

        return view('seleccionarconsulta', compact('valorMax'));
    }

    public function ingresarUsuario()
    {
        return view('ingresarusuario');
    }
        
}
