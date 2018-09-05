@extends('plantilla.usuario')
@section('titulo','UNHEVAL - Inscripciones')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/buttons.dataTables.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">{{$tipo}}</li>
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
			Inscripciones &nbsp;&nbsp;&nbsp;
		</div>
			<div class=" row form-group">
				<label class="col-sm-1 control-label no-padding-right" for="form-field-1">Programa:</label>
				<div class="col-sm-3">{!!Form::select('programa',$programas,null,['class'=>'col-xs-9 col-sm-12', 'placeholder' => 'Seleccione...'])!!}</div>

				<label class="col-sm-1 control-label no-padding-right" for="form-field-1">Curso:</label>
				<div class="col-sm-3">{!!Form::select('curso',$curso,null,['class'=>'col-xs-9 col-sm-12', 'placeholder' => 'Seleccione...'])!!}</div>
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
						<th class="center" class="hidden-480">N Cursos</th>
						<th class="center" class="hidden-480">Total/<br>Pago</th>
						<th class="center" class="hidden-480">Interno/<br>Externo</th>
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
				<h3 class="smaller lighter blue no-margin">Validar Inscripción</h3>
			</div>
			{!! Form::open(['route' => 'diplomado.ins.validar', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body tab-pane" align="center">
					{{ csrf_field() }}
					<div class="row">		
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Programa</label>
							<div class="col-sm-7">
							  {!!Form::select('descripcion',$programas,null,['required','id'=>'descripcion', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Programa'])!!}
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
					<i class="ace-icon fa fa-check"> Validar</i>
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
				<input type="hidden" name="tipo" value="{{$tipo}}">
				<button class="btn btn-success btn-sm btn-round submit" name="enviando" id="enviando">					
					<i class="ace-icon fa fa-check"> Registrar</i>
				</button>
			</div>
			{!!Form::close()!!}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<!--Modal Nuevo-->
<div id="nuevo2" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Asignar Descuento</h3>
			</div>
			{!! Form::open(['route' => 'diplomado.ins.validar_descuento', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body tab-pane" align="center">
				{{ csrf_field() }}
				<div class="row">
					<div class="form-group">
						<div class="checkbox" align="center">
								<label>
									<input type="checkbox" value="1" name="descuento" id="decuento_interno">
									Descuento por curso (Internos)
								</label>
								<label>
									<input type="checkbox" value="2" name="descuento1" id="decuento_total">
									Descuento de curso total (Externos)
								</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="tipo" value="{{$tipo}}">
				<input type="hidden" name="id1" id="id_inscrito1" value="">
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
		{!!Html::script('/plantilla/js/jszip.min.js')!!}
		{!!Html::script('/plantilla/js/pdfmake.min.js')!!}
		{!!Html::script('/plantilla/js/vfs_fonts.js')!!}
		{!!Html::script('/plantilla/js/buttons.html5.min.js')!!}


            <script type="text/javascript">
                function decodeEntities(encodedString) {
                    var textArea = document.createElement('textarea');
                    textArea.innerHTML = encodedString;
                    return textArea.value;
                }

			//Datatables
			jQuery(function($) {
				function enviarId($id){
        			console.log($id);
        		}
                $('#dynamic-table').on('click','.descuentos', function (e) {
                    e.preventDefault();
                    var button = $(this);
                    var id = button.data('id');
                    $("#id_inscrito").val(id);
                    $("#decuento_interno").prop('checked', (button.data('interno')==1));
                    $("#decuento_total").prop('checked', (button.data('total')==1));

                });
				document.tableconfig = {
                    "processing": true,
                    "serverSide": true,
                    "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                    "order": [[ 0, "asc" ]],
                    "columns" : [
                        {data:"numero"},
                        {data:"nombres"},
                        {data:"apellidos"},
                        {data:"email"},
                        {data:"cel"},
                        {data:"descripcion"},
                        {data:"numero_modulo"},
                        {data:"total_pago"},
                        {data:"es_interno"},
                        {data:"cancelacion"},
                        {data:'accion',bSortable: false, render:
                                function ( data, type, row ) {
                                    return decodeEntities(data);
                                }
                        }
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                };
				function cargar(a) {
                    ajax = '{!!route('diplomado.ins.datos')!!}?tipo={{$tipo}}&programa='+(($('[name="programa"]').val()!='')?$('[name="programa"]').val():'null');
                    if (a==0){document.myTable.ajax.url( ajax ).load();}
                    else {
                        document.tableconfig.ajax = ajax;
                        document.myTable = $('#dynamic-table').DataTable(document.tableconfig);
                    }
                }
                cargar(1);
                $('[name="curso"]').change(function (e) {
                    e.preventDefault();
                    cargar(0);
                });
                $('[name="programa"]').change(function (e) {
                    ruta='{!! route('diplomado.ins.index', ['tipo'=>'Idiomas']) !!}&programa=%s';
                    ruta=ruta.replace(/%s/g, this.value);
					window.location = ruta;
                });

                //////envio el Id de la inscripcion
                $(document).on('click', '.enviarId', function(event) {
                    var button = $(this);
                    var id = button.data('id');
                    $("#id_inscrito").val(id);
                });
                $(document).on('click', '.enviarId1', function(event) {
                    var button = $(this);
                    var id = button.data('id');
                    $("#id_inscrito1").val(id);
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