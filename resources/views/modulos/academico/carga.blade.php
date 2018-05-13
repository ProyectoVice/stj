@extends('plantilla.usuario')
@section('titulo','Carga Lectiva')
@section('activacion')
@endsection
@section('ruta')
<ul class="breadcrumb">
  <i class="ace-icon fa fa-book"></i>
  <li class="active">Calendario Lectivo - Escuela</li>
  <li class="">Calendario</li>
</ul>
@endsection
@section('contenido')
  <div class="row">
    <div class="col-sm-12">
      <h3><u> Escuela</u>: {{$dependencia}}</h3><hr><br>
    </div>
    <div class="col-sm-12">
      <div class="row form-group">
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Plan de estudios</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('planes',$planes ,$plan,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Plan de estudios'])!!}
          </div>
        </div>
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Ciclo</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('ciclo',[1=>'I',2=>'II'] ,$ciclo,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Ciclo'])!!}
          </div>
        </div>
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">Año</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('anios',$anios,$anio,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Año academico'])!!}
          </div>
        </div>
        <label class="col-sm-1 control-label no-padding-right" for="form-field-1">EAP</label>
        <div class="col-sm-2">
          <div class="clearfix">
            {!!Form::select('eap',[],null,['class'=>'col-xs-12 col-sm-9', 'placeholder' => 'EAP'])!!}
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-7 hidden-xs">
      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
         <a href="#" class="stj-acciones stj-acciones-new" title="Nuevo" onclick="prepararModal()"><i class="fa fa-plus"></i></a>
          Cursos &nbsp;&nbsp;&nbsp;
      </div>
      <div class="table-responsive">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th class="center">Cod</th>
              <th class="center" class="hidden-480">Curso</th>
              <th class="center" class="hidden-480">Creditos</th>
              <th class="center" class="hidden-480">Horas teoricas</th>
              <th class="center" class="hidden-480">Horas practicas</th>
              <th class="center" class="hidden-480">Docente</th>
            </tr>
          </thead>
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
      $('[name=planes]').change(function (e) {
          e.preventDefault();
          plan=($(this).val()=='')  ?'null':$(this).val();
          ciclo=($('[name=ciclo]').val()=='')  ?'null':$('[name=ciclo]').val();
          anio=($('[name=anios]').val()=='')  ?'null':$('[name=anios]').val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          window.location = ruta;
      });
      $('[name=ciclo]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          ciclo=($(this).val()=='')  ?'null':$(this).val();
          anio=($('[name=anios]').val()=='')  ?'null':$('[name=anios]').val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          window.location = ruta;
      });
      $('[name=anios]').change(function (e) {
          e.preventDefault();
          plan=($('[name=planes]').val()=='')  ?'null':$('[name=planes]').val();
          ciclo=($('[name=ciclo]').val()=='')  ?'null':$('[name=ciclo]').val();
          anio=($(this).val()=='')  ?'null':$(this).val();
          ruta = '{{route('academico.carga.index', ['%p','%c','%a'])}}';
          ruta =ruta.replace(/%p/g, plan);
          ruta =ruta.replace(/%c/g, ciclo);
          ruta =ruta.replace(/%a/g, anio);
          window.location = ruta;
      });
      var myTable=$('#dynamic-table').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax": '{!! route('academico.carga.tabla',[($plan==null)?'null':$plan, ($ciclo==null)?'null':$ciclo, ($anio==null)?'null':$anio])!!}',
          "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
          "order": [[ 1, "asc" ]],
          "columns" : [
              {data:"codigo"},
              {data:"nombre"},
              {data:"creditos"},
              {data:"hteoria"},
              {data:"hpractica"},
              {data:"docente"}
          ],
      } );
  </script>
@endsection