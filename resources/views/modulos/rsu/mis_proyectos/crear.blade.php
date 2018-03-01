@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/dropzone.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class=""><a href="{{ url('rsu-misproyectos') }}"> Mis Proyectos</a></li>
	<li class="">Nuevo</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
		<h3 align="center"> Llenar los datos de su proyecto</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		{!! Form::open(['route' => 'rsu-misproyectos.store', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
			{{ csrf_field() }}
		<div class="col-sm-6">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Título del Proyecto</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="titulo" class="form-control" required="required">
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
					<input type="text" placeholder="N° / Nombre del doc." name="aprobacion" class="col-xs-10 col-sm-10">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Aprobación*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="aprobacion-file" class="ace-file">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lugar</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Lugar dónde se realiza la RSU" name="lugar" class="col-xs-10 col-sm-10">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Beneficiarios</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Población o comunidad" name="beneficiarios" class="col-xs-10 col-sm-10">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Aliados</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Grupos de interés / Aliados estratégicos" name="aliados" class="col-xs-10 col-sm-10">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Porcentaje de avance</label>
				<div class="col-sm-9">
					<input type="number" name="porcentaje" max="100" min="0" class="col-xs-10 col-sm-10">
				</div>
			</div>
						
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Culminación</label>
				<div class="col-sm-9">
					<input type="text" placeholder="N° / Nombre del doc." name="culminacion" class="col-xs-10 col-sm-10">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Culminación*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="culminacion-file" class="ace-file">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Satisfación de Beneficiarios</label>
				<div class="col-sm-9">
					{!!Form::select('satisfacion',$satisfacciones,null,['class'=>'col-xs-10 col-sm-10','placeholder' => 'Seleccione'])!!}

					<br><br><a href="http://proyectosenfermeria.com/manual/encuesta_satisfacion.docx" target="_blank" style="color: red;" title="clic para descargar">Descargar Modelo</a>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar resultados de encuestas (Excel)*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="satisfaccion-file" class="ace-file">
				</div>
			</div>

			
							
		</div>

		<div class=" col-sm-offset-1 col-sm-5">
			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Objetivos</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="objetivos" class="stj-edit-basic"></div>
				</div>
			</div>
		

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Justificación</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="justificacion" class="stj-edit-basic"></div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Logros</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="logros" class="stj-edit-basic"></div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Dificultades</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="dificultades" class="stj-edit-basic"></div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-12" style="color: #641E16;" title="Opcional">Evidencias (solo imágenes)*</label>
				<div class="col-sm-12 col-xs-12">
					<div class="dropzone"></div>
				</div>
			</div>
		</div>
		

		<div class="col-sm-12 col-xs-12" >
			<div class="hr dotted"></div>
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
	new Dropzone('.dropzone', {
		url: '/evidencias/1/imagen',
		paramName: 'foto',
		//acceptedFiles: 'image/*',
		//maxFilesize: 2,
		headers:{
			'X-CSRF-TOKEN':'{{ csrf_token() }}'
		},
		dictDefaultMessage:'Arrastra las fotos aquí para subirlas'
	});

	myDropzone.on('error', function(file, res){
		var msg = res.foto[0];
		$('.dz-error-message:last > span').text(msg);
	})

	Dropzone.autoDiscover=false;

	//llamar las librerias del file- pa' que se vea bonito XD
	$('.ace-file').ace_file_input();		
	//Checkbox Multiple	
	$(".RsuEjes-stj" ).click(function() {
				var idCheckEje=$(this).attr("id");
				if( $('#'+idCheckEje).prop('checked')){

    				$.get(`/rsu-lineas/`+idCheckEje,function(res){
					   res.forEach(element => {
					   var idCheckLinea=element.id;
					   //console.log(element.id);
					   $(".agregar" ).append("<label class='.clic ejeCheck-"+idCheckEje+"'><input type='checkbox' class='ace' name='lineas[]' value='"+idCheckLinea+"'/><span class='lbl'> <i>"+element.abr+"</i> - "+element.lineamiento+"</span></label><br class='ejeCheck-"+idCheckEje+"'>" );
					     	 });
					   });	
				}

					else{	$(".ejeCheck-"+idCheckEje).remove();	}
	});

</script>

@endsection