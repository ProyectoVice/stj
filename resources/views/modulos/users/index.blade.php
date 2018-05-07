@extends('plantilla.usuario')
@section('titulo','Diplomado - Inscripciones')
@section('activacion')
@endsection
@section('estilos')  
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Relación de Usuarios</li>
	<li class="">Usuario</li>
</ul>
@endsection
@section('contenido')
<div class="col-xs-12">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
      		<a href="#nuevo" class="stj-acciones stj-acciones-new" title="Nuevo" data-toggle="modal"><i class="fa fa-plus"></i></a>
			Registrar &nbsp;&nbsp;&nbsp;
		</div>
		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th class="center">N</th>
						<th class="center">Nombres</th>
						<th class="center" class="hidden-480">Apellidos</th>
						<th class="center" class="hidden-480">DNI</th>
						<th class="center" class="hidden-480">Roles</th>
						<th class="center" class="hidden-480">Acciones</th>
					</tr>
				</thead>			
			</table>
		</div>
</div>
{{-- modal --}}
								<!--Modal Nuevo-->
<div id="nuevo" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Verificar usuario</h3>
			</div>
			{!! Form::open(['route' => 'usuario.nue.validar', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body tab-pane" align="center">
					{{ csrf_field() }}
					<div class="row">		
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DNI</label>
							<div class="col-sm-7">
							<input type="text" placeholder="Escribir aquí" name="dni" class="form-control" required="required" value="{{ old('dni') }}">
							</div>
						</div>						
					</div>
			</div>
			<div class="modal-footer">				
				<button class="btn btn-success btn-sm btn-round submit" name="enviando" id="enviando">					
					<i class="ace-icon fa fa-check"> Verificar</i>
				</button>
			</div>
			{!!Form::close()!!}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
{{-- fin modal --}}
@endsection
@section('script')
		<!-- page specific plugin scripts -->
		{!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
		{!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
		{!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.flash.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.html5.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.print.min.js')!!}
		{!!Html::script('/plantilla/js/buttons.colVis.min.js')!!}
		{!!Html::script('/plantilla/js/dataTables.select.min.js')!!}
		{!!Html::script('/sweetalert/sweetalert2.all.js')!!}
		{!!Html::script('/sweetalert/core.js')!!}
<script type="text/javascript">
	var myTable=$('#dynamic-table').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": '{!!route('usuario.nue.datos')!!}',
			        "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                 	"order": [[ 0, "asc" ]],
			        "columns" : [
				        {data:"id"},
				        {data:"nombres"},
				        {data:"apellidos"},
				        {data:"dni"},
				        {data:"cel"},
				        {data:null,bSortable: false, render: 
				        	function ( data, type, row ) {
				        	return "<div class='center action-buttons'><a href='#' class='stj-acciones' title='Cronograma de actividades'><i class='fa fa-calendar'></i></a><a href='#' class='stj-acciones' title='Descargar'><i class='fa fa-download'></i></a><a href='#nuevo1' class='stj-acciones enviarId' title='Registrar' data-toggle='modal'data-id='"+data.id+"'><i class='fa fa-plus'></i></a><a href='/usuario/nuevo/editar/"+data.id+"' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a><a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='"+data.id+"'><i class='fa fa-trash'></i></a></div>";
                			}
                		}
			        ],
			    } )
			    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copiar al Portapapeles</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-download bigger-110 green' title='descargar'></i> <span class='hidden'>Exportar a CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Imprimir</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'Reporte'
					  }
					]
				} );

</script>

@endsection