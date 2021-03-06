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
  <div class="row" style="margin-bottom: 25px;">
    <div class="col-sm-12">
      <h3><u> Dependencia </u>: {{$departamento}}</h3><hr><br>
    </div>
    <div class="col-sm-12">
      <div class="row form-group">
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
        @if($semestre!='null'&&$anio!='null')
      <h> Carga No Lectiva </h>
            <a href="#" id="carga_no_lectiva_prog"><button type="button" class="btn btn-primary btn-sm">Programar</button> </a>
            <a href="{{route('academico.carga.no_lectiva.print',[$semestre,$anio])}}" id="carga_no_lectiva_print" target="_blank"><button type="button" class="btn btn-success btn-sm">imprimir</button></a>
        @endif
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
                    <a href="{{route('academico.carga.horario.index',$curso->idcarga)}}" class="stj-acciones horario_curso" title="Horario"><i class="fa fa-calendar"></i></a>
                    <a href="{{route('academico.mi.carga.imprimir',$curso->idcarga)}}" class="stj-acciones horario_curso" title="Imprimir" target="_blank"><i class="fa fa-print"></i></a>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
      <div class="col-sm-5">
          <div class="clearfix">
              <div class="pull-right tableTools-container"></div>
          </div>
          <div class="table-header">
              Carga no Lectiva
          </div>
          <div class="table-responsive">
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                  <thead>
                  <tr>
                      <th class="center">Actividad</th>
                      <th class="center" style="width: 67px">Horas</th>
                      <th class="center" style="width: 85px">Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($actividades as $actividad)
                      <tr>
                          <td>{{Form::select('actividad',$actividades_no_lectivas, $actividad->act_no_lectiva_id, ['style'=>'width:-webkit-fill-available'])}}</td>
                          <td>{{Form::number('horas',$actividad->horas,['style'=>'width:50px', "min"=>"1", "max"=>"17"])}}</td>
                          <td class="text-center">
                              <a href='#' class='stj-save-acciones stj-acciones' title='Editar'data-id="{{$actividad->id}}"><i class='fa fa-save'></i></a>
                              <a href='#' class='stj-delete-acciones stj-acciones' title='Editar'data-id="{{$actividad->id}}"><i class='fa fa-trash'></i></a>
                          </td>
                      </tr>
                  @endforeach
                  <tr>
                      <td>{{Form::select('actividad',$actividades_no_lectivas, null, ['style'=>'width:-webkit-fill-available', 'placeholder'=>'seleccione'])}}</td>
                      <td>{{Form::number('horas',null,['style'=>'width:50px', "min"=>"1", "max"=>"17"])}}</td>
                      <td class="text-center center"><a href='#' class='stj-save-acciones stj-acciones' title='Editar' data-id="new"><i class='fa fa-plus'></i></a></td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
    <div class="col-sm-5 col-xs-12">
      <div id='calendar'></div>
    </div>
  </div>
  <div id="carga_no_lectiva" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

@endsection

@section('script')
  {!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
  {!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
  {!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
  <script>
  $(document).ready(function () {

      $('[name=anios]').change(function (e) {
          e.preventDefault();
          anio=($(this).val()=='')  ?'null':$(this).val();
          semestre=($('[name=semestre]').val()=='')  ?'null':$('[name=semestre]').val();
          ruta = '{{route('academico.mi.carga.index', ['%a','%s'])}}';
          ruta =ruta.replace(/%a/g, anio);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('[name=semestre]').change(function (e) {
          e.preventDefault();
          anio=($('[name=anios]').val()=='')  ?'null':$('[name=anios]').val();
          semestre=($(this).val()=='')  ?'null':$(this).val();
          ruta = '{{route('academico.mi.carga.index', ['%a','%s'])}}';
          ruta =ruta.replace(/%a/g, anio);
          ruta =ruta.replace(/%s/g, semestre);
          window.location = ruta;
      });
      $('.enviarId').click(function (e) {
          e.preventDefault();
          $('[name=curso]').val($(this).data('id'))
          $('[name=id_carga]').val(null);
      });
      $(".editar").click(function (e) {
          event.preventDefault();
          $('[name=curso]').val($(this).data('id'));
          $('[name=docente]').val($(this).data('docente_id'));
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
              url: '{{ route('academico.carga.store',['null','null',$anio,$semestre]) }}',
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

      $("#carga_no_lectiva_prog").click(function(e){
          e.preventDefault()
          $('#carga_no_lectiva').html('');
          $.ajax({
              method: "GET",
              url: "{{route('academico.carga.no_lectiva.index',[$semestre,$anio])}}"
          }).done(function( msg ) {
                  $('#carga_no_lectiva').html(msg);
                  $('#carga_no_lectiva').modal();
              });
      });

      $(".stj-save-acciones").click(function(){
          var id= $(this).data("id");
          var docente = '{{Auth::user()->id}}';
          var tr = $(this).parent().parent();
          var horas = tr.find('[name=horas]').val();
          var actividad = tr.find('[name=actividad]').val();
          if(horas>0&&actividad>=0) {
              $.ajax({
                  method: "POST",
                  url: "{{route('academico.carga.no_lectiva.save',[$semestre,$anio])}}",
                  data: {id: id, horas: horas, docente: docente, actividad: actividad, _token: '{{csrf_token()}}'}
              }).done(function (msg) {
                  window.location.reload()
                  
              });
          }
          else alert("complete los campos");
      });
      $(".stj-delete-acciones").click(function(){
          var id = $(this).data("id");
          if (confirm("¿Está seguro de eliminar este registro?"))
          $.ajax({
              method: "POST",
              url: "{{route('academico.carga.no_lectiva.delete',[$semestre,$anio])}}",
              data: { id:id,  _token: '{{csrf_token()}}' }
          }).done(function( msg ) {
              window.location.reload()
          });
      })

  })


  </script>
@endsection