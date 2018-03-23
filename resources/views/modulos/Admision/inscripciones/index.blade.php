@extends('plantilla.usuario')
@section('titulo','Admision - Inscripciones')
@section('activacion')
@endsection
@section('estilos')
  
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Admision</li>
	<li class="">Inscripciones</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">

	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
		<div class="table-header">
      		<a href="{{route('inscripcion-general.create')}}" class="stj-acciones stj-acciones-new" title="Nuevo"><i class="fa fa-plus"></i></a>
			inscripciones &nbsp;&nbsp;&nbsp;
		</div>

		<div class="table-responsive">
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">Fecha</th>
						<th class="center">Año</th>
						<th class="center" class="hidden-480">Rol</th>
						<th class="center" class="hidden-480">Acciones</th>
					</tr>
				</thead>
				<tbody>
          @foreach($inscripcion as $i)
						<tr>
							<td align="center">{{$i->created_at}}</td>
							<td >{{$i->anio}}</td>
							<td align="center">3</td>
							<td align="center">
				<div align="center">
					<a href="#" class="stj-acciones" title="Ver más"><i class="fa fa-eye"></i></a>                             
                    <a href="#" class="stj-acciones" title="Usuario"><i class="fa fa-users"></i></a>
                    <a href="#" class="stj-acciones" title="Editar"><i class="fa fa-edit"></i></a>
                    <a href="#" class="stj-acciones" title="Infromacion"><i class="fa fa-info"></i></a>
                    <a href="#" class="stj-acciones stj-acciones-delete" title="Eliminar" onclick="javascript:return confirmacion();">
                        <i class="fa fa-trash"></i>
                    </a>                      
                </div>
							</td>
						</tr>
            @endforeach
				</tbody>
			</table>
		</div>
</div>	
@endsection
@section('script')
		<!-- page specific plugin scripts -->
		{!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
		{!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
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

					// select: {
					// 	style: 'multi'
					// }
			    } );

			})

      $(function () {$('[data-toggle="tooltip"]').tooltip() })
		</script>
@endsection