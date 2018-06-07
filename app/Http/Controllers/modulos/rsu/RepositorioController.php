<?php

namespace App\Http\Controllers\modulos\rsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\RsuProyecto;
use Auth;
use App\User;
use Input;
use Illuminate\Support\Facades\Storage;

use Softon\SweetAlert\Facades\SWAL;  
use DB;

class RepositorioController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('docente');
    }

    public function index()
    {
        return view('modulos.rsu.repositorio.index');
    }
    public function datatables()
    {
        $proyecto=RsuProyecto::join('rsu_participantes AS p','p.rsu_proyecto_id','=','rsu_proyectos.id')
                           ->join('docentes AS d','d.user_id','=','p.user_id')
                           ->join('dependencias  AS e','e.id','=','d.dependencia_escuela_id')
                           ->where('rsu_proyectos.etapa','4')
                           ->select('rsu_proyectos.*','e.dependencia AS escuela')->get();
        return datatables()->of($proyecto)->toJson();
    }
    public function ver_archivos($id){
        $proyecto = RsuProyecto::where('id',$id)->where('etapa','4')->first();
        if(!$proyecto){
        	return back()->with('azul','No hay archivo');
        }
        if($proyecto->file_informe==''){
         return back()->with('azul','No hay archivo');
        }
        return Storage::download($proyecto->file_informe);
        //return back()->with('verde','Se descargó un archivo');
    }
}
