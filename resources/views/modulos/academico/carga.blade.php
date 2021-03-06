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

@section('estilos')
{!!Html::style('plantilla/css/bootstrap-select.min.css')!!}
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
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Semestre</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('semestre',[1=>'Primero',2=>"Segundo"],$semestre,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Seleccione...'])!!}
          </div>
        </div>
      </div>
    </div>  
    <div class="col-sm-7 hidden-xs">
      <h> Ver Carga por Docente </h><a href='{!! route('academico.reportecarga.index1')!!}'<button type="button" class="btn btn-primary btn-primary btn-sm">Ver</button> </a>
    </div>     
    <div class="col-sm-12 hidden-xs">
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
                <th class="center">Ciclo</th>
                <th class="center">Curso</th>
                <th class="center">Creditos</th>
                <th class="center">Horas<br>teoricas</th>
                <th class="center">Horas<br>practicas</th>
                <th class="center">Docente</th>
                <th class="center"></th>
            </tr>
          </thead>
            <tbody>
            @foreach($cursos as $id=>$curso)
            <tr>
                <td>{{$curso->codigo}}</td>
                <td>{{$ciclos[$curso->ciclo]}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->creditos}}</td>
                <td>{{$curso->hteoria}}</td>
                <td>{{$curso->hpractica}}</td>
                <td>{{$curso->docente_nombre}}</td>
                <td>
                    @if(!isset($curso->idcarga))
                        <a href="#asignar_docente" class="stj-acciones enviarId" title="Asignar" data-toggle="modal" data-id="{{$curso->id}}" data-idcarga="-" data-docente_id="-"><i class="fa fa-plus"></i></a>
                    @else
                        <a href="#asignar_docente" class="stj-acciones editar" title="Asignar" data-toggle="modal" data-id="{{$curso->id}}" data-idcarga="{{$curso->idcarga}}" data-docente_id="{{$curso->docente_id}}"><i class="fa fa-pencil"></i></a>
                        <a href="{{route('academico.carga.horario.index',$curso->idcarga)}}" class="stj-acciones horario_curso" title="Horario"><i class="fa fa-calendar"></i></a>
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
                              <label class="col-sm-3 control-label">Docente Departamento Academico</label>
                              <div class="col-sm-9">
                                  {{Form::select('docente',$docentes,$docente,['required', 'class'=>'col-xs-12 col-sm-9 selectpicker','placeholder' => 'Docente', 'data-live-search'=>'true'])}}
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
  {!!Html::script('/plantilla/js/bootstrap-select.min.js')!!}
  <script>
  $(document).ready(function () {

      $('[name=planes]').change(function (e) {
          e.preventDefault();
          plan=($(this).val()=='')  ?'null':$(this).val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.carga.index', ['%p','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=ciclo]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.carga.index', ['%p','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=anios]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          anio=($(this).val()=='')  ?'null':$(this).val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.carga.index', ['%p','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=semestre]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          semestre=($(this).val()=='')  ?'null':$(this).val();
          ruta = '{{route('academico.carga.index', ['%p','%s'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('.enviarId').click(function (e) {
          e.preventDefault();
          $('[name=curso]').val($(this).data('id'))
          $('[name=id_carga]').val(null);
          $("[name=docente] option:selected").removeAttr("selected")
          $('[name=docente]').selectpicker('refresh');
      });
      $(".editar").click(function (e) {
          event.preventDefault();
          $('[name=curso]').val($(this).data('id'));
          $('[name=docente]').val($(this).data('docente_id'));
          $('[name=docente]').selectpicker('refresh');
          $('[name=id_carga]').val($(this).data('idcarga'))
      });

      $('#btn_guardar').click(function (e) {
          e.preventDefault();
          recolectarDatos()
          /*if(!=''){
              alert('Llene todos los campos');
              return 0;
          }*/
          $.ajax({
              url: '{{ route('academico.carga.store',[$plan,'null',$anio,$semestre]) }}',
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