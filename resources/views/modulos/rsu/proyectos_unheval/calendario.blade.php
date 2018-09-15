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
	<li class="active">Responsabilidad Social Universitaria</li>
  <li class=""><a href="{{ route('rsu.pu.index') }}"> Proyectos UNHEVAL</a></li>
	<li class="">Calendario</li>
</ul>
@endsection
@section('contenido')
	<div class="row">
		<div class="col-sm-12">
			<h3><u> Proyecto</u>: {{ $proyecto->titulo }}</h3><label> {{ $escuela->dependencia}}</label><hr><br>
			{{ csrf_field() }}
		</div>
		<div class="col-sm-7 hidden-xs">
			<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
			Actividades &nbsp;&nbsp;&nbsp;
		</div>
				<div class="table-responsive">
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center">Actividades</th>
								<th class="center" class="hidden-480">Inicio</th>
                <th class="center" class="hidden-480">Fin</th>
							</tr>
						</thead>
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
            <h4 class="modal-title" id="titleModal"></h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Actividad</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="txtTitulo-new" name="title" disabled="true">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Descripción</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="txtdescripcion-new" name="descr"  required="true" disabled="true"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Inicio</label>
                  <div class="col-sm-9">
                    <div class='input-group date' id='datetimepicker1'>
                    	<input type='text' class="form-control"  id="dateStar-new" disabled="true"/>
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
                    	<input type='text' class="form-control" id="dateEnd-new" disabled="true" />
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                	</div>
                  </div>
                </div>
                
              </form>
            </div>
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
	
$(document).ready(function(){
	    $('#datetimepicker1').datetimepicker();
      $('#datetimepicker2').datetimepicker();
      //Tabla
          var myTable=$('#dynamic-table').DataTable( {
              "processing": true,
              "serverSide": true,
              "ajax": '{!! route('rsu.mp.cal-table',$proyecto->id) !!}',
              "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                  "order": [[ 1, "asc" ]],
              "columns" : [
                {data:"title"},
                {data:"start"},
                {data:"end"}
              ],
          } );
    //Calendario
    $('#calendar').fullCalendar({
      header: {
        left: 'month,agendaWeek,agendaDay,listWeek',
        center: 'title',
        right: 'prev,today,next'
      },
   
  	     events: '{!! route('rsu.mp.cal.date',$proyecto->id) !!}',
        //Click en un evento
      eventClick: function(date, jsEvent, view) {
          //alert(date.title);
          $('#dateStar-new').val(date.start.format('DD/MM/YYYY HH:mm'));

          if(date.end==null){
           var dateEnd=date.start.add(11, 'hours').format('DD/MM/YYYY HH:mm');
          }else{
           var dateEnd=date.end.format('DD/MM/YYYY HH:mm');  
          }
          $('#dateEnd-new').val(dateEnd);
          $('#txtTitulo-new').val(date.title);
          $('#txtColor-new').val(date.color);
          $('#txtTextColor-new').val(date.textColor);
          $('#txtdescripcion-new').val(date.descripcion);
          $('#id-cal').val(date.id);
          $('#titleModal').html("Detalles del evento/actividad");
           //alert('Current view: ' + date.format('YYYY-MM-DD hh:mm:ss'));

           //Botones
          $('#btn-guardar').hide();
          $('#btn-eliminar').show();
          $('#btn-actualizar').show();

          $('#CalenderModalNew').modal();

       },
      });
});

</script>

@endsection