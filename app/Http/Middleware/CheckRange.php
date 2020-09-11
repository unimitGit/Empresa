<?php

namespace App\Http\Middleware;

use Closure;
use App\Facades\CuentaUsuarios;

class CheckRange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function __construct()
    {
        $this->valorMax = CuentaUsuarios::retornaMaxUsers();;
    }

    //verifica el rango de peticiones de consulta
    public function handle($request, Closure $next)
    {
        $rangoInicio = $request->input('rinic');
        $rangoFinal = $request->input('rfin');
        if(($rangoInicio > 0) && ($rangoFinal > 0) && ($rangoInicio < $rangoFinal) && ($rangoFinal <= $this->valorMax)){
            return $next($request);
        } else {
            return redirect('home');
        }
        
    }
}

