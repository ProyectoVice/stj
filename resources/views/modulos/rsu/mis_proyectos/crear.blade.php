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
	<li class=""><a href="{{ url('rsu-misproyectos') }}"> Nuevo Proyecto</a></li>
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
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Culminación</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="titulo" class="col-xs-10 col-sm-5">
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
		<script type="text/javascript">
			$('.ace-file').ace_file_input();
		</script>
@endsection