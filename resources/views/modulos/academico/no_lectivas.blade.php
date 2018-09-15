
<style>
    .text-center{    vertical-align: middle !important;}
</style>
<div class="modal-dialog">
    <div class="modal-content">
        <!-------->
        {!! Form::open(['url' => route('academico.carga.no_lectiva.index',[$semestre,$anio]), 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title text-center" id="titleModal">Carga no lectiva</h4>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-sm-12 hidden-xs">
                  <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                  </div>
                  <div class="table-header">Acctividades</div>
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
            </div>
        </div>
  </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}
</div>

    <script>
        $(".stj-save-acciones").click(function(){
            var id= $(this).data("id");
            var docente = '{{Auth::user()->id}}';
            var tr = $(this).parent().parent();
            var horas = tr.find('[name=horas]').val();
            var actividad = tr.find('[name=actividad]').val();
            if(horas>0&&actividad>=0) {
                $('#carga_no_lectiva').html('');
                $.ajax({
                    method: "POST",
                    url: "{{route('academico.carga.no_lectiva.save',[$semestre,$anio])}}",
                    data: {id: id, horas: horas, docente: docente, actividad: actividad, _token: '{{csrf_token()}}'}
                }).done(function (msg) {
                    console.log(msg);
                    $.ajax({
                        method: "GET",
                        url: "{{route('academico.carga.no_lectiva.index',[$semestre,$anio])}}",
                    })
                        .done(function (msg) {
                            $('#carga_no_lectiva').html(msg);
                            $('#carga_no_lectiva').modal();
                        });
                });
            }
            else alert("complete los campos");
        });
        $(".stj-delete-acciones").click(function(){
            $('#carga_no_lectiva').html('');
            var id = $(this).data("id");
            $.ajax({
                method: "POST",
                url: "{{route('academico.carga.no_lectiva.delete',[$semestre,$anio])}}",
                data: { id:id,  _token: '{{csrf_token()}}' }
            }).done(function( msg ) {
                $.ajax({
                    method: "GET",
                    url: "{{route('academico.carga.no_lectiva.index',[$semestre,$anio])}}",
                })
                    .done(function( msg ) {
                        $('#carga_no_lectiva').html(msg);
                        $('#carga_no_lectiva').modal();
                    });
            });
        })
    </script>