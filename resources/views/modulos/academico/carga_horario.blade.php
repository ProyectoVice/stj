@extends('plantilla.usuario')
@section('titulo','Carga Lectiva')
@section('activacion')
@endsection
@section('ruta')
<ul class="breadcrumb">
  <i class="ace-icon fa fa-book"></i>
  <li class="active">Calendario Lectivo - Escuela</li>
    <li class="">Carga Lectiva</li>
    <li class="">Horario</li>
</ul>
@endsection
@section('contenido')
  <div class="row">
    </div>     
    <div class="col-sm-12 hidden-xs">
      <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
          <a href="#" class="stj-acciones stj-acciones-new" title="Nuevo" onclick="prepararModal()"><i class="fa fa-plus"></i></a>
         Horario de Curso &nbsp;&nbsp;&nbsp;
      </div>
      <div class="table-responsive">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
                <th class="center">Dia</th>
                <th class="center">Hora Inicio</th>
                <th class="center">HOra fin</th>
                <th class="center">Ambiente</th>
                <th class="center"></th>
            </tr>
          </thead>
            <tbody>
            @foreach($horarios as $id=>$horario)
            <tr>
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
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="titleModal">Horario</h4>
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
                                  {{Form::select('docente',[],null,['required', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Docente'])}}
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="modal-footer">
                  {{Form::hidden('curso',null)}}
                  {{Form::hidden('id_carga',null)}}
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
  </script>
@endsection