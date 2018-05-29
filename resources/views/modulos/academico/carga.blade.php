@extends('plantilla.usuario')
@section('titulo','Carga Lectiva')
@section('activacion')
@endsection
@section('ruta')
<ul class="breadcrumb">
  <i class="ace-icon fa fa-book"></i>
  <li class="active">Calendario Lectivo - Escuela</li>
  <li class="">Carga Lectiva</li>
</ul>
@endsection
@section('contenido')
  <div class="row">
    <div class="col-sm-12">
      <h3><u> Dependencia </u>: {{$dependencia}}</h3><hr><br>
    </div>
    <div class="col-sm-12">
      <div class="row form-group">
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Plan de estudios</label>        
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('planes',$planes ,$plan,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Seleccione...'])!!}
          </div>
        </div>
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Ciclo</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('ciclo',[1=>'I',2=>'II',3=>'III'] ,$ciclo,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Seleccione...'])!!}
          </div>
        </div>
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Año</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('anios',$anios,$anio,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Seleccione...'])!!}
          </div>
        </div>        
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Semestre</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('semestre',[1=>'Primero',2=>"Segundo"],$semestre,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Seleccione...'])!!}
          </div>
        </div>
      </div>
    </div>  
    <div class="col-sm-7 hidden-xs">
      <h> Ver Carga por Docente </h><a href='{!! route('academico.reportecarga.index1')!!}', <button type="button" class="btn btn-primary btn-primary btn-sm">Ver</button> </a>
    </div>     
    <div class="col-sm-7 hidden-xs">
      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
         Cursos - Asignación Docente &nbsp;&nbsp;&nbsp;
      </div>
      <div class="table-responsive">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
                <th class="center">Cod</th>
                <th class="center">Curso</th>
                <th class="center">Creditos</th>
                <th class="center">Horas teoricas</th>
                <th class="center">Horas practicas</th>
                <th class="center">Docente</th>
                <th class="center"></th>
            </tr>
          </thead>
            <tbody>
            @foreach($cursos as $id=>$curso)
            <tr>
                <td>{{$id}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->creditos}}</td>
                <td>{{$curso->hteoria}}</td>
                <td>{{$curso->hpractica}}</td>
                <td>{{$curso->docente_nombre}}</td>
                <td>
                    @if(!isset($curso->idcarga))
                        <a href="#asignar_docente" class="stj-acciones enviarId" title="Asignar" data-toggle="modal" data-id="{{$curso->id}}"><i class="fa fa-plus"></i></a>
                    @else
                        <a href="#asignar_docente" class="stj-acciones editar" title="Asignar" data-toggle="modal" data-id="{{$curso->id}}" data-idcarga="{{$curso->idcarga}}" data-docente_id="{{$curso->docente_id}}"><i class="fa fa-pencil"></i></a
                    @endif

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-5 col-xs-12">
      <div id='calendar'></div>   
    </div>
  </div>

  <div id="asignar_docente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="titleModal"></h4>
              </div>
              <div class="modal-body">
                  <div id="testmodal" style="padding: 5px 20px;">
                      <form id="antoform" class="form-horizontal calender" role="form">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Curso</label>
                              <div class="col-sm-9">
                                  <p>Curso</p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Docente</label>
                              <div class="col-sm-9">
                                  {{Form::select('docente',$docentes,$docente,['required', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Docente'])}}
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="modal-footer">
                  {{Form::hidden('curso',null)}}
                  {{Form::hidden('id_carga',null)}}
                  {{Form::hidden('anio',$anio)}}
                  <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-success antosubmit" id="btn_guardar">Guardar</button>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('script')
  {!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
  {!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
  {!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
  <script>
  $(document).ready(function () {

      $('[name=planes]').change(function (e) {
          e.preventDefault();
          plan=($(this).val()=='')  ?'null':$(this).val();
          ciclo=($('[name=ciclo]').val()=='')  ?'null':$('[name=ciclo]').val();
          anio=($('[name=anios]').val()=='')  ?'null':$('[name=anios]').val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=ciclo]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          ciclo=($(this).val()=='')  ?'null':$(this).val();
          anio=($('[name=anios]').val()=='')  ?'null':$('[name=anios]').val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=anios]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          ciclo=($('[name=ciclo]').val()=='')  ?'null':$('[name=ciclo]').val();
          anio=($(this).val()=='')  ?'null':$(this).val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=semestre]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          ciclo=($('[name=ciclo]').val()=='')  ?'null':$('[name=ciclo]').val();
          anio=($('[name=anios]').val()=='')  ?'null':$('[name=anios]').val();
          semestre=($(this).val()=='')  ?'null':$(this).val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('.enviarId').click(function (e) {
          e.preventDefault();
          $('[name=curso]').val($(this).data('id'))
      })

      $('#btn_guardar').click(function (e) {
          e.preventDefault();
          recolectarDatos()
          /*if(!=''){
              alert('Llene todos los campos');
              return 0;
          }*/
          $.ajax({
              url: '{{ route('academico.carga.store',[$plan,$ciclo,$anio,$semestre]) }}',
              type: 'POST',
              data: datos_carga_lectiva,
              success: function (data) {
                  location.reload();
                  $('#asignar_docente').modal('toggle');
              },
              error: function(error){
                  console.log(error);
              }
          })
      });
      $(".editar").click(function (e) {
          event.preventDefault();
          $('[name=curso]').val($(this).data('id'));
          $('[name=docente]').val($(this).data('docente_id'));
          $('[name=id_carga]').val($(this).data('idcarga'))
      });
      function recolectarDatos() {
          return datos_carga_lectiva = {
              idcarga: $('[name=id_carga]').val(),
              docente: $('[name=docente]').val(),
              curso: $('[name=curso]').val(),
              _token: '{!! csrf_token() !!}',
          };
      }

  })


  </script>
@endsection