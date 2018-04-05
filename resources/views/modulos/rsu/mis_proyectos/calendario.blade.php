@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/fullcalendar.min.css')!!}
	{!!Html::style('plantilla/css/bootstrap-datetimepicker.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class=""><a href="{{ route('rsu.mp.index') }}"> Mis Proyectos</a></li>
	<li class="">Calendario</li>
</ul>
@endsection
@section('contenido')
	<div class="row">
		<div class="col-sm-12">
			<h3><u> Proyecto</u>: {{ $proyecto->titulo }}</h3><hr><br>
			{{ csrf_field() }}
		</div>
		<div class="col-sm-7 hidden-xs">
			<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
     		 <a href="#CalenderModalNew" class="stj-acciones stj-acciones-new" title="Nuevo" data-toggle="modal"><i class="fa fa-plus"></i></a>
			Actividades &nbsp;&nbsp;&nbsp;
		</div>
				<div class="table-responsive">
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center">Actividad</th>
								<th class="center" class="hidden-480">Periodo</th>
								<th class="center" class="hidden-480">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($proyecto->actividades as $p)
								<tr>
									<td>{{ $p->title }}</td>
									<td class="center">{{ $p->start }} ~ {{ $p->end }}</td>
									<td class="center"><a href='#' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a><a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='"+data.id+"'><i class='fa fa-trash'></i></a>
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
                    <input type="text" class="form-control" id="txtTitulo-new" name="title" required="true">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Descripción</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="txtdescripcion-new" name="descr"  required="true"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Inicio</label>
                  <div class="col-sm-9">
                    <div class='input-group date' id='datetimepicker1'>
                    	<input type='text' class="form-control"  id="dateStar-new" />
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                	</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Fin</label>
                  <div class="col-sm-9">
                    <div class='input-group date' id='datetimepicker2'>
                    	<input type='text' class="form-control" id="dateEnd-new"/>
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                	</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Color Texto</label>
                  <div class="col-sm-2 col-xs-2 col-lg-2">
                    <input type="color" class="form-control" id="txtTextColor-new" value="#fff">
                  </div>

                  <label class="col-sm-3 control-label">Color fondo</label>
                  <div class="col-sm-2 col-xs-2 col-lg-2">
                    <input type="color" class="form-control" id="txtColor-new" value="#3a87ad">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success antosubmit" id="btn-guardar">Guardar</button>
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

		{!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
		{!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
		{!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}


<script type="text/javascript">
	$(function () {
                $('#datetimepicker1').datetimepicker();
                $('#datetimepicker2').datetimepicker();
            });
$(document).ready(function() {
	var myTable = $('#dynamic-table').DataTable({
		"language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
	});
    $('#calendar').fullCalendar({
      header: {
        left: 'month,agendaWeek,agendaDay,listWeek',
        center: 'title',
        right: 'prev,today,next'
      },
     dayClick: function(date, jsEvent, view) {
     	var diaCapturado=date.format('DD/MM/YYYY hh:mm');
     	$('#dateStar-new').val(diaCapturado);
     	$('#dateEnd-new').val(diaCapturado);
     	 //alert('Current view: ' + date.format('YYYY-MM-DD hh:mm:ss'));
     	 $('#CalenderModalNew').modal();
  	},
  	events: {!! $proyecto->actividades !!},
  })

  //Eventos

  	

  //Agregar un evento
  $('#btn-guardar').click(function(){
  		//capturamos los datos
  		NuevoEvento={
	  		proyecto_id:{{ $proyecto->id }},
	  		title:$('#txtTitulo-new').val(),
	  		descripcion:$('#txtdescripcion-new').val(),
	  		color:$('#txtColor-new').val(),
	  		textColor:$('#txtTextColor-new').val(),
	  		start:$('#dateStar-new').val(),
	  		end:$('#dateEnd-new').val(),
	  		_token:'{!! csrf_token() !!}',
	  	}

	$.ajax({ 
		url: '{{ route('rsu.mp.cal-new') }}',
		type: 'POST',
		data: NuevoEvento,
		success: function (data) {
				//alert(data.);
				console.log(data);      
		},
		complete: function (data) {
			console.log('perú campeon');
		},
		error: function(error){
				   alert(data);
		}
	});
  })

});

</script>

@endsection