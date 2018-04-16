@extends('plantilla.usuario')
@section('titulo','Calendario E-A')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/fullcalendar.min.css')!!}
	{!!Html::style('plantilla/css/bootstrap-datetimepicker.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Calendario Académico</li>
	<li class=""><a href="{{ route('rsu.mp.index') }}"> Mis Proyectos</a></li>
	<li class="">Calendario</li>
</ul>
@endsection
@section('contenido')
	<div class="row">
		<div class="col-sm-12">
			<h3><u> Proyecto</u>: </h3><hr><br>
		</div>
			<div class="col-sm-6 hidden-xs">
				<p><b>Actividades:</b></p>

			</div>
		<div class="col-sm-6 col-xs-12">
			<div id='calendar'></div>		
		</div>
	</div>
	<p>
	
	</p>

	<!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Nueva Actividad</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Actividad</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Descripción</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Inicio</label>
                  <div class="col-sm-9">
                    <div class='input-group date' id='datetimepicker1'>
                    	<input type='text' class="form-control" />
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                	</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Fin</label>
                  <div class="col-sm-9">
                    <div class='input-group date' id='datetimepicker1'>
                    	<input type='text' class="form-control" />
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                	</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Color</label>
                  <div class="col-sm-9">
                    <input type="color" class="form-control" id="title">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success antosubmit">Guardar</button>
          </div>
        </div>
      </div>
    </div>
	
@endsection
@section('script')
		{!!Html::script('/plantilla/js/moment.min.js')!!}
		{!!Html::script('/plantilla/js/fullcalendar.min.js')!!}
		{!!Html::script('/plantilla/js/es.js')!!}
		{!!Html::script('/plantilla/js/bootstrap-datetimepicker.min.js')!!}
<script type="text/javascript">
	$(function () {
                $('#datetimepicker1').datetimepicker();
            });
$(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'month,agendaWeek,agendaDay,listWeek',
        center: 'title',
        right: 'prev,today,next'
      },
     dayClick: function(date, jsEvent, view) {
     	 $('#CalenderModalNew').modal();
    	//alert('Clicked on: ' + date.format());
    	//alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
    	//alert('Current view: ' + view.name);

    	// change the day's background color just for fun
    		//$(this).css('background-color', 'red');

  	}
    })
});

</script>

@endsection