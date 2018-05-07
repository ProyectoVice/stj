<?php

namespace App\Http\Controllers\modulos\inscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Departamento;
use Provincia;
Use Distrito;
Use User;
Use Caja;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('modulos.inscripcion_unheval.unheval1');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');

        $usuario=User::where("dni",$dni)->first();
        if($usuario!=""){
            return view('modulos.Admision.inscripciones.crear',compact('departamentos','provincias','distritos','usuario'));
        }
        $dni=$dni;
        return view('modulos.Admision.inscripciones.crear',compact('departamentos','provincias','distritos',"dni"));*/
        return view('modulos.inscripcion_unheval.unheval2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function validar(Request $request)
    {
        
        /*$cajas=Caja::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();
        if ($cajas!='') {
           if ( $cajas->estado_recibo!="0") {
                return redirect()->route('adminsion.ins.index')->with('rojo','El recibo ingresado ya ha sido usado');
           }
            return redirect()->route("adminsion.ins.create",$request->dni);
        }else{            
            return redirect()->route('adminsion.ins.index')->with('rojo','Recibo no valido');
        } */ 
    }
}
