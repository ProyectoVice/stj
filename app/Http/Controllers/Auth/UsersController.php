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
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        
        return view('modulos.users.index');
    }
     public function datatables()
    {
        $users=User::where('id','<>','1')->select('id', 'nombres', 'dni', 'cel', DB::raw('CONCAT( apellido_paterno," ",apellido_materno) AS apellidos'))->get();
        //return Datatables::of($proyecto)->make(true);
        return datatables()->of($users)->toJson();
    }


    public function show($id)
    {                               //Administrador General  
        $roles=Rol::whereNotIn('rol', ['ZenoSama','Administrador General'])->pluck('rol','id');
        $usuario=User::find($id);
        if(Auth::user()->foto==null || Auth::user()->foto!='user.png'){
            $RutaDeMiFotoPerfil=Storage::url(Auth::user()->foto);
        } else{
            $RutaDeMiFotoPerfil='/plantilla/images/avatars/'.Auth::user()->foto;
        } 
        return view('modulos.users.detalle', compact('usuario', 'roles','RutaDeMiFotoPerfil'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        //return $request->all();
        $myInscrito=User::findOrFail($id);
        $myInscrito->nombres=$request->get('nombres');
        $myInscrito->apellido_paterno=$request->get('apellido_paterno');
        $myInscrito->apellido_materno=$request->get('apellido_materno');
        $myInscrito->f_nac=$request->get('f_nac');
        $myInscrito->dni=$request->get('dni');
        $myInscrito->email=$request->get('email');
        $myInscrito->domicilio=$request->get('domicilio');
        $myInscrito->n_domicilio=$request->get('n_domicilio');
        $myInscrito->tel=$request->get('tel');
        $myInscrito->cel=$request->get('cel');
        if($request->get('pasword')){
            $myInscrito->password=$request->get('pasword');
        }
        $myInscrito->save();
        $myInscrito->roles()->sync($request->roles);
        return redirect()->route('usuario.nue.index')->with('verde','Actualizó los datos del usuario \''.$myInscrito->nombres.'\' correctamente');
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
