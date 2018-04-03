<?php

namespace App\Http\Controllers\modulos\admision;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Postulacion;

class AdmisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('personaladmision');
        //$this->middleware('Administrador Admision');
    }
    public function index()
    {        
        $inscripcion=Postulacion::get();
        return view('modulos.Admision.inscripciones.index',compact('inscripcion'));    
    }

    public function datatables()
    {
        $proyecto=Postulacion::get();

        //join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
        //                      ->join('rsu_responsabilidads AS r','r.id','=','p.rsu_responsabilidad_id')
          //                    ->select('rsu_proyectos.*','r.rsu_responsabilidad AS rp')->get();
        //return Datatables::of($proyecto)->make(true);
        return datatables()->of($proyecto)->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        return view('modulos.Admision.inscripciones.crear',compact('departamentos','provincias','distritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
        //inicializamos las ruta de los archivos
        
        //guardar datos a la tabla user
        //User :: create($request->all());
        $myInscrito=new User;        
        $myInscrito->nombres=$request->get('nombres');
        $myInscrito->apellido_paterno=$request->get('apellido_paterno');
        $myInscrito->apellido_materno=$request->get('apellido_materno');
        $myInscrito->f_nac=$request->get('f_nac');
        $myInscrito->dni=$request->get('dni');
        $myInscrito->email=$request->get('email');
        $myInscrito->distrito_nac=$request->get('distrito_nac');
        $myInscrito->domicilio=$request->get('domicilio');
        $myInscrito->n_domicilio=$request->get('n_domicilio');
        $myInscrito->tel=$request->get('tel');
        $myInscrito->cel=$request->get('cel');
        $myInscrito->tipo_sangre=$request->get('tipo_sangre');        
        $myInscrito->save();

       
        return redirect('inscripcion-general')->with('verde','Se registró el proyecto \''.$myInscrito->nombres.'\' correctamente');
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
     public function validar(Request $request)
    {
        return $request->all();

        $cajas=Caja::cajas($id);
        $cajas->num_comprobante=$request->get('n_comprobante');

    }
}
