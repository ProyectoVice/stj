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
      @if(Route::currentRouteName()=='academico.carga.horario.index')
      <div class="col-sm-12">
          <label style="width: 75px; margin-left: 25px;">Curso:</label>{{$curso->nombre}}
      </div>
      @else
          <label style="margin-left: 25px;">{{$curso->nombre}}</label>
      @endif
      <div class="col-sm-12">
          <label style="width: 75px; margin-left: 25px;">Docente:</label>{{$docente->nombre}}
      </div>
      <div class="col-sm-12">
          <label style="width: 75px; margin-left: 25px;">Ciclo:</label>{{$carga_lectiva->semestre}}
      </div>
      <div class="col-sm-12">
          <label style="width: 75px; margin-left: 25px;">Anio:</label>{{$carga_lectiva->anio}}
      </div>
  </div>
    <div class="col-sm-12 hidden-xs">
      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
          <a href="#" class="stj-acciones stj-acciones-new" title="Nuevo" onclick="prepararModal()"><i class="fa fa-plus"></i></a>
         Nuevo Horario de {{(Route::currentRouteName()=='academico.carga.horario.index')?'Curso':'Carga no Lectiva'}} &nbsp;&nbsp;&nbsp;
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
                    <a href='#' class='stj-edit-acciones stj-acciones' title='Editar' data-id="{{$horario->id}}"
                        data-dia="{{$horario->dia}}"
                        data-hora_inicio="{{$horario->hora_inicio}}"
                        data-hora_fin="{{$horario->hora_inicio}}"
                        data-ambiente_id="{{$horario->ambiente_id}}"><i class='fa fa-edit'></i></a>
                    <a href='#' class='stj-prg-acciones stj-acciones' title='Programar' data-id="{{$horario->id}}"><i class='fa fa-cog'></i></a>

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
                                  <p>{{$curso->nombre}}</p>
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
                  </div>
              </div>
              <div class="modal-footer">
                  {{Form::hidden('curso',$curso->id)}}
                  {{Form::hidden('id','new')}}
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
          $('#titleModal').html("Nuevo Horario");

          event.preventDefault();
          $('[name=id]').val('new');
          $('[name=dia]').val(null);
          $('[name=hora_inicio]').val(null);
          $('[name=hora_fin]').val(null);
          $('[name=ambiente_id]').val(null);
          $('[name=ambiente_id_g]').val(null);
          $('#horario_curso').modal();
      }

      $(".stj-edit-acciones").click(function (e) {
          event.preventDefault();
          $('[name=id]').val($(this).data('id'));
          $('[name=dia]').val($(this).data('dia'));
          $('[name=hora_inicio]').val($(this).data('hora_inicio'));
          $('[name=hora_fin]').val($(this).data('hora_fin'));
          $('[name=ambiente_id]').val($(this).data('ambiente_id'));
          $('[name=ambiente_id_g]').val($(this).data('ambiente_id_g'));

          $('#titleModal').html("Editar Horario");
          $('#horario_curso').modal();
      });


      $(".stj-prg-acciones").click(function(){
          $('#acciones_horario').html('');
          var horario = $(this).data("id");
          $.ajax({
              method: "GET",
              url: "{{route('academico.carga.acciones.index',"%s")}}".replace(/%s/g, horario),
              data: {  es_lectiva: '{{(Route::currentRouteName()=='academico.carga.horario.index')?1:0}}' }
          })
              .done(function( msg ) {
                  $('#acciones_horario').html(msg);
                  $('#acciones_horario').modal();
              });
      })
  </script>
@endsection