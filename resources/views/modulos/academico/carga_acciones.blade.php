<style>
    .text-center{    vertical-align: middle !important;}
</style>
<div class="modal-dialog">
    <div class="modal-content">
        <!-------->
        {!! Form::open(['route' => ['academico.carga.acciones.save', $id_horario], 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="titleModal">Horario</h4>
        </div>
        <div class="modal-body">

            <div class="row">
              <div class="col-sm-12">
                  <label style="width: 75px">Dia: </label>{{$dias[$horario->dia]}}
              </div>
              <div class="col-sm-12">
                  <label style="width: 75px">Hora:</label>{{$horario->hora_inicio}} / {{$horario->hora_fin}}
              </div>
                <div class="col-sm-12 hidden-xs">
                  <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                  </div>
                  <div class="table-header">Acctividades</div>
                  <div class="table-responsive">
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                            <th class="center" style="width: 67px">Semana</th>
                            <th class="center">Actividad</th>
                            <th class="center" style="width: 85px">Acciones</th>
                        </tr>
                      </thead>
                        <tbody>

                        @foreach($actividades as $actividad)
                            <tr>
                                <td>{{Form::number('semana',$actividad->semana,['style'=>'width:50px', "min"=>"1", "max"=>"17"])}}</td>
                                @if($es_lectiva=='1')
                                    <td>{{Form::text('actividad',$actividad->actividad, ['style'=>'width:-webkit-fill-available'])}}</td>
                                @else
                                    <td>{{Form::select('actividad',$actividades_no_lectivas, $actividad->actividad, ['style'=>'width:-webkit-fill-available'])}}</td>
                                @endif
                                <td class="text-center">
                                    <a href='#' class='stj-save-acciones stj-acciones' title='Editar'data-id="{{$actividad->id}}"><i class='fa fa-save'></i></a>
                                    <a href='#' class='stj-delete-acciones stj-acciones' title='Editar'data-id="{{$actividad->id}}"><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>{{Form::number('semana',null,['style'=>'width:50px', "min"=>"1", "max"=>"17"])}}</td>
                            <td>{{Form::text('actividad',null, ['style'=>'width:-webkit-fill-available'])}}</td>
                            <td class="text-center center"><a href='#' class='stj-save-acciones stj-acciones' title='Editar' data-id="new"><i class='fa fa-plus'></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
  </div>
  <script>
      $(".stj-save-acciones").click(function(){
          $('#acciones_horario').html('');
          var id_actividad = $(this).data("id");
          var id_horario = '{{$horario->id}}';
          var tr = $(this).parent().parent();
          var val_semana = tr.find('[name=semana]').val();
          var val_actividad = tr.find('[name=actividad]').val();
          console.log({ id: id_horario, semana: val_semana, actividad: val_actividad })
          $.ajax({
              method: "POST",
              url: "{{route('academico.carga.acciones.save',"%s")}}".replace(/%s/g, id_horario),
              data: { id: id_actividad, horario:id_horario, semana: val_semana, actividad: val_actividad, _token: '{{csrf_token()}}' }
          }).done(function( msg ) {
              $.ajax({
                  method: "GET",
                  url: "{{route('academico.carga.acciones.index',"%s")}}?es_lectiva={{$es_lectiva}}".replace(/%s/g, id_horario),
              })
                  .done(function( msg ) {
                      $('#acciones_horario').html(msg);
                      $('#acciones_horario').modal();
                  });
          });
      })
      $(".stj-delete-acciones").click(function(){
          $('#acciones_horario').html('');
          var id_actividad = $(this).data("id");
          var id_horario = '{{$horario->id}}';
          $.ajax({
              method: "POST",
              url: "{{route('academico.carga.acciones.delete',"%s")}}".replace(/%s/g, id_actividad),
              data: {  _token: '{{csrf_token()}}' }
          }).done(function( msg ) {
              $.ajax({
                  method: "GET",
                  url: "{{route('academico.carga.acciones.index',"%s")}}?es_lectiva={{$es_lectiva}}".replace(/%s/g, id_horario),
              })
                  .done(function( msg ) {
                      $('#acciones_horario').html(msg);
                      $('#acciones_horario').modal();
                  });
          });
      })
  </script>
    <div class="modal-footer">
        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}
</div>