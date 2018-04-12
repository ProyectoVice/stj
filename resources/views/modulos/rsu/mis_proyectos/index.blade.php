@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
  <link rel="stylesheet" type=/sweetalert/sweetalert2.min.css" href="">
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class="">Mis Proyectos</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">

	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
      <a href="#nuevo" class="stj-acciones stj-acciones-new" title="Nuevo" data-toggle="modal"><i class="fa fa-plus"></i></a>
			Lista de Mis proyectos &nbsp;&nbsp;&nbsp;
		</div>

		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center" id="lll">Fecha</th>
						<th class="center">Título</th>
						<th class="center" class="hidden-480">Rol</th>
						<th class="center" class="hidden-480">Acciones</th>
					</tr>
				</thead>
			</table>
		</div>
</div>	

{{-- modal --}}
<div id="nuevo" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Registrar Nuevo Proyecto</h3>
			</div>
			{!! Form::open(['route' => 'rsu.mp.store', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body" align="center"><br>
			
			{{ csrf_field() }}
					<input type="text" placeholder="Título del proyecto..." required="required" name="el_título" class="form-control" value="{{ old('el_título') }}">
			<br>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-sm btn-round submit">
								<i class="ace-icon fa fa-check"> Registrar</i>
				</button>
			</div>
			{!!Form::close()!!}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
{{-- fin modal --}}
<div id="verDetalle" class="modal fade" tabindex="-1"></div>
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
				
				var myTable=$('#dynamic-table').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": '{!!route('rsu.mp.datos')!!}',
			        "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                 	"order": [[ 0, "desc" ]],
			        "columns" : [
				        {data:"created_at"},
				        {data:"titulo"},
				        {data:"rp"},
				        {data:null,bSortable: false, render: 
				        	function ( data, type, row ) {
				        	return "<div class='center action-buttons'><a href='#' class='stj-acciones stj-acciones-ver' title='Ver detalles' data-id='"+data.id+"'><i class='fa fa-eye'></i></a><a href='#' class='stj-acciones' title='Archivos'><i class='fa fa-folder'></i></a><a href='#' class='stj-acciones'><i class='fa fa-users'></i></a><a href='/rsu/mis_proyectos/editar/"+data.id+"' class='stj-acciones' title='Editar'><i class='fa fa-edit'></i></a><a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='"+data.id+"'><i class='fa fa-trash'></i></a></div>";
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

				$(document).on('click', '.stj-acciones-delete', function(event) {
					
        			var button = $(this);
		         var id = button.data('id');
		            //button.prop("disabled",true);
		            //----------------
		            swal({
						  title: '¿Está seguro que desea eliminar?',
						  text: 'El proyecto se perderá permanentemente',
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
					               url: '/rsu/mis_proyectos/delete/'+id,
					               type: 'DELETE',
					               data: {_token: '{{csrf_token()}}' },
					               success: function (data) {
					                   myTable.ajax.reload();
					                   swal(
										      '¡Eliminado!',
										      'Tu proyecto se ha eliminado',
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

        		$(document).on('click', '.stj-acciones-ver', function(event) {
		         var id = $(this).data('id');
		         $.ajax({ 
					     	url: '/rsu/mis_proyectos/ver/'+id,
					     	type: 'GET',
					     	data: {_token: '{{csrf_token()}}' },
					     success: function (data) {
					        $('#verDetalle').html(data);
					        $('#verDetalle').modal();
					     },
					     error: function(error){
				        	var r = error.responseJSON.message;
				        	swal("Error",r, "error");
			           }
					});
		      });
				
				
			});
</script>
@endsection