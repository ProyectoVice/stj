<?php

namespace App\Http\Controllers\modulos\admision;

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

        return view('modulos.Admision.inscripciones.index', ['tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    public function datatables(Request $request)
    {
        /*$inscripcion=Postulacion::get();
        return datatables()->of($inscripcion)->toJson();*/
        $tipo=['pregrado'=>1,'CEPREVAL'=>12,'posgrado'=>2, 'segunda_especialidad'=>5,'estudios_complementarios'=>6,
            'idiomas'=>7, 'estudios_distancia'=>8];
        $permiso = false;
        if(Auth::user()->hasRoles(['PersonalAdmision'])) {
            if (Auth::user()->hasRoles(['Administrador Admision'])&&$tipo[$request->tipo]==1)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador CEPREVAL'])&&$tipo[$request->tipo]==12)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador Posgrado'])&&$tipo[$request->tipo]==2)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador_Segunda_E'])&&$tipo[$request->tipo]==5)
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

            $inscripcion=Postulacion::select('postulacions.id AS id','users.nombres', 'proceso_seleccions.descripcion',
            'postulacion_modalidads.modalidad', 'escuelas.escuela', 'sedes.sede', 'postulacions.nota', 'postulacion_situacions.postulacion_situacion',
             DB::raw('CONCAT( users.apellido_paterno," ",users.apellido_materno) AS apellidos')
             )
            ->join('users','users.id','=','postulacions.users_id')
            ->join('proceso_seleccions','proceso_seleccions.id','=','postulacions.proceso_seleccion_id')
                ->join('postulacion_modalidads','postulacion_modalidads.id','=','proceso_seleccions.postulacion_modalidad_id')
                ->join('escuela_sedes','escuela_sedes.id','=','postulacions.escuela_sede_id')
                ->join('sedes','sedes.id','=','escuela_sedes.sede_id')
                ->join('escuelas','escuelas.id','=','escuela_sedes.escuela_id')
                ->join('postulacion_situacions','postulacion_situacions.id','=','postulacions.postulacion_situacion_id')
            ->where('proceso_seleccions.programa_id','=', $tipo[$request->tipo]);

            return DataTables::of($inscripcion->get())
                ->addColumn('accion', function ($obj){
                    $tipo=[1=>'pregrado',12=>'CEPREVAL',2=>'posgrado', 5=>'segunda_especialidad',6=>'estudios_complementarios',7=>'idiomas', 8=>'estudios_distancia'];
                    return htmlentities(sprintf("<div class='center action-buttons'>
                    <a href='/adminsion/inscripciones/mostrar/%s?tipo=%s' class='stj-acciones' title='Ver más'><i class='fa fa-eye'></i></a>
                    <a href='/adminsion/inscripciones/editar/%s?tipo=%s' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a>
                    <a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='%s'><i class='fa fa-trash'></i></a>
                    </div>",
                        $obj->id,$tipo[$obj->programa_id],
                        $obj->id,$tipo[$obj->programa_id],
                        $obj->id));
                })
                ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($dni)
    {      
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $postulaciont=PostulacionTipo::pluck('postulacion_tipo','id');
        $sede=Sede::pluck('sede','id');
        $escuela=Escuela::pluck('escuela','id');
        $modalidad=PostulacionModalidad::pluck('modalidad','id');
        $colegio=Colegio::pluck('colegio','id');
        $escuelasede=EscuelaSede::join('escuelas','escuelas.id',"=", "escuela_sedes.escuela_id")
            ->join('sedes','sedes.id',"=", "escuela_sedes.sede_id")->where('escuela_sedes.sede_id','1')
            ->pluck('escuelas.escuela', 'escuelas.id');//pluck('escuela_id', 'id');

        $usuario=User::where("dni",$dni)->first();
        if($usuario!=""){
            return view('modulos.Admision.inscripciones.crear',compact('departamentos','provincias','distritos', 'postulaciont', 'sede', 'escuela', 'modalidad', 'colegio', 'escuelasede', 'usuario'));
        }
        $dni=$dni;
        return view('modulos.Admision.inscripciones.crear',compact('departamentos','provincias','distritos', 'postulaciont', 'sede', 'escuela', 'modalidad', 'colegio', 'escuelasede', "dni"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //inicializamos las ruta de los archivos
        
        //guardar datos a la tabla user
        //User :: create($request->all());
        $usuario=User::Where("dni",'=',$request->dni)->first();
        //$request->get('dni')
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
        $myInscrito->tipo_sangre=$request->get('tipo_sangre');        
        $myInscrito->save();
        //guardamos escuela_modalidad
        /*$escuelam=new EscuelaModalidad;
        $escuelam->escuela_sede_id=     //28

        //Guardamos el ID del usuario registrado
        $ultimoID=$myInscrito->id;
        //registramos la inscripcion del usuario 
        $inscripcion=new Postulacion;
        $inscripcion->anio='2018';
        $inscripcion->users_id=$ultimoID;*/

       
        return redirect()->route('adminsion.ins.index')->with('verde','Se registró la inscripcion de\''.$myInscrito->nombres.'\' correctamente');  
        }else{
            return"aaaaaaaaaa";
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
                                    ->join('sedes','sedes.id',"=", "escuela_sedes.sede_id")->where('escuela_sedes.sede_id',$id)
                                    ->get();
    }
     public function validar(Request $request)
    {

        $cajas=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();
        if ($cajas!='') {
           if ( $cajas->estado_recibo!="0") {
                return redirect()->route('adminsion.ins.index')->with('rojo','El recibo ingresado ya ha sido usado');
           }
            return redirect()->route("adminsion.ins.create",$request->dni);
        }else{            
            return redirect()->route('adminsion.ins.index')->with('rojo','Recibo no valido');
        }  
    }
}
