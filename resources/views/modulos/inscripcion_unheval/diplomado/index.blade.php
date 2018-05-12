@extends('plantilla.usuario')
@section('titulo','Diplomado - Inscripciones')
@section('activacion')
@endsection
@section('estilos')  
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Diplomados</li>
	<li class="">Inscripciones</li>
</ul>
@endsection
@section('contenido')
<div class="col-xs-12">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
      		<a href="#nuevo" class="stj-acciones stj-acciones-new" title="Nuevo" data-toggle="modal"><i class="fa fa-plus"></i></a>
			inscripciones &nbsp;&nbsp;&nbsp;
		</div>
		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th class="center">N</th>
						<th class="center">Nombres</th>
						<th class="center" class="hidden-480">Apellidos</th>
						<th class="center" class="hidden-480">email</th>
						<th class="center" class="hidden-480">N Celular</th>
						<th class="center" class="hidden-480">Programa</th>
						<th class="center" class="hidden-480">N Modulo</th>
						<th class="center" class="hidden-480">N Modulo<br>cancelado</th>
						<th class="center" class="hidden-480">Deuda</th>
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
				<h3 class="smaller lighter blue no-margin">Registrar Inscripción</h3>
			</div>
			{!! Form::open(['route' => 'diplomado.ins.validar', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body tab-pane" align="center">
					{{ csrf_field() }}
					<div class="row">		
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programa</label>
							<div class="col-sm-7">
							  {!!Form::select('descripcion',$programa,null,['required','id'=>'descripcion', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Programa'])!!}
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DNI</label>
							<div class="col-sm-7">
							<input type="text" placeholder="Escribir aquí" name="dni" class="form-control" required="required" value="{{ old('dni') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nº de comprobante</label>
							<div class="col-sm-7">
							<input type="text" placeholder="Escribir aquí" name="n_comprobante" class="form-control" required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fecha de comprobante</label>
							<div class="col-sm-7">
							<input type="date" placeholder="Escribir aquí" name="f_comprobante" class="form-control" required="required">
							</div>
						</div>	
					</div>
			</div>
			<div class="modal-footer">				
				<button class="btn btn-success btn-sm btn-round submit" name="enviando" id="enviando">					
					<i class="ace-icon fa fa-check"> Registrar</i>
				</button>
			</div>
			<input type="hidden" name="tipo" value="{{$tipo}}">
			{!!Form::close()!!}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
								<!--Modal Nuevo-->
<div id="nuevo1" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Registrar Pago de Módulo</h3>
			</div>
			{!! Form::open(['route' => 'diplomado.ins.validar_pago', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body tab-pane" align="center">
					{{ csrf_field() }}
					<div class="row">

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nº de comprobante</label>
							<div class="col-sm-7">
							<input type="text" placeholder="Escribir aquí" name="n_comprobante" class="form-control" required="required">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fecha de comprobante</label>
							<div class="col-sm-7">
							<input type="date" placeholder="Escribir aquí" name="f_comprobante" class="form-control" required="required">
							</div>
						</div>	
					</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="id" id="id_inscrito" value="">
				<button class="btn btn-success btn-sm btn-round submit" name="enviando" id="enviando">					
					<i class="ace-icon fa fa-check"> Registrar</i>
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
		
			//Datatables
			jQuery(function($) {
				function enviarId($id){
        			console.log($id);
        		}

				var myTable=$('#dynamic-table').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": '{!!route('diplomado.ins.datos')!!}?tipo={{$tipo}}',
			        "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                 	"order": [[ 0, "asc" ]],
			        "columns" : [
				        {data:"id"},
				        {data:"nombres"},
				        {data:"apellidos"},
				        {data:"email"},
				        {data:"cel"},
				        {data:"descripcion"},
				        {data:"numero_modulo"},
				        {data:"numero_modulo"},
				        {data:"cancelacion"},
				        {data:null,bSortable: false, render: 
				        	function ( data, type, row ) {
				        	return "<div class='center action-buttons'><a href='#' class='stj-acciones' title='Cronograma de actividades'><i class='fa fa-calendar'></i></a><a href='#' class='stj-acciones' title='Pago total módulo'><i class='fa fa-download'></i></a><a href='#nuevo1' class='stj-acciones enviarId' title='Registrar pago modulo' data-toggle='modal'data-id='"+data.id+"'><i class='fa fa-plus'></i></a><a href='/diplomado/inscripciones/editar/"+data.id+"' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a><a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='"+data.id+"'><i class='fa fa-trash'></i></a></div>";
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
//////envio el Id de la inscripcion
				$(document).on('click', '.enviarId', function(event) {
        		 var button = $(this);
		         var id = button.data('id');
		         $("#id_inscrito").val(id);
        		});
//////////////
				$(document).on('click', '.stj-acciones-delete', function(event) {
					
        			var button = $(this);
		         var id = button.data('id');
		            //button.prop("disabled",true);
		            //----------------
		            swal({
						  title: '¿Está seguro que desea eliminar?',
						  text: 'La inscripcion se perderá permanentemente',
						  type: 'warning',
						  showCancelButton: true,
						  confirmButtonColor: '#3085d6',
						  cancelButtonColor: '#d33',
						  confirmButtonText: 'Si, Eliminar',
						  cancelButtonText: 'No, cancelar',
						  confirmButtonClass: 'btn btn-success',
						  cancelButtonClass: 'btn btn-danger',
						  buttonsStyling: false,
						  reverseButtons: true
						}).then((result) => {
							if(result.value){
								 	$.ajax({ 
					               url: '/diplomado/inscripciones/delete/'+id,
					               type: 'DELETE',
					               data: {_token: '{{csrf_token()}}' },
					               success: function (data) {
					                   myTable.ajax.reload();
					                   swal(
										      '¡Eliminado!',
										      'Tu Inscripción se ha eliminado',
										      'success'
										    )
					               },
					               complete: function (data) {
					                   button.prop('disabled', false);
					                   $('#modal_admin').hide();
					               },
					                	error: function(error){
				                   var r = error.responseJSON.message;
				                   swal("Error",r, "error");
			                   }
						         });
							} 

						})
        		});


			});
		</script>
@endsection