<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Rol;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('modulos.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function datatables()
    {
        $users=User::select('id', 'nombres', 'dni', 'cel', DB::raw('CONCAT( apellido_paterno," ",apellido_materno) AS apellidos'))->get();
        //return Datatables::of($proyecto)->make(true);
        return datatables()->of($users)->toJson();
    }

    public function create($dni)
    {
        $roles=Rol::pluck('rol','id');
       // return $roles;
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');
        $usuario=User::where("dni",$dni)->first();
        return view('modulos.users.crear',compact('departamentos','provincias','distritos', 'programa', 'usuario', 'roles', "dni"));
        
      // return redirect()->route('usuario.nue.index')->with('rojo','El Usurario ya se encuentra registra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requests
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $myInscrito->cel=$request->get('cel');
        $myInscrito->save();
        return redirect()->route('usuario.nue.index')->with('verde','Se registró el usuario \''.$myInscrito->nombres.'\' correctamente');
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
        $roles=Rol::pluck('rol','id');
        $departamentos=Departamento::pluck('departamento','id');
        $provincias=Provincia::pluck('provincia','id');
        $distritos=Distrito::pluck('distrito','id');        
        $usuario=User::find($id);       
        return view('modulos.users.edit',compact('departamentos', 'provincias', 'distritos', 'usuario', 'roles'));
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
        //return $request->all();
        $myInscrito=User::findOrFail($id);
        $myInscrito->nombres=$request->get('nombres');
        $myInscrito->apellido_paterno=$request->get('apellido_paterno');
        $myInscrito->apellido_materno=$request->get('apellido_materno');
        $myInscrito->f_nac=$request->get('f_nac');
        $myInscrito->dni=$request->get('dni');
        //$myInscrito->password=bcrypt($request->get('dni'));
        $myInscrito->email=$request->get('email');
        $myInscrito->distrito_nac=$request->get('distrito_nac');
        $myInscrito->domicilio=$request->get('domicilio');
        $myInscrito->n_domicilio=$request->get('n_domicilio');
        $myInscrito->cel=$request->get('cel');
        $myInscrito->save();
        $myInscrito->roles()->sync($request->roles);
        return redirect()->route('usuario.nue.index')->with('verde','Actualizó los datos del usuario \''.$myInscrito->nombres.'\' correctamente');
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
        
        $usuario=User::where('dni','=',$request->dni)->first();
        if ($usuario!='') {
            return redirect()->route('usuario.nue.index')->with('rojo','El Usurario ya se encuentra registrado');
        }else{            
             return redirect()->route("usuario.nue.create",$request->dni);
        }  
    }
}
