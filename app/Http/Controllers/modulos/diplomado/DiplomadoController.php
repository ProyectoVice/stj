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
use Yajra\DataTables\Facades\DataTables;


class DiplomadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo=['diplomado'=>11,'procapt'=>9,'promaster'=>10];
        $programa=ProgramaNcgt::where('programa_id', '=', $tipo[$request->tipo])->pluck('descripcion', 'id');
        return view('modulos.inscripcion_unheval.diplomado.index', ['programa'=>$programa,
            'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    public function datatables(Request $request)
    {
        $tipo=['diplomado'=>11,'procapt'=>9,'promaster'=>10];
        $permiso = false;
        if(Auth::user()->hasRoles(['PersonalAdmision'])) {
            if (Auth::user()->hasRoles(['Administrador Diplomados'])&&$tipo[$request->tipo]==11)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador PROCATP'])&&$tipo[$request->tipo]==9)
                $permiso=true;
            if (Auth::user()->hasRoles(['Administrador PROMASTER'])&&$tipo[$request->tipo]==10)
                $permiso=true;
        }
        if (!$permiso)
            $tipo[$request->tipo]='';

        $inscripcion=InscripcionNcgt::select('inscripcion_ncgts.id AS id','users.nombres', 'users.email', 'users.cel',
            'programa_ncgts.descripcion', 'programa_ncgts.numero_modulo', 'programa_ncgts.costo_modulo', 'es_pago_total',
            'descuento_interno', 'descuento_modulo_total', 'programa_ncgts.programa_id',
            DB::raw('IFNULL((SELECT Sum(p.importe) FROM control_pagos AS cp INNER JOIN pagos AS p ON cp.pago_id = p.id WHERE cp.inscripcion_ncgt_id = inscripcion_ncgts.id AND cp.tipo = 2),0) as pagado'),
            'inscripcion_ncgts.es_interno',
            DB::raw('CONCAT( users.apellido_paterno," ",users.apellido_materno) AS apellidos')
         )
            ->join('users','users.id','=','inscripcion_ncgts.user_id')
            ->join('programa_ncgts','programa_ncgts.id','=','inscripcion_ncgts.programa_ncgt_id')
            ->where('programa_ncgts.programa_id','=', $tipo[$request->tipo]);
        
        return DataTables::of($inscripcion->get())
            ->addColumn('total_pago', function ($obj){
                $total=$obj->numero_modulo*$obj->costo_modulo-$obj->es_pago_total*$obj->descuento_modulo_total-$obj->es_interno*$obj->descuento_interno*$obj->numero_modulo;
                return $total.' / '.$obj->pagado;
            })
            ->editColumn('es_interno', function ($obj){
                return ($obj->es_interno==1)?"Interno":($obj->programa_id==9)?"Interno":"Externo";
            })
            ->addColumn('cancelacion', function ($obj){
                $total=$obj->numero_modulo*$obj->costo_modulo-$obj->es_pago_total*$obj->descuento_modulo_total-$obj->es_interno*$obj->descuento_interno*$obj->numero_modulo;
                return $total - $obj->pagado;
            })
            ->addColumn('accion', function ($obj){
                $tipo=[11=>'diplomado',9=>'procapt',10=>'promaster'];
                return htmlentities(sprintf("<div class='center action-buttons'>
                    <a href='/diplomado/inscripciones/mostrar/%s?tipo=%s' class='stj-acciones' title='Ver más'><i class='fa fa-eye'></i></a>
                    <a href='#nuevo2' class='stj-acciones enviarId1 descuentos %s' title='Asignar descuento' data-toggle='modal' data-id='%s' data-interno='%s' data-total='%s'><i class='fa fa-plus'></i></a>
                    <a href='#nuevo1' class='stj-acciones enviarId' title='Registrar pago modulo' data-toggle='modal'data-id='%s'><i class='fa fa-check-square-o'></i></a>
                    <a href='/diplomado/inscripciones/editar/%s?tipo=%s' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a>
                    <a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='%s'><i class='fa fa-trash'></i></a>
                    </div>",
                    $obj->id,$tipo[$obj->programa_id],
                    ($obj->programa_id==9||$obj->programa_id==10)?'hide':'',$obj->id,$obj->es_interno,$obj->es_pago_total,
                    $obj->id,
                    $obj->id,$tipo[$obj->programa_id],
                    $obj->id));
            })
            ->removeColumn('costo_modulo')
            ->removeColumn('es_pago_total')
            ->removeColumn('descuento_interno')
            ->removeColumn('descuento_modulo_total')
            ->removeColumn('pagado')
            ->removeColumn('programa_id')
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($descripcion,$dni, $n_comprobante, $f_comprobante, $tipo)
    {
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $usuario=User::where("dni",$dni)->first();
        if($usuario!=""){
            return view('modulos.inscripcion_unheval.diplomado.crear', ['departamentos'=>$departamentos,'provincias'=> $provincias,'distritos'=> $distritos, 'usuario'=> $usuario,
                'descripcion'=> $descripcion, 'n_comprobante'=> $n_comprobante, 'f_comprobante'=> $f_comprobante, 'tipo'=>$tipo]);
            //return view('modulos.inscripcion_unheval.diplomado.crear',compact('departamentos','provincias','distritos', 'usuario', "descripcion",  "n_comprobante", "f_comprobante"));
        }
        $dni=$dni;
        return view('modulos.inscripcion_unheval.diplomado.crear',['departamentos'=>$departamentos,'provincias'=> $provincias,'distritos'=> $distritos, 'usuario'=> $usuario,
            'descripcion'=> $descripcion, 'n_comprobante'=> $n_comprobante, 'f_comprobante'=> $f_comprobante, 'tipo'=>$tipo, 'dni'=>$dni]);
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
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Se registró la inscripcion de \''.$myInscrito->nombres.'\' correctamente');
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
        return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Se registró la inscripcion de \''.$usuario->nombres.'\' correctamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
       $control=ControlPago::select('pagos.detalle','pagos.importe', 'control_pagos.tipo')
                    ->join('inscripcion_ncgts','inscripcion_ncgts.id','=','control_pagos.inscripcion_ncgt_id')
                    ->join('pagos', 'control_pagos.pago_id', '=','pagos.id')
                    ->where('inscripcion_ncgts.id', '=',$id )->get();
        $inscripcion=InscripcionNcgt::find($id);
        return view('modulos.inscripcion_unheval.diplomado.detalle', ['control'=> $control, 'inscripcion'=> $inscripcion,'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $inscripcion=InscripcionNcgt::select('users.id AS id', 'users.dni','users.nombres', 'users.apellido_paterno',
                'users.apellido_materno', 'users.f_nac', 'users.email', 'users.distrito_nac',
                'users.domicilio', 'users.n_domicilio', 'users.cel')
                ->join('users','users.id','=','inscripcion_ncgts.user_id')->find($id);
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');

        return view('modulos.inscripcion_unheval.diplomado.editar', ['departamentos'=>$departamentos,'provincias'=> $provincias,'distritos'=> $distritos, 'inscripcion'=> $inscripcion,
            'tipo'=>(isset($request->tipo)?$request->tipo:'null')]);
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
        /*if($request->estado=='suspendido'){
            $myInscrito->estado='0';
            $myInscrito->save();
        }*/
        $myInscrito->save();


        return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Actualizó el registro de \''.$myInscrito->nombres.'\' correctamente');
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
        //return $inscripcionp->programa_ncgt->costo_modulo_interno;

        $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();
        $usuario=User::where('dni','=',$request->dni)->get();

        /*if($usuario!=''and $request->tipo=='procapt'||$request->tipo=='promaster') {

        }*/
            if ($pagos != '') {
                if ($pagos->estado_recibo == "0") {
                    if ($pagos->importe == $programa->costo_matricula) {
                        return $this->create($request->descripcion, $request->dni, $request->n_comprobante, $request->f_comprobante, $request->tipo);
                    } else {
                        return redirect()->route('diplomado.ins.index', ['tipo' => $request->tipo])->with('rojo', 'El importe de pago del recibo no coincide con el costtro de matricula');
                    }
                } else {
                    return redirect()->route('diplomado.ins.index', ['tipo' => $request->tipo])->with('rojo', 'El recibo ingresado ya ha sido usado');
                }
            } else {
                return redirect()->route('diplomado.ins.index', ['tipo' => $request->tipo])->with('rojo', 'Recibo no valido');
            }
    }

    public function validar_pago(Request $request)
    {    
            $inscripcionp=InscripcionNcgt::find($request->id);

            $pagos=Pago::where('num_comprobante','=',$request->n_comprobante)
                    ->where('fecha_comprobante','=',$request->f_comprobante)->first();

                  if ($pagos!='') {
                    if ( $pagos->estado_recibo=="0") {
                           $control=new ControlPago;
                           $control->inscripcion_ncgt_id=$request->id;
                           $control->pago_id=$pagos->id;
                           $control->tipo='2';
                           $control->save();
                           $pagos->estado_recibo='1';
                           $pagos->save();
                           return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Recibo registrado');
                     }else{
                           return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('naranja','El recibo ingresado ya ha sido usado');
                        }
                  }else{            
                           return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','Recibo no valido');
                  }
      }

    public function validar_descuento(Request $request)
    {
        $inscripcionp=InscripcionNcgt::find($request->id1);
        if (!($request->descuento and $request->descuento1) ) {
            $inscripcionp->es_interno=      ($request->descuento)?1:0;
            $inscripcionp->es_pago_total=   ($request->descuento1)?1:0;
            $inscripcionp->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Descuento asignado de los modulos');
        }
        /*if ($request->descuento && $inscripcionp->es_interno!=1&&$inscripcionp->es_pago_total!=1) {
            $inscripcionp->es_interno=1;
            $inscripcionp->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Descuento asignado de los modulos');
        } elseif ($request->descuento1&& $inscripcionp->es_interno!=1) {
            $inscripcionp->es_pago_total=1;
            $inscripcionp->save();
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('verde','Descuento asignado por pago total');
        }*/
        else {
            return redirect()->route('diplomado.ins.index',['tipo'=>$request->tipo])->with('rojo','Ya tiene asignado un descuento');
        }
    }
}
