@extends('plantilla.usuario')
@section('titulo','Usuario - Detalle')
@section('activacion')
@endsection
@section('estilos')  
@endsection
@section('ruta')

<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Expediente</li>
	<li class=""><a href="{{ route('usuario.nue.index') }}"> Registro</a></li>
	<li class="">Ver Más</li>
</ul>

@endsection
@section('contenido')
{!!Html::style('plantilla/css/bootstrap-duallistbox.css')!!}
<div class="col-xs-12">
	<div class="container">
		<form action="">
			<div class="form-group">
				<select  multiple="multiple" id="duallist" name = "duallistbox_demo1[]">
					<option >Opcion 1</option>
					<option selected>Opcion 2</option>
					<option >Opcion 3</option>
					<option >Opcion 4</option>
					<option selected>Opcion 5</option>
					<option >Opcion 6</option>
					<option >Opcion 7</option>
					<option >Opcion 8</option>
					<option >Opcion 9</option>
				</select>
			</div>
		</form>
	</div>
								<!-- PAGE CONTENT BEGINS -->

</div>								
{!!Html::script('plantilla/js/jquery.bootstrap-duallistbox.js')!!}
{!!Html::script('/plantilla/js/jquery-2.2.4.min.js')!!}
{!!Html::script('/plantilla/js/bootstrap.min.js')!!}	
<script>
	var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();
</script>

@endsection

