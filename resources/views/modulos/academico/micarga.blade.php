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
      <h3><u> Dependencia </u>: xxxxxx xxxxxx xxxxxxx</h3><hr><br>
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
      <h> Carga No Lectiva </h><a href='{{route('academico.carga.no_lectiva.index',[$semestre,$anio])}}'> <button type="button" class="btn btn-primary btn-primary btn-sm">Programar</button> </a>
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

  })


  </script>
@endsection