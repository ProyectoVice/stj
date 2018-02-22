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
		<form method="POST" class="form-horizontal">
			<input name="_token" type="hidden" value="BtE7hzewiNmqDW9cC0InhpHThYPjNN4FbNWRv5pA">
		<div class="col-xs-12">	
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Título del Proyecto</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" class="col-xs-10 col-sm-5">
				</div>
			</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nombres </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="col-xs-10 col-sm-5" disabled="true" value="JUBERTH">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Apellidos </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="col-xs-10 col-sm-5" disabled="true" value="CABELLO CANTEÑO">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Facultad </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="col-xs-10 col-sm-5" disabled="true" value="Medicina">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Escuela </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="col-xs-10 col-sm-5" disabled="true" value="MEDICINA HUMANA">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Tipo de Beca </label>
										<div class="col-sm-9">
										<select required="required" id="beca" class="col-xs-10 col-sm-5" name="TipoBeca"><option value="">Seleccione</option><option value="A">A</option><option value="B">B</option><option value="C" selected="selected">C</option></select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Caso Especial </label>
										<div class="col-sm-9">
										<select required="required" id="beca" class="col-xs-10 col-sm-5" name="caso_especial"><option value="0" selected="selected">Ninguno</option><option value="1">Victimas de Violencia Política</option><option value="2">Consejo Universitario</option><option value="3">Asamblea Universitaria</option><option value="4">Deportista Calificado</option></select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Estado </label>
										<div class="col-sm-9">
										<select required="required" id="beca" class="col-xs-10 col-sm-5" name="estado"><option value="">Seleccione</option><option value="1" selected="selected">Aprobado</option><option value="0">Desaprobado</option></select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Observaciones </label>
										<div class="col-sm-9">
										<textarea id="obs" class="col-xs-10 col-sm-5" rows="5" placeholder="De haber alguna observación escriba aquí..." name="obs" cols="50"></textarea>
										</div>
									</div>
									<br>
									<div class="form-group">
										<div class="col-sm-6">
											<input type="hidden" value="137" name="id_univ">
											<button type="submit" class="width-35 pull-right btn btn-sm btn-primary col-xs-10 col-sm-5">
											<i class="ace-icon fa  fa-pencil-square-o"></i>
											<span class="bigger-110">Editar</span>
											</button>
										</div>										
									</div>
									
							</div>
			                    </form>
								<!-- PAGE CONTENT ENDS -->



						</div>
					</div>
	<!-- Fin -->									

</div>	
@endsection
@section('script')

@endsection