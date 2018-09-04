@extends('plantilla.usuario')
@section('titulo','Carga Lectiva')
@section('activacion')
@endsection
@section('ruta')
<ul class="breadcrumb">
  <i class="ace-icon fa fa-book"></i>
  <li class="active">Calendario Lectivo - Escuela</li>
    <li class=""><a href="#"> Carga Lectiva</a></li>
    <li class="">Horario</li>
</ul>
@endsection
@section('contenido')
  <div class="row">
      <div class="col-sm-12">
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Curso:</label>
      </div>
      <div class="col-sm-12">
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Docente:</label>
      </div>
      <div class="col-sm-12">
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Ciclo:</label>
      </div>
      <div class="col-sm-12">
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Anio:</label>
      </div>
  </div>
    <div class="col-sm-12 hidden-xs">
      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
          <a href="#" class="stj-acciones stj-acciones-new" title="Nuevo" onclick="prepararModal()"><i class="fa fa-plus"></i></a>
         Nuevo Horario de Curso &nbsp;&nbsp;&nbsp;
      </div>
      <div class="table-responsive">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
                <th class="center">Dia</th>
                <th class="center">Horario</th>
                <th class="center">Ambiente</th>
                <th class="center">Acciones</th>
            </tr>
          </thead>
            <tbody>
            @foreach($horarios as $id=>$horario)
            <tr>
                <td>{{$dias[$horario->dia]}}</td>
                <td>{{$horario->hora_inicio}} / {{$horario->hora_fin}}</td>
                <td>{{$horario->ambiente->ambiente}}</td>
                <td>
                    <a href='#' class='stj-prg-acciones' title='Editar' data-id="{{$horario->id}}"><i class='fa fa-edit'></i></a>
                </td>
            </tr>
            @endforeach
            <tr>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-5 col-xs-12">
      <div id='calendar'></div>   
    </div>
  </div>

  <div id="horario_curso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <!-------->
              {!! Form::open(['route' => ['academico.carga.horario.save', $id_carga], 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
              {{ csrf_field() }}
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="titleModal">Horario</h4>
              </div>
              <div class="modal-body">
                  <div id="testmodal" style="padding: 5px 20px;">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Curso</label>
                              <div class="col-sm-9">
                                  <p>Curso</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Día</label>
                              <div class="col-sm-9">
                                  {{Form::select('dia',$dias,null,['required', 'id'=>'dias','class'=>'col-xs-12 col-sm-9','placeholder' => 'Día'])}}
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Hora de Inicio</label>
                              <div class="col-sm-9">
                                  <input type="time" placeholder="09:00" name="hora_inicio" class="col-xs-12 col-sm-9" value="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Hora Fin</label>
                              <div class="col-sm-9">
                                  <input type="time" placeholder="11:00" name="hora_fin" class="col-xs-12 col-sm-9" value="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Ambiente</label>
                              <div class="col-sm-9">
                                  {{Form::select('ambiente_id',$ambiente,null,['required', 'id'=>'ambiente','class'=>'col-xs-12 col-sm-9','placeholder' => 'Ambiente'])}}
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Ambiente Facultades</label>
                              <div class="col-sm-9">
                                  {{Form::select('ambiente_id_g',$ambiente_g,null,['id'=>'ambiente','class'=>'col-xs-12 col-sm-9','placeholder' => 'Ambiente'])}}
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Ambiente Facultades</label>
                              <div class="col-sm-9">
                                  {{Form::textarea('ambiente_id_g',null,['id'=>'ambiente','class'=>'col-xs-12 col-sm-9','placeholder' => 'Acciones'])}}
                              </div>
                          </div>
                  </div>
              </div>
              <div class="modal-footer">
                  {{Form::hidden('curso',null)}}
                  {{Form::hidden('id_carga',null)}}
                  <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success">Guardar</button>
              </div>
              {!! Form::close() !!}
              <!-------->
          </div>
      </div>
  </div>
  <div id="acciones_horario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  </div>
  @endsection

@section('script')
  {!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
  {!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
  {!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
  <script>
      function prepararModal(){
          //Botones
          $('#btn-guardar').show();
          $('#btn-eliminar').hide();
          $('#txtTitulo-new').val('');
          $('#txtdescripcion-new').val('');
          $('#btn-actualizar').hide();
          $('#titleModal').html("Nueva Actividad/evento");
          $('#horario_curso').modal();
      }
      $(".stj-prg-acciones").click(function(){
          $('#acciones_horario').html('');
          var horario = $(this).data("id");
          $.ajax({
              method: "GET",
              url: "{{route('academico.carga.acciones.index',"%s")}}".replace(/%s/g, horario),
          })
              .done(function( msg ) {
                  $('#acciones_horario').html(msg);
                  $('#acciones_horario').modal();
              });
      })
  </script>
@endsection