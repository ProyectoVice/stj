@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
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
			Lista de Mis proyectos &nbsp;&nbsp;&nbsp;
		</div>
												

		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">Fecha</th>
						<th class="center">Título</th>
						<th class="center" class="hidden-480">Tipo</th>
						<th class="center" class="hidden-480">Acciones</th>
					</tr>
				</thead>

				<tbody>
					{{-- Foreanch --}}
						<tr>
							<td align="center">1</td>
							<td >2</td>
							<td align="center">3</td>
							<td align="center">4</td>
						</tr>
					{{--END Foreanch --}}
				</tbody>
			</table>
		</div>
</div>	
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

		<script type="text/javascript">
		
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable =
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": null},
					  null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],

					select: {
						style: 'multi'
					}
			    } );

			})
		</script>
@endsection