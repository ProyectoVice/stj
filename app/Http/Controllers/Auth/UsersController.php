<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Distrito;
use App\Provincia;
use App\Departamento;
use App\Rol;
use App\Docente;
use App\Dependencia;
use DB;
use Auth;
use GuzzleHttp\Client;

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
        if($request->get('password')){
            $myInscrito->password=$request->get('password');
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
    public function actualizar()
    {         
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://egresados.unheval.edu.pe',
            // You can set any number of default request options.
            'timeout'  => 10.0,
        ]);
        //return $response = $client->get('vra/login/2012110690/NMA3618');
        $response = $client->request('GET', 'vra/docente');
        $json=json_decode($response->getBody());
        
        foreach ($json as $key => $value) {
            $user_docente=User::where('dni',$value->dni)->first();
            if($user_docente){
               //$user_docente->password= bcrypt($value->dni);
               $user_docente->nombres=$value->nombres;
               $user_docente->apellido_paterno=$value->paterno;
               $user_docente->apellido_materno=$value->materno;
               if($value->nacimiento!=null){$user_docente->f_nac=date("Y-m-d", strtotime($value->nacimiento));}
               if($value->correo!=null || $value->correo!='Res. Nº 1042-2011-UNHEVAL-CU'){$user_docente->email=$value->correo;}
               if($value->celular!=null){$user_docente->cel=$value->celular;}
               if($value->situacion=='ACTIVO'){$user_docente->estado_login='1';}else{$user_docente->estado_login='0';}
               $user_docente->save();  

               $escuela=Dependencia::where('dependencia',$value->Desc_EAP)->first();
               if($escuela){
                //actualizar escuela
                $id_last_escuela=$escuela->id;
               }else{
                    //registar nueva Facultad
                    $facultad=Dependencia::where('dependencia',$value->facultad)->first();
                    if(!$facultad){
                        $new_facultad=new Dependencia;
                        $new_facultad->dependencia=$value->facultad;
                        $new_facultad->dependencia_id='1';
                        $new_facultad->es_facultad='1';
                        $new_facultad->save();
                        $id_last_facultad=Dependencia::orderBy('id','desc')->first()->id;
                    }else{
                        $id_last_facultad=$facultad->id;
                    }
                    //registrar nueva Escuela
                    $new_escuela=new Dependencia;
                    $new_escuela->dependencia=$value->Desc_EAP;
                    $new_escuela->dependencia_id=$id_last_facultad;
                    $new_escuela->es_escuela='1';
                    $new_escuela->save();
                    $id_last_escuela=Dependencia::orderBy('id','desc')->first()->id;                
                }
                $docente=Docente::find($user_docente->id);
                if(!$docente){ $docente=new Docente;}
                $docente->escuela_id=$id_last_escuela;
                $docente->save();
            }else{
                //registrar nuevo usuario
                $user_docente=new User;
                $user_docente->dni=$value->dni;
                $user_docente->password= bcrypt($value->dni);
                $user_docente->nombres=$value->nombres;
                $user_docente->apellido_paterno=$value->paterno;
                $user_docente->apellido_materno=$value->materno;
                if($value->nacimiento!=null){$user_docente->f_nac=date("Y-m-d", strtotime($value->nacimiento));}
                if($value->correo!=null || $value->correo!='Res. Nº 1042-2011-UNHEVAL-CU'){$user_docente->email=$value->correo;}
                if($value->celular!=null){$user_docente->cel=$value->celular;}
                if($value->situacion=='ACTIVO'){$user_docente->estado_login='1';}else{$user_docente->estado_login='0';}
                $user_docente->save();  
                $id_last_user=User::orderBy('id','desc')->first()->id;

                $escuela=Dependencia::where('dependencia',$value->Desc_EAP)->first();
                if($escuela){
                //actualizar escuela
                $id_last_escuela=$escuela->id;
                }else{
                    //registar nueva Facultad
                    $facultad=Dependencia::where('dependencia',$value->facultad)->first();
                    if(!$facultad){
                        $new_facultad=new Dependencia;
                        $new_facultad->dependencia=$value->facultad;
                        $new_facultad->dependencia_id='1';
                        $new_facultad->es_facultad='1';
                        $new_facultad->save();
                        $id_last_facultad=Dependencia::orderBy('id','desc')->first()->id;
                    }else{
                        $id_last_facultad=$facultad->id;
                    }
                    //registrar nueva Escuela
                    $new_escuela=new Dependencia;
                    $new_escuela->dependencia=$value->Desc_EAP;
                    $new_escuela->dependencia_id=$id_last_facultad;
                    $new_escuela->es_escuela='1';
                    $new_escuela->save();
                    $id_last_escuela=Dependencia::orderBy('id','desc')->first()->id;                
                }
                $docente=new Docente;
                $docente->user_id=$id_last_user;
                $docente->escuela_id=$id_last_escuela;
                $docente->save();
                echo "No existe usuario...".'<br>';
            }
            echo "Terminado...".'<br>';
        }    
    }
}
