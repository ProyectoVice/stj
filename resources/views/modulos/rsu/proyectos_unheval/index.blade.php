@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
  <link rel="stylesheet" type=/sweetalert/sweetalert2.min.css" href="">
  <style type="text/css">
  	.table tbody tr.warning td {
  background-color: lightgoldenrodyellow;
}
  </style>
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class=""> Proyectos UNHEVAL</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">

	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
			Lista de Proyectos - UNHEVAL&nbsp;&nbsp;&nbsp;
		</div>

		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">Fecha</th>
						<th class="center">Título</th>
						<th class="center">EP</th>
						<th class="center" class="hidden-480">Etapa</th>
						<th class="center" class="hidden-480">Acciones</th>
					</tr>
				</thead>
			</table>
		</div>
</div>	


{{-- modal comentario--}}
<div id="estado" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content modal-sm">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Actualizár estado</h3>
			</div>
			<div class="modal-body" align="center">
				<button class="btn btn-info btn-estado" id='btn-estado'>Culminado Satisfactoriamente</button><br><br>
				{{-- <button class="btn btn-default stj-acciones-comen" >Observar</button><br><br> --}}
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
{{-- fin modal --}}
{{-- modal comentario--}}
<div id="estado-2" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content modal-sm">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Actualizár estado</h3>
			</div>
			<div class="modal-body" align="center">
				<button class="btn btn-default btn-estado"  id='btn-estado-2'>No ha culminado</button><br><br>
				{{-- <button class="btn btn-default stj-acciones-comen" >Observar</button><br><br> --}}
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
{{-- fin modal --}}
{{-- modal cambiar estado--}}
<div id="comentarios_modal" class="modal fade" tabindex="-1"></div>
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
				
				var myTable=$('#dynamic-table').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": '{!!route('rsu.pu.datos')!!}',
			        "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                 	"order": [[ 0, "desc" ]],

			        "columns" : [
				        {data:"created_at"},
				        {data:"titulo"},
				         {data:"escuela"},
				        {data:null,bSortable: false, render: 
				        		function ( data, type, row ) {
				        			
				        			switch(data.etapa){
				        				case '1':
				        					$etapa = "<div align='center' title='Presentación, esperando aprobación'><i class='fa fa-circle red' style='font-size: 20px;'></i></div>"; break;

				        				case '2':
				        					$etapa = "<div align='center' class='stj-estados' title='Aprobado, en ejecución' data-id='"+data.id+"'><i class='fa fa-circle green' style='font-size: 20px;'></i></div>"; break;

				        				case '3':
				        					$etapa = "<div align='center'  title='En observación, corregir errores'><i class='fa  fa-circle orange' style='font-size: 20px;'></i></div>"; break;

				        				case '4':
				        					$etapa = "<div align='center' class='stj-estados' title='Culminado satisfactoriamente' data-estado='4' data-id='"+data.id+"'><i class='fa fa-circle blue' style='font-size: 20px;'></i></div>"; break;

				        				defaul: $etapa='no definido'; break;
				        			}
				        			return $etapa;
				        			
				        		}
                		},
				        {data:null,bSortable: false, render: 
				        	function ( data, type, row ) {
				        	return "<div class='center action-buttons'><a href='/rsu/proyectos_unheval/ver/"+data.id+"' class='stj-acciones' title='Ver detalles'><i class='fa fa-eye'></i></a><a href='/rsu/proyectos_unheval/ver-file/"+data.id+"' class='stj-acciones' title='Subir/Descargar Archivos'><i class='fa fa-folder'></i></a><a href='#' class='stj-acciones stj-acciones-comen' title='comentarios y evaluación' data-id='"+data.id+"'><i class='fa fa-comment'></i></a></div>";
                			}
                		}
			        ],
			    } )

        	  $(document).on('click', '.stj-acciones-comen', function(event) {
		         var id = $(this).data('id');
		         
		         	$.ajax({ 
					            url: '/rsu/proyectos_unheval/show-msj/',
					            type: 'POST',
					            data: {_token: '{{csrf_token()}}', proyecto_id:id },
					            success: function (data) {
					            	//console.log(data);
					               $('#comentarios_modal').html(data);
		         				   $('#comentarios_modal').modal();
					            },
					            error: function(error){
				                var r = error.responseJSON.message;
				                console.log(r);
			                   }
						});
		      });

        	  //Cambiar estados
        	  $(document).on('click', '.stj-estados', function(event) {
		         var id = $(this).data('id');
		         var estado = $(this).data('estado');

		         	if (estado=='4'){
		         		$('#btn-estado-2').attr({onclick: 'actualizarEtapa('+id+',2);'});
		         		$('#estado-2').modal();
		         	}else{
		         		$('#btn-estado').attr({onclick: 'actualizarEtapa('+id+',4);'});
		         	  	$('#estado').modal();
		         	}
		      });
				
			});
			function actualizarEtapa($id,$NuevaEtapa){
				$.ajax({ 
					url: '/rsu/proyectos_unheval/estado/',
					type: 'POST',
					data: {_token: '{{csrf_token()}}', proyecto_id:$id, nuevaEtapa:$NuevaEtapa },
					success: function (data) {
					    location.reload();
					},
					              
					error: function(error){
				       var r = error.responseJSON.message;
				       console.log(r);
			      }
				});
        	}
</script>
@endsection