<?php

namespace App\Http\Controllers\modulos\diplomado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InscripcionNcgt;
Use App\ProgramaNcgt;
use App\User;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Pago;
use App\ControlPago;
use DB;
use Auth;


class DiplomadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $programa=ProgramaNcgt::pluck('descripcion', 'id');
        return view('modulos.inscripcion_unheval.diplomado.index', ['programa'=>$programa,'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    public function datatables(Request $request)
    {
        $tipo='';
        if ($request->tipo=='diplomado')
            $tipo = 11;
        if ($request->tipo=='procapt')
            $tipo = 9;
        if ($request->tipo=='promaster')
            $tipo = 10;
      $permiso = false;
        if(Auth::user()->hasRoles(['PersonalAdmision'])) {
            if (Auth::user()->hasRoles(['Administrador Diplomados'])&&$tipo==11)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador PROCATP'])&&$tipo==9)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador PROMASTER'])&&$tipo==10)
                $permiso=true;
        }
        if (!$permiso)
            $tipo='';

        $inscripcion=InscripcionNcgt::select('inscripcion_ncgts.id AS id','users.nombres', 'users.email', 'users.cel',
            'programa_ncgts.descripcion', 'programa_ncgts.numero_modulo', 
            'inscripcion_ncgts.cancelacion AS cancelacion', 
            DB::raw('CONCAT( users.apellido_paterno," ",users.apellido_materno) AS apellidos')
         )
            ->join('users','users.id','=','inscripcion_ncgts.user_id')
            ->join('programa_ncgts','programa_ncgts.id','=','inscripcion_ncgts.programa_ncgt_id')
            ->where('programa_ncgts.programa_id','=', $tipo);

        
        return datatables()->of($inscripcion->get())->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($descripcion,$dni, $n_comprobante, $f_comprobante)
    {
        
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $usuario=User::where("dni",$dni)->first();
        if($usuario!=""){
            return view('modulos.inscripcion_unheval.diplomado.crear',compact('departamentos','provincias','distritos', 'usuario', "descripcion",  "n_comprobante", "f_comprobante"));
        }
        $dni=$dni;
        return view('modulos.inscripcion_unheval.diplomado.crear',compact('departamentos','provincias','distritos',"descripcion", "dni", "n_comprobante", "f_comprobante"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        /*$inscripcion=InscripcionNcgt::join('programa_ncgts','programa_ncgts.id','=','inscripcion_ncgts.programa_ncgt_id')
                    ->where('programa_ncgt_id','=', $request->descripcion)->first();
        return  $inscripcion;*/
        //
        $usuario=User::Where("dni",'=',$request->dni)->first();
        //consultando el registro de la tabla pago
        $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();
       
        //creo un nuevo registro de la tabla Inscripcion
            if($usuario==""){
            $myInscrito=new User; //creo un nuevo registro de la tabla User              
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
            $myInscrito->cel=$request->get('cel');
            $myInscrito->save();
            $inscripcionp=new InscripcionNcgt;
            $inscripcionp->programa_ncgt_id=$request->get('descripcion');
            $inscripcionp->user_id=$myInscrito->id;
            $inscripcionp->save();
            //registrando en la tabla control de pago
            $control=new ControlPago;
            $control->inscripcion_ncgt_id=$inscripcionp->id;
            $control->pago_id=$pagos->id;
            $control->tipo='1';
            $control->save();
            $pagos->estado_recibo='1';
            $pagos->save();
            return redirect()->route('diplomado.ins.index')->with('verde','Se registró la inscripcion de \''.$myInscrito->nombres.'\' correctamente'); 
            }else{
            $inscripcionp=new InscripcionNcgt;
            $inscripcionp->programa_ncgt_id=$request->get('descripcion');
            $inscripcionp->user_id=$usuario->id;
            $inscripcionp->save();
            //registrando en la tabla control de pago
            $control=new ControlPago;
            $control->inscripcion_ncgt_id=$inscripcionp->id;
            $control->pago_id=$pagos->id;
            $control->tipo='1';
            $control->save();
            $pagos->estado_recibo='1';
            $pagos->save();
                }
        return redirect()->route('diplomado.ins.index')->with('verde','Se registró la inscripcion de \''.$usuario->nombres.'\' correctamente');
        
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
        $inscripcion=InscripcionNcgt::join('users','users.id','=','inscripcion_ncgts.user_id')
                    ->select('users.id AS id', 'users.dni','users.nombres', 'users.apellido_paterno','users.apellido_materno', 'users.f_nac', 'users.email', 'users.distrito_nac', 'users.domicilio', 'users.n_domicilio', 'users.cel')->find($id);
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $programa=ProgramaNcgt::pluck('descripcion', 'id');
        
        return view('modulos.inscripcion_unheval.diplomado.editar',compact('departamentos', 'provincias', 'distritos', 'programa','inscripcion'));
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
        $myInscrito=User::findOrFail($id);
        $myInscrito->nombres=$request->get('nombres');
        $myInscrito->apellido_paterno=$request->get('apellido_paterno');
        $myInscrito->apellido_materno=$request->get('apellido_materno');
        $myInscrito->f_nac=$request->get('f_nac');
        $myInscrito->dni=$request->get('dni');
        $myInscrito->email=$request->get('email');
        $myInscrito->distrito_nac=$request->get('distrito_nac');
        $myInscrito->domicilio=$request->get('domicilio');
        $myInscrito->n_domicilio=$request->get('n_domicilio');
        $myInscrito->cel=$request->get('cel');
        $myInscrito->save();


        return redirect()->route('diplomado.ins.index')->with('verde','Actualizó el registro de \''.$myInscrito->nombres.'\' correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myInscripcion= InscripcionNcgt::find($id);        
        InscripcionNcgt::destroy($id);
    }
    public function validar(Request $request)
    {        
        $programa=ProgramaNcgt::where('id','=',$request->descripcion)->first();

        $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();
        if ($pagos!='') {
           if ( $pagos->estado_recibo=="0"){
                if($pagos->importe==$programa->costo_matricula){
                    return redirect()->route("diplomado.ins.create",[$request->descripcion, $request->dni, $request->n_comprobante,$request->f_comprobante]);
                }else{
                    return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','El importe de pago del recibo no coincide con el costtro de matricula');
                }
            }else{
                return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','El recibo ingresado ya ha sido usado');
           }
        }else{            
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','Recibo no valido');
        }  
    }

    public function validar_pago(Request $request)
    {    
            
            $inscripcionp=InscripcionNcgt::find($request->id);
            //return $inscripcionp->programa_ncgt->costo_modulo_interno;

            //if($request->pago1=="1")


            $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();

                  if ($pagos!='') {
                    if ( $pagos->estado_recibo=="0") {
                        if($pagos->importe==$inscripcionp->programa_ncgt->costo_modulo_interno){
                           $control=new ControlPago;
                           $control->inscripcion_ncgt_id=$request->id;
                           $control->pago_id=$pagos->id;
                           $control->tipo='2';
                           $control->save();
                           $pagos->estado_recibo='1';
                           $pagos->save();
                           return redirect()->route('diplomado.ins.index')->with('verde','Recibo registrado');
                        }else{
                           return redirect()->route('diplomado.ins.index')->with('rojo','El importe de pago del recibo no coincide con el costo de modulo');
                           }
                     }else{
                           return redirect()->route('diplomado.ins.index')->with('naranja','El recibo ingresado ya ha sido usado');
                        }
                  }else{            
                           return redirect()->route('diplomado.ins.index')->with('rojo','Recibo no valido');
                  }
      }
}
