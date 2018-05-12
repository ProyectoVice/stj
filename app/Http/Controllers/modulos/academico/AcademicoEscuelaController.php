<?php

namespace App\Http\Controllers\modulos\academico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicoEscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.academico.calendario.cal_escuela');
    }
    public function cal_date(){
        return CalPregraEsc::get();
    }

    public function cal_tabla(){
        return datatables()->of(CalPregraEsc::get())->toJson();
    }

    public function cal_new(Request $request){
        
        $proyecto=new CalPregraEsc;
        $proyecto->title=$request->get('title');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->color=$request->get('color');
        $proyecto->textColor=$request->get('textColor');
        $proyecto->responsable=$request->get('responsable');
        $proyecto->start=Carbon::createFromFormat('d/m/Y H:i',$request->get('start'));
        $proyecto->end=Carbon::createFromFormat('d/m/Y H:i',$request->get('end'));
        $proyecto->save();
        //return $request;
    }

    public function cal_del(Request $request){
        $id=$request->get('id');
        CalPregraEsc::destroy($id);
    }

    public function cal_act(Request $request, $act){
        $id=$request->get('id');
        $proyecto=CalPregraEsc::find($act);
        $proyecto->title=$request->get('title');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->color=$request->get('color');
        $proyecto->textColor=$request->get('textColor');
        $proyecto->responsable=$request->get('responsable');
        $proyecto->start=Carbon::createFromFormat('d/m/Y H:i',$request->get('start'));
        $proyecto->end=Carbon::createFromFormat('d/m/Y H:i',$request->get('end'));
        $proyecto->cal_pregra_gen_id=$request->get('id');
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
}
