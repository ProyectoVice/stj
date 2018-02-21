@extends('plantilla.usuario')
@section('titulo','Admision - Inscripciones')
@section('activacion')
@endsection
@section('estilos')
<style type="text/css">
	
      #accion{
        list-style:none; /* Eliminamos los bullets */
        margin:0px; /* Quitamos los margenes */
        padding:0px; /* Quitamos el padding */
      }
      #accion>li {
        float:left; /* Hacemos que el menu se muestre horizontal */
        padding-left:10px;
      }
      #accion>li>label{
      	font-size: 1.5em;
      }
</style>
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
			inscripciones &nbsp;&nbsp;&nbsp;
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
							<td align="center">
									<div align="right">
                              <ul id="accion">
                                <li>
                                <label data-toggle="tooltip" title="descargar archivo">
                                  <a href="#" 
                                   id="editar"  data-toggle="modal" data-target="#descargar" >
                                  <i class="fa fa-download"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                <label data-toggle="tooltip" title="archivos adjuntos">
                                  <a href="#"
                                   id="editar"  data-toggle="modal" data-target="#adjunto" >
                                  <i class="fa fa-folder-open"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                <label data-toggle="tooltip" title="Subir archivo">
                                  <a href="#" 
                                   id="editar"  data-toggle="modal" data-target="#subir" >
                                    <i class="fa fa-upload"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                 <label data-toggle="tooltip" title="Modificar integrantes">
                                 <a href="#" data-toggle="modal" data-target="#Integrantes"  >
                                 <i class="fa fa-users"></i>
                                  </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Editar proyecto">
                                <a href="#" id="editar" >
                                   <i class="fa fa-pencil-square-o"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Información">
                                <a href="#" id="editar"  data-toggle="modal" data-target="#informacion" >
                                   <i class="fa fa-info"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Revición / Observación">
                                <a href="#" id="editar"  data-toggle="modal" data-target="#obs" >
                                   <i class="fa fa-search"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Eliminar">
                                <a href="#" id="eliminar" onclick="javascript:return confirmacion();">
                                   <i class="fa fa-times-circle"></i>
                                </a>
                                </label>
                                </li>
                              </ul>
                           </div>
							</td>
						</tr>
						<tr>
							<td align="center">4</td>
							<td >5</td>
							<td align="center">5</td>
							<td align="center">
									<div align="right">
                              <ul id="accion">
                                <li>
                                <label data-toggle="tooltip" title="descargar archivo">
                                  <a href="#" 
                                   id="editar"  data-toggle="modal" data-target="#descargar" >
                                  <i class="fa fa-download"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                <label data-toggle="tooltip" title="archivos adjuntos">
                                  <a href="#"
                                   id="editar"  data-toggle="modal" data-target="#adjunto" >
                                  <i class="fa fa-folder-open"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                <label data-toggle="tooltip" title="Subir archivo">
                                  <a href="#" 
                                   id="editar"  data-toggle="modal" data-target="#subir" >
                                    <i class="fa fa-upload"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                 <label data-toggle="tooltip" title="Modificar integrantes">
                                 <a href="#" data-toggle="modal" data-target="#Integrantes"  >
                                 <i class="fa fa-users"></i>
                                  </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Editar proyecto">
                                <a href="#" id="editar" >
                                   <i class="fa fa-pencil-square-o"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Información">
                                <a href="#" id="editar"  data-toggle="modal" data-target="#informacion" >
                                   <i class="fa fa-info"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Revición / Observación">
                                <a href="#" id="editar"  data-toggle="modal" data-target="#obs" >
                                   <i class="fa fa-search"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Eliminar">
                                <a href="#" id="eliminar" onclick="javascript:return confirmacion();">
                                   <i class="fa fa-times-circle"></i>
                                </a>
                                </label>
                                </li>
                              </ul>
                           </div>
							</td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td >2</td>
							<td align="center">2</td>
							<td align="center">
									<div align="right">
                              <ul id="accion">
                                <li>
                                <label data-toggle="tooltip" title="descargar archivo">
                                  <a href="#" 
                                   id="editar"  data-toggle="modal" data-target="#descargar" >
                                  <i class="fa fa-download"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                <label data-toggle="tooltip" title="archivos adjuntos">
                                  <a href="#"
                                   id="editar"  data-toggle="modal" data-target="#adjunto" >
                                  <i class="fa fa-folder-open"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                <label data-toggle="tooltip" title="Subir archivo">
                                  <a href="#" 
                                   id="editar"  data-toggle="modal" data-target="#subir" >
                                    <i class="fa fa-upload"></i>
                                  </a>
                                </label>
                                </li>

                                <li>
                                 <label data-toggle="tooltip" title="Modificar integrantes">
                                 <a href="#" data-toggle="modal" data-target="#Integrantes"  >
                                 <i class="fa fa-users"></i>
                                  </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Editar proyecto">
                                <a href="#" id="editar" >
                                   <i class="fa fa-pencil-square-o"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Información">
                                <a href="#" id="editar"  data-toggle="modal" data-target="#informacion" >
                                   <i class="fa fa-info"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Revición / Observación">
                                <a href="#" id="editar"  data-toggle="modal" data-target="#obs" >
                                   <i class="fa fa-search"></i>
                                </a>
                                </label>
                                </li>
                                <li>
                                <label data-toggle="tooltip" title="Eliminar">
                                <a href="#" id="eliminar" onclick="javascript:return confirmacion();">
                                   <i class="fa fa-times-circle"></i>
                                </a>
                                </label>
                                </li>
                              </ul>
                           </div>
							</td>
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

					// select: {
					// 	style: 'multi'
					// }
			    } );

			})
		</script>
@endsection