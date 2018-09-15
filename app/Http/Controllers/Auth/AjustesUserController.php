<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Input;
use Auth;
use App\User;
use App\RolUser;
use Illuminate\Support\Facades\Storage;

class AjustesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->foto==null || Auth::user()->foto!='user.png'){
            $RutaDeMiFotoPerfil=Storage::url(Auth::user()->foto);
        } else{
            $RutaDeMiFotoPerfil='/plantilla/images/avatars/'.Auth::user()->foto;
        }

       $misRoles=RolUser::where('user_id',Auth::user()->id)->get();
       $misDatos=Auth::user();
       return view('ajustes',compact('RutaDeMiFotoPerfil','misRoles','misDatos'));
    }

    public function update(Request $request)
    {
        $user=User::find(Auth::user()->id);
        #$user->nombres=$request->get('nombres');
        #$user->apellido_paterno=$request->get('apellido_paterno');
        #$user->apellido_materno=$request->get('apellido_materno');
        //return $request->all();
        $user->email=$request->get('email');
        $user->domicilio=$request->get('domicilio');
        $user->n_domicilio=$request->get('n_domicilio');
        #$user->dni=$request->get('dni');
        if($request->get('pasword')){
            $user->password=$request->get('pasword');
        }
        //$user->save();
        if($user->save()){
            return back()->with('verde','Se actulizaron sus datos');
        }else{
            return back()->with('rojo','Los datos ingresados no son válidos');            
        }
    }

    public function img_update(Request $request)
    {
        //return Auth::user()->id;
        $user= User::find(Auth::user()->id);
        //si se cargaron archivos que guarden las imagenes en el servidor
        if($request->file('foto-avatar')){
            //Eliminamos la imagen que existía
            Storage::delete($user->foto);
            $fileFoto= $request->file('foto-avatar')->store('public/avatars');
            $user->foto=$fileFoto;
            $user->save();
            return back()->with('verde','Se actualizó su foto de perfil');
        }
        return back()->with('rojo','error joven');
    }
}
