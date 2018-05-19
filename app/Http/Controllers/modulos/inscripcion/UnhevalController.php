<?php

namespace App\Http\Controllers\modulos\inscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Programa;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\MaestriaArea;
use App\Maestria;
class UnhevalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programa=Programa::get();  
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        return view('modulos.inscripcion_unheval.unheval',compact('programa','departamentos','provincias','distritos'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        
        $maestriaareas=MaestriaArea::pluck('maestria_area','id');
        $maestrias=Maestria::pluck('maestria','id');
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');

        switch ($id) {

            case '1': $ruta="modulos.inscripcion_unheval.programas.pregrado"; break;
            case '2': $ruta="modulos.inscripcion_unheval.programas.posgrado-maestria"; break;
            case '3': $ruta="modulos.inscripcion_unheval.programas.posgrado-doctorado"; break;
            
            default: break;
        }
        //return "g";
        return view($ruta,compact('maestriaareas','maestrias','departamentos','provincias','distritos'));
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

    public function maestria(Request $request, $id)
    {
      if ($request->ajax()) {
                $maestrias=Maestria::maestrias($id);
                return response()->json($maestrias);
            }
    }

    public function provincia(Request $request, $id)
    {
      if ($request->ajax()) {
                $provincias=Provincia::provincias($id);
                return response()->json($provincias);
            }
    }
    public function distrito(Request $request, $id)
    {
      if ($request->ajax()) {
                $distritos=Distrito::distritos($id);
                return response()->json($distritos);
            }
    }
}
