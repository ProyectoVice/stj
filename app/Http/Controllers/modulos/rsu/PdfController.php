<?php

namespace App\Http\Controllers\modulos\rsu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

use App\RsuProyecto;
use App\RsuParticipante;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
	
class PdfController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
        $this->middleware('docente');
    }
    
    public function equipo($id){
       $docentes=RsuParticipante::join('users','users.id','=','rsu_participantes.user_id')
               ->join('rsu_responsabilidads AS r','r.id','=','rsu_participantes.rsu_responsabilidad_id')
               ->join('docentes AS doc','doc.user_id','=','users.id')
               ->join('dependencias  AS e','e.id','=','doc.dependencia_escuela_id')
               ->where('rsu_participantes.rsu_proyecto_id',$id)
               ->join('rol_users AS ru','users.id','=','ru.user_id')
               ->where('ru.rol_id','3')
               ->where('ru.estado','1')
               ->where('rsu_participantes.rsu_responsabilidad_id','<>',3)
               ->select(DB::raw('CONCAT(users.apellido_paterno," ",users.apellido_materno,", ", users.nombres) AS nombres'), 'users.id AS id_user','users.dni AS dni', 'r.rsu_responsabilidad AS tipo', 'r.id AS id_responsabilidad','e.dependencia AS escuela', 'rsu_participantes.id AS id')->get();

        $estudiantes=RsuParticipante::join('users','users.id','=','rsu_participantes.user_id')
               ->join('rsu_responsabilidads AS r','r.id','=','rsu_participantes.rsu_responsabilidad_id')
               ->join('estudiantes AS doc','doc.user_id','=','users.id')
               //->join('escuelas','escuelas.id','=','doc.escuela_id')
               ->join('dependencias  AS e','e.id','=','doc.dependencia_escuela_id')
               ->where('rsu_participantes.rsu_proyecto_id',$id)
               ->where('rsu_participantes.rsu_responsabilidad_id','=',3)
               ->select(DB::raw('CONCAT(users.apellido_paterno," ",users.apellido_materno,", ", users.nombres) AS nombres'), 'users.id AS id_user','users.dni AS dni', 'r.rsu_responsabilidad AS tipo', 'r.id AS id_responsabilidad','e.dependencia AS escuela', 'rsu_participantes.id AS id')->get();

        $equipo=array();
        //Fusionamos los controladores
        foreach ($docentes as $d) {
            $equipo[]=$d;
        }
        //return $equipo;
        foreach ($estudiantes as $e) {
            $equipo[]=$e;
        }
        return $equipo;
    }

    public function pdf($id)
    {        
        
        $proyecto = RsuProyecto::find($id); 
        $equipo=$this->equipo($id); 
        $date = Carbon::now();
        $pdf = PDF::loadView('modulos.rsu.pdf.ver_detalles',compact('proyecto','equipo','date'));

        return $pdf->stream('invoiced');
    }
}
