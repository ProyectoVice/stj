<?php

namespace App\Http\Controllers\modulos\academico;

use App\Calendario;
use App\Dependencia;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CalPregraGen;
use Carbon\Carbon;

class AcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tipo, Request $request)
    {
        Auth::user()->dependencia_id_depende;
          return view('modulos.academico.calendario.asuntos', ['tipo'=>$tipo,'dependencia'=>Dependencia::find(Auth::user()->dependencia_id_depende)->dependencia]);
    }

    public function cal_date($tipo, Request $request){
        $where=null;
        switch ($tipo){
            case 'academico':{$calendario=Calendario::where('es_general','=',1);}break;
            case 'escuela':{$calendario=Calendario::where('es_general','=',1)->orWhere('escuela_id','=',Auth::user()->dependencia_id_depende);}break;
        }
        return $calendario->get();
    }

    public function cal_tabla($tipo, Request $request){
        $where=null;
        switch ($tipo){
            case 'academico':{$where =[['es_general','=',1]];}break;
            case 'escuela':{$where =[['es_general','=',0],['escuela_id','=',Auth::user()->dependencia_id_depende]];}break;
        }
        $calendario=Calendario::where($where);

        return datatables()->of($calendario->get())->toJson();
    }

    public function cal_new($tipo, Request $request){
        $is_general=null;

        $proyecto=new Calendario;
        $proyecto->title=$request->get('title');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->color=$request->get('color');
        $proyecto->textColor=$request->get('textColor');
        $proyecto->responsable=$request->get('responsable');
        $proyecto->start=Carbon::createFromFormat('d/m/Y H:i',$request->get('start'));
        $proyecto->end=Carbon::createFromFormat('d/m/Y H:i',$request->get('end'));

        switch ($tipo){
            case 'academico':{$proyecto->es_general=1;}break;
            case 'escuela':{
                $proyecto->es_general=0;
                $proyecto->escuela_id=Auth::user()->dependencia_id_depende;
            }break;
            default: {return ['error en la operacion'];}break;
        }
        $proyecto->save();
        //return $request;
    }

    public function cal_del($tipo, Request $request){
        $id=$request->get('id');
        Calendario::destroy($id);
    }

    public function cal_act(Request $request, $id){
        $id=$request->get('id');
        $proyecto=Calendario::find($id);
        $proyecto->title=$request->get('title');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->color=$request->get('color');
        $proyecto->textColor=$request->get('textColor');
        $proyecto->responsable=$request->get('responsable');
        $proyecto->start=Carbon::createFromFormat('d/m/Y H:i',$request->get('start'));
        $proyecto->end=Carbon::createFromFormat('d/m/Y H:i',$request->get('end'));
        $proyecto->id=$request->get('id');
        $proyecto->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    //Calendario Inicio
    //public function cal_index($id)
    //{
    //    $proyecto=CalGen::find($id);
    //    return view('modulos.academico.calendario.asuntos',compact('proyecto'));    
    //}
    //Calendario Fin
}
