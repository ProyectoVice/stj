<?php

namespace App\Http\Controllers\modulos\admision;

use App\PostulacionPreparacion;
use App\ProcesoSeleccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Postulacion;
use App\Pago;
Use App\Sede;
Use App\Escuela;
Use App\PostulacionModalidad;
Use App\Colegio;
Use App\EscuelaSede;
use DB;
use Auth;
use Yajra\DataTables\Facades\DataTables;

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
    public function index(Request $request)
    {
        $tipo=['pregrado'=>1,'CEPREVAL'=>12,'posgrado_maestria'=>2, 'posgrado_doctorado'=>3, 'posgrado_posdoctorado'=>4,
            'segunda_especialidad_educacion'=>5, 'segunda_especialidad_enfermeria'=>13,'estudios_complementarios'=>6,
            'idiomas'=>7, 'estudios_distancia'=>8];
        $proceso=(in_array($tipo[$request->tipo],[1,12]))?ProcesoSeleccion::getProgramaforSelect($tipo[$request->tipo]):ProcesoSeleccion::getProgramaforSelect1($tipo[$request->tipo]);
        return view('modulos.Admision.inscripciones.index', ['proceso'=>$proceso,'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    public function datatables(Request $request)
    {
        /*$inscripcion=Postulacion::get();
        return datatables()->of($inscripcion)->toJson();*/
        $tipo=['pregrado'=>1,'CEPREVAL'=>12,'posgrado_maestria'=>2, 'posgrado_doctorado'=>3, 'posgrado_posdoctorado'=>4,
            'segunda_especialidad_educacion'=>5, 'segunda_especialidad_enfermeria'=>13,'estudios_complementarios'=>6,
            'idiomas'=>7, 'estudios_distancia'=>8];
        $permiso = false;
        if(Auth::user()->hasRoles(['PersonalAdmision'])) {
            if (Auth::user()->hasRoles(['Administrador Admision'])&&$tipo[$request->tipo]==1)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador CEPREVAL'])&&$tipo[$request->tipo]==12)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador Posgrado'])&&$tipo[$request->tipo]==2)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador Posgrado'])&&$tipo[$request->tipo]==3)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador Posgrado'])&&$tipo[$request->tipo]==4)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador_Segunda_E'])&&$tipo[$request->tipo]==5)
                $permiso=true;
            if (Auth::user()->hasRoles(['AdministradorSegundaEEnf'])&&$tipo[$request->tipo]==13)
                $permiso=true;
            if (Auth::user()->hasRoles(['AdministradorEstudiosCompEdu'])&&$tipo[$request->tipo]==6)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador idiomas'])&&$tipo[$request->tipo]==7)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador Estudios a Distancia'])&&$tipo[$request->tipo]==8)
                $permiso=true;
        }
        if (!$permiso)
            $tipo[$request->tipo]='';

        $inscripcion=Postulacion::select('postulacions.id AS id','users.nombres', 'sedes.sede', 'postulacions.nota',
            'postulacion_situacions.postulacion_situacion',
            DB::raw('CONCAT( users.apellido_paterno," ",users.apellido_materno) AS apellidos'),
            DB::raw('CONCAT( ifnull(proceso_seleccions.descripcion,""),"/",ifnull(postulacion_modalidads.modalidad,"")) AS seleccion'),
            DB::raw('CONCAT( ifnull(escuelas.escuela,""),"",ifnull(maestrias.maestria,"")) AS escuela'),
            'proceso_seleccions.programa_id'
        )
            ->join('users','users.id','=','postulacions.users_id')
            ->join('proceso_seleccions','proceso_seleccions.id','=','postulacions.proceso_seleccion_id')
            ->leftJoin('sedes','sedes.id','=','postulacions.sede_id')
            ->leftJoin('escuelas','escuelas.id','=','postulacions.escuela_id')
            ->leftJoin('postulacion_modalidads','postulacion_modalidads.id','=','proceso_seleccions.postulacion_modalidad_id')
            ->leftJoin('postulacion_situacions','postulacion_situacions.id','=','postulacions.postulacion_situacion_id')
            ->leftJoin('maestrias','maestrias.id','=','postulacions.maestria_id')
            ->where('proceso_seleccions.programa_id','=', $tipo[$request->tipo]);

        return DataTables::of($inscripcion->get())
            ->addColumn('accion', function ($obj){
                $tipo=[1=>'pregrado',12=>'CEPREVAL',2=>'posgrado_maestria', 3=>'posgrado_doctorado', 4=>'posgrado_posdoctorado',
                    5=>'segunda_especialidad_educacion', 13=>'segunda_especialidad_enfermeria',6=>'estudios_complementarios',7=>'idiomas', 8=>'estudios_distancia'];
                return sprintf("<div class='center action-buttons'>
                    <a href='/adminsion/inscripciones/mostrar/%s?tipo=%s' class='stj-acciones' title='Ver más'><i class='fa fa-eye'></i></a>
                    <a href='/adminsion/inscripciones/editar/%s?tipo=%s' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a>
                    <a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='%s'><i class='fa fa-trash'></i></a>
                    </div>",
                    $obj->id,$tipo[$obj->programa_id],
                    $obj->id,$tipo[$obj->programa_id],
                    $obj->id);
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create($proceso,$dni, $n_comprobante, $f_comprobante, $tipo)
    {      
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $sede=Sede::pluck('sede','id');
        $escuela=Escuela::pluck('escuela','id');
        $colegio=Colegio::pluck('colegio','id');
        $preparacion=PostulacionPreparacion::pluck('postulacion_preparacion','id');
        $escuelasede=EscuelaSede::join('escuelas','escuelas.id',"=", "escuela_sedes.escuela_id")
            ->join('sedes','sedes.id',"=", "escuela_sedes.sede_id")->where('escuela_sedes.sede_id','1')
            ->pluck('escuelas.escuela', 'escuelas.id');//pluck('escuela_id', 'id');

        $usuario=User::where("dni",$dni)->first();

        if($usuario!=""){
            return view('modulos.Admision.inscripciones.crear', ['departamentos'=>$departamentos,'provincias'=> $provincias,'distritos'=> $distritos,
                'sede'=> $sede, 'escuela'=> $escuela, 'escuelasede'=> $escuelasede,  'colegio'=> $colegio, 'preparacion'=> $preparacion,
                'usuario'=> $usuario, 'proceso'=> $proceso, 'n_comprobante'=> $n_comprobante, 'f_comprobante'=> $f_comprobante, 'tipo'=>$tipo]);
        }
        $dni=$dni;
        return view('modulos.Admision.inscripciones.crear', ['departamentos'=>$departamentos,'provincias'=> $provincias,'distritos'=> $distritos,
            'sede'=> $sede, 'escuela'=> $escuela, 'escuelasede'=> $escuelasede,  'colegio'=> $colegio, 'preparacion'=> $preparacion,
            'usuario'=> $usuario, 'proceso'=> $proceso,'n_comprobante'=> $n_comprobante, 'f_comprobante'=> $f_comprobante, 'tipo'=>$tipo, 'dni'=>$dni]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario=User::Where("dni",'=',$request->dni)->first();
        if($usuario==""){
        $myInscrito=new User;        
        $myInscrito->nombres=$request->get('nombres');
        $myInscrito->apellido_paterno=$request->get('apellido_paterno');
        $myInscrito->apellido_materno=$request->get('apellido_materno');
        $myInscrito->f_nac=$request->get('f_nac');
        $myInscrito->dni=$request->get('dni');
        $myInscrito->password=bcrypt($request->get('dni'));
        $myInscrito->email=$request->get('email');
        $myInscrito->distrito_nac=$request->get('distrito_nac');
        $myInscrito->domicilio=$request->get('domicilio');
        $myInscrito->n_domicilio=$request->get('n_domicilio');
        $myInscrito->tel=$request->get('tel');
        $myInscrito->cel=$request->get('cel');
        $myInscrito->colegio_id_v=$request->get('colegiov');
        $myInscrito->colegio_id_iv=$request->get('colegioiv');
        $myInscrito->tipo_sangre=$request->get('tipo_sangre');
        $myInscrito->save();
        $inscripcion=new Postulacion;
        $inscripcion->users_id=$myInscrito->id;
        $inscripcion->proceso_seleccion_id=$request->get('proceso');
        $inscripcion->sede_id=$request->get('sede');
        $inscripcion->escuela_id=$request->get('escuelasede');
        $inscripcion->postulacion_preparacion_id=$request->get('preparacion');
        $inscripcion->postulacion_tipo='1';
        $inscripcion->save();


        return redirect()->route('adminsion.ins.index',['tipo'=>$request->tipo])->with('verde','Se registró la inscripcion de\''.$myInscrito->nombres.'\' correctamente');
        }else{
            $inscripcion=new Postulacion;
            $inscripcion->users_id=$usuario->id;
            $inscripcion->proceso_seleccion_id=$request->get('proceso');
            $inscripcion->sede_id=$request->get('sede');
            $inscripcion->escuela_id=$request->get('escuelasede');
            $inscripcion->postulacion_preparacion_id=$request->get('preparacion');
            $inscripcion->postulacion_tipo='1';
            $inscripcion->save();
            return redirect()->route('adminsion.ins.index',['tipo'=>$request->tipo])->with('verde','Se registró la inscripcion de\''.$usuario->nombres.'\' correctamente');
        }        
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
    public function listaescuela($id)
    {
        return $escuelasede=EscuelaSede::select('escuelas.escuela AS escuela', 'escuelas.id AS id')
                                    ->join('escuelas','escuelas.id',"=", "escuela_sedes.escuela_id")
                                    ->join('sedes','sedes.id',"=", "escuela_sedes.sede_id")
                                    ->where('escuela_sedes.sede_id',$id)->get();
    }
     public function validar(Request $request)
    {
        $proceso=ProcesoSeleccion::where('id','=',$request->proceso)->first();
        $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
            ->where('fecha_comprobante','=',$request->f_comprobante)->first();
        if ($pagos!='') {
            if ( $pagos->estado_recibo=="0"){
                    return $this->create($request->proceso,$request->dni, $request->n_comprobante,$request->f_comprobante, $request->tipo);
            }else{
                return redirect()->route('adminsion.ins.index',['tipo'=>$request->tipo])->with('rojo','El recibo ingresado ya ha sido usado');
            }
        }else{
            return redirect()->route('adminsion.ins.index',['tipo'=>$request->tipo])->with('rojo','Recibo no valido');
        }
    }
}
