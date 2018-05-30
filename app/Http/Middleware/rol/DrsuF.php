<?php

namespace App\Http\Middleware\rol;

use Closure;

class DrsuF
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {   
        //if(Auth::user()->hasRoles(['Docente','Administrador General'])){
        if(auth()->user()->hasRoles(['DRSU-F','SuperAdmin'])){
           //return  response('Exito Docente',403);
            return $next($request);

        }else{
          return  response('No puedes Continuar',403);
        }
    }
}
