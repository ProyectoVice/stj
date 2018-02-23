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
	<li class=""><a href="{{ url('rsu-misproyectos') }}"> Mis Proyectos</a></li>
	<li class="">Nuevo</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
	<div class="page-content">
		<h3 align="center">Ingrese los datos de su proyecto</h3>
		<div class="row">
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		{!! Form::open(['route' => 'rsu-misproyectos.store', 'method' => 'POST', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}

			<input name="_token" type="hidden" value="BtE7hzewiNmqDW9cC0InhpHThYPjNN4FbNWRv5pA">
		<div class="col-xs-12">	
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Título del Proyecto</label>
				<div class="col-sm-9">

					<input type="text" placeholder="Escribir aquí" name="titulo" class="col-xs-10 col-sm-5">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Aprobación</label>
				<div class="col-sm-9">
					<input type="text" placeholder="N° / Nombre del doc." name="titulo" class="col-xs-10 col-sm-5">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Aprobación*</label>
				<div class="col-xs-10 col-sm-4">
					<input type="file" name="aprobacion-file" class="ace-file">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lugar</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Lugar dónde se realiza la RSU" name="lugar" class="col-xs-10 col-sm-5">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Beneficiarios</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Población o comunidad" name="beneficiarios" class="col-xs-10 col-sm-5">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Aliados</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Grupos de interés / Aliados estratégicos" name="aliados" class="col-xs-10 col-sm-5">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Porcentaje de avance</label>
				<div class="col-sm-9">
					<input type="number" name="porcentaje" max="100" min="0" class="col-xs-10 col-sm-5">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Objetivos</label>
				<div class="col-sm-9">
					<textarea class="col-xs-10 col-sm-5" name="objetivos"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Justificación</label>
				<div class="col-sm-9">
					<textarea class="col-xs-10 col-sm-5" name="justificacion"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Logros (indicadores)</label>
				<div class="col-sm-9">
					<textarea class="col-xs-10 col-sm-5" name="logros"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Dificultades</label>
				<div class="col-sm-9">
					<textarea class="col-xs-10 col-sm-5" name="dificultades"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Culminación</label>
				<div class="col-sm-9">
					<input type="text" placeholder="N° / Nombre del doc." name="culminacion" class="col-xs-10 col-sm-5">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Culminación*</label>
				<div class="col-xs-10 col-sm-4">
					<input type="file" name="culminacion-file" class="ace-file">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Satisfación de Beneficiarios</label>
				<div class="col-sm-9">
					{!!Form::select('satisfacion_involucrados',$satisfacciones,null,['class'=>'col-xs-10 col-sm-5','placeholder' => 'Seleccione'])!!}

					<br><br><a href="http://proyectosenfermeria.com/manual/encuesta_satisfacion.docx" target="_blank" style="color: red;" title="clic para descargar">Descargar Modelo</a>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar resultados de encuestas (Excel)*</label>
				<div class="col-xs-10 col-sm-4">
					<input type="file" name="encuestas-file" class="ace-file">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Evidencias (fotos en PDF)*</label>
				<div class="col-xs-10 col-sm-4">
					<input type="file" name="evidencias-file" class="ace-file">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-6">
					<input type="hidden" value="137" name="id_univ">
					<button type="submit" class="width-35 pull-right btn btn-sm btn-primary col-xs-10 col-sm-5">
					<i class="ace-icon fa  fa-check"></i>
					<span class="bigger-110">Enviar</span>
					</button>
				</div>										
			</div>
									
									
		</div>
{!! Form::close() !!}
			                  
								<!-- PAGE CONTENT ENDS -->



						</div>
					</div>
	<!-- Fin -->									

</div>	



@endsection
@section('script')
		

		<script type="text/javascript">
			$('.ace-file').ace_file_input();
			
		</script>

@endsection