@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/dropzone.min.css')!!}
	{!!Html::style('/plantilla/css/colorbox.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class=""><a href="{{ route('rsu.mp.index') }}"> Mis Proyectos</a></li>
	<li class="">Editar</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
		<h3 align="center"> Llenar los datos de su proyecto</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		{!! Form::model($proyecto,['route' => ['rsu.mp.update',$proyecto->id], 'method' => 'PUT','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}

			{{ csrf_field() }}
		<div class="col-sm-6">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Título del Proyecto</label>
				<div class="col-sm-9">
				{!!Form::text('titulo', null, ['required', 'class'=> 'form-control', 'placeholder'=>'Escribir aquí'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ejes</label>
				<div class="col-sm-9">
					@foreach($RsuEjes as $eje)
							<label class=".clic">
								<input value="1" type="checkbox" class="ace RsuEjes-stj" id="{{$eje->id}}" />
								<span class="lbl"> {{$eje->eje}} ({{$eje->abr}})</span>
							</label><br>
					@endforeach
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lineamientos</label>
				<div class="col-sm-9 agregar">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Aprobación</label>
				<div class="col-sm-9">
				{!!Form::text('doc_aprobacion',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'N° / Nombre del doc.'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Aprobación*</label>
				<div class="col-xs-10 col-sm-6">
					<input type="file" name="aprobacion-file" class="ace-file">@if($proyecto->file_aprobacion!='')<a href="{{ Storage::url($proyecto->file_aprobacion) }}" title="clic para ver" target="_blank">Ya existe un archivo</a>@endif
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lugar</label>
				<div class="col-sm-9">
				{!!Form::text('lugar',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'Lugar dónde se realiza la RSU'])!!}
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Beneficiarios</label>
				<div class="col-sm-9">
				{!!Form::text('beneficiarios',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'Población o comunidad'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Aliados</label>
				<div class="col-sm-9">
				{!!Form::text('aliados',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'Grupos de interés / Aliados estratégicos'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Porcentaje de avance</label>
				<div class="col-sm-9">
					{!!Form::number('porcentaje',null,['max'=>'100','min'=>'1','class'=>'col-xs-10 col-sm-10'])!!}
				</div>
			</div>
						
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Culminación</label>
				<div class="col-sm-9">
				{!!Form::text('doc_culminacion',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'N° / Nombre del doc.'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Culminación*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="culminacion-file" class="ace-file">@if($proyecto->file_culminacion!='')<a href="{{ Storage::url($proyecto->file_culminacion) }}" title="clic para ver" target="_blank">Ya existe un archivo</a>@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Satisfación de Beneficiarios</label>
				<div class="col-sm-9">
					{!!Form::select('satisfaccion',$satisfacciones,$proyecto->satisfacion !='' ? $proyecto->satisfacion : null,['class'=>'col-xs-10 col-sm-10','placeholder' => 'Seleccione'])!!}

					<br><br><a href="http://proyectosenfermeria.com/manual/encuesta_satisfacion.docx" target="_blank" style="color: red;" title="clic para descargar">Descargar Modelo</a>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar resultados de encuestas (Excel)*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="satisfaccion-file" class="ace-file">@if($proyecto->file_satisfaccion!='')<a href="{{ Storage::url($proyecto->file_satisfaccion) }}" title="clic para ver" target="_blank">Ya existe un archivo</a>@endif
				</div>
			</div>

			
							
		</div>

		<div class=" col-sm-offset-1 col-sm-5">
			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Objetivos</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="objetivos" class="stj-edit-basic">{!! $proyecto->objetivos !!}</div>
				</div>
			</div>
		

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Justificación</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="justificacion" class="stj-edit-basic">{!! $proyecto->justificacion !!}</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Logros</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="logros" class="stj-edit-basic">{!! $proyecto->logros !!}</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Dificultades</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="dificultades" class="stj-edit-basic">{!! $proyecto->dificultades !!}</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-12" style="color: #641E16;" title="Opcional">Evidencias (solo imágenes)*</label>
				<div class="col-sm-12 col-xs-12">
					<div class="dropzone"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" >
				<div >
					<div class="table-header">
      				<a href="#nuevo" class="stj-acciones stj-acciones-new" title="Nuevo" data-toggle="modal"><i class="fa fa-plus"></i></a>
								Equipo {{\App\RsuProyecto::find('1')->id}} &nbsp;&nbsp;&nbsp;
					</div>
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center" id="lll">DNI</th>
									<th class="center">Nombres y Apellidos</th>
									<th class="center" class="hidden-480">Escuela</th>
									<th class="center" class="hidden-480">Tipo</th>
									<th class="center" class="hidden-480">Acciones</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12" >
				<div ><hr>
					<ul class="ace-thumbnails clearfix" >
						@foreach($proyecto->evidencias as $e)

							<li>
								<a href="{{ Storage::url($e->file) }}" title="Evidencia: {{ $proyecto->titulo }}" data-rel="colorbox">
									<img width="150" height="150" alt="150x150" src="{{ Storage::url($e->file) }}" />
								</a>
								<div class="tools tools-top">
									
									<a href="{{route('rsu.mp.img-d',[$e->id,$proyecto->id])}}">
										Eliminar <i class="ace-icon fa fa-times red" ></i>
									</a>
								</div>
							</li>
						@endforeach
					</ul>
			</div>
			</div>
		</div>

		<div class="col-sm-12 col-xs-12" ><br><br>
			<div class="hr dotted"></div><br><br><br>
			<div class="form-group" align="center">
					<button type="submit" class="width-30 btn btn-sm btn-primary">
					<i class="ace-icon fa  fa-check"></i>
					<span class="bigger-110">Enviar</span>
					</button>								
			</div>	
			<div>
				<div class="btn-toolbar" data-role="editor-toolbar"
        data-target="#editor"></div> 
			</div>
		</div>

		
{!! Form::close() !!}
			                  
								<!-- PAGE CONTENT ENDS -->
	<!-- Fin -->									

</div>	



@endsection
@section('script')
		
{!!Html::script('plantilla/js/stj/stj-editor-basic.js')!!}
{!!Html::script('/plantilla/js/dropzone.min.js')!!}
{!!Html::script('/plantilla/js/jquery.colorbox.min.js')!!}

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

//Enviar datos al servidor
	$('form').on('submit', function() {
		//stj_editor_enviar('Nombre_px_enviar_a_servidor','#ID_del_div_con_la_clase_<stj-editor-basic>');
		stj_editor_enviar('objetivos','#objetivos');
		stj_editor_enviar('justificacion','#justificacion');
		stj_editor_enviar('logros','#logros');
		stj_editor_enviar('dificultades','#dificultades');
	});

	//Imagenes para las evidencias
	var myDropzone = new Dropzone('.dropzone', {
		url: '/rsu/mis_proyectos/img/'+{{$proyecto->id}},
		paramName: 'foto',
		acceptedFiles: 'image/*',
		maxFilesize: 2,
		headers:{
			'X-CSRF-TOKEN':'{{ csrf_token() }}'
		},
		dictDefaultMessage:'Arrastra las fotos aquí para subirlas'
	});

	myDropzone.on('error', function(file,res){
		$('.dz-error-message:last > span').text(res.errors.foto[0]);
	});

	Dropzone.autoDiscover=false;

	//llamar las librerias del file- pa' que se vea bonito XD
	$('.ace-file').ace_file_input();		
	//Checkbox Multiple	
	$(".RsuEjes-stj" ).click(function() {
		var idCheckEje=$(this).attr("id");
		if( $('#'+idCheckEje).prop('checked')){

    		$.get(`/rsu/mis_proyectos/lineas/`+idCheckEje,function(res){
				res.forEach(element => {
				var idCheckLinea=element.id;
				//console.log(element.id);
				$(".agregar" ).append("<label class='.clic ejeCheck-"+idCheckEje+"'><input type='checkbox' class='ace' name='lineas[]' value='"+idCheckLinea+"'/><span class='lbl'> <i>"+element.abr+"</i> - "+element.lineamiento+"</span></label><br class='ejeCheck-"+idCheckEje+"'>" );
					   });
				});	
		}

		else{	$(".ejeCheck-"+idCheckEje).remove();	}
	});

jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} de {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });


   //datatables


				var myTable=$('#dynamic-table').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": '{!!route('rsu.mp.equipo-show', $proyecto->id)!!}',
			        "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                 	

			        "columns" : [
				        {data:"dni"},
				        {data:"nombres"},
				        {data:"escuela"},
				        {data:"tipo"},
				        {data:null,bSortable: false, render: 
					        	function ( data, type, row ) {
					        	return "<div class='center action-buttons'><a href='#' class='stj-acciones stj-acciones' title='Ver más' data-id='"+data.id_user+"'><i class='fa fa-plus'></i></a><a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='"+data.id_user+"'><i class='fa fa-trash'></i></a></div>";
	                			}
                		}
			        ],
			    } );
})
</script>

@endsection