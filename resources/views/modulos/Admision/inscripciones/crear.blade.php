@extends('plantilla.usuario')
@section('titulo','Admision - Inscripciones')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/dropzone.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Admision</li>
	<li class=""><a href="{{ route('adminsion.ins.index', ['tipo'=>$tipo]) }}"> Inscripciones</a></li>
	<li class="">Nuevo</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
		<h3 align="center"> Llenar los datos de postulante</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		{!! Form::open(['route' => 'adminsion.ins.store', 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
			{{ csrf_field() }}
		<div class="col-sm-12">
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">DNI</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="text" placeholder="Escribir aquí" name="dni" class="form-control" required="required" value="{!! $usuario->dni or $dni!!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nombre</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="nombres" class="form-control" required="required" value="{!! $usuario->nombres or old('nombres')!!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Apellido Paterno</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="text" placeholder="Escribir aquí" name="apellido_paterno" class="form-control" required="required" value="{!! $usuario->apellido_paterno or old('apellido_paterno')!!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Apellido Materno</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="apellido_materno" class="form-control" required="required" value="{!! $usuario->apellido_materno or old('apellido_materno') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Fecha de nacimiento</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="date" placeholder="Escribir aquí" name="f_nac" class="form-control" required="required" value="{!! $usuario->f_nac or old('f_nac') !!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Correo Electrónico</label>
				<div class="col-sm-4">
					<input type="email" placeholder="Escribir aquí" name="email" class="form-control" required="required" value="{!! $usuario->email or old('email') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Departamento de Nacimiento</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('departamento',$departamentos,null,['id'=>'departamento_nac', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Departamento'])!!}
					</div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Provincia de Nacimiento</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('provincia',$provincias,null,['id'=>'provincia_nac', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Provincia'])!!}
					</div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Distrito de Nacimiento</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('distrito_nac',$distritos,null,['required','id'=>'distrito_nac', 'class'=>'col-xs-12 col-sm-9', 'value'=> '$usuario->distrito_nac or old("distrito_nac")','placeholder' => 'Distrito'])!!}
					</div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Domicilio</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="domicilio" class="form-control" required="required" value="{!! $usuario->domicilio or old('domicilio') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº de Domicilio</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="n_domicilio" class="form-control" required="required" value="{!! $usuario->n_domicilio or old('n_domicilio') !!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº Celular</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="cel" class="form-control" required="required" value="{!! $usuario->cel or old('cel') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº Telefónico</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="tel" class="form-control" required="required" value="{!! isset($usuario) ? $usuario->tel : ''!!}">
				</div>

				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Tipo de sangre</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="tipo_sangre" class="form-control" required="required" value="{!! isset($usuario) ? $usuario->tipo_sangre : ''!!}">
				</div>
			</div>

			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Sede</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('sede',$sede,null,['required','id'=>'sede', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Sede'])!!}
					</div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Escuela</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('escuelasede',$escuelasede,null,['required','id'=>'escuelasede', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Escuela'])!!}
					</div>
				</div>
			</div>


			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Colegio 5to</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('colegiov',$colegio,null,['required','id'=>'colegiov', 'class'=>'col-xs-12 col-sm-12','placeholder' => 'Colegio'])!!}
					</div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Colegio 4to</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('colegioiv',$colegio,null,['required','id'=>'colegioiv', 'class'=>'col-xs-12 col-sm-12','placeholder' => 'Colegio'])!!}
					</div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Preparación</label>
				<div class="col-sm-4">
					<div class="clearfix">
						{!!Form::select('preparacion',$preparacion,null,['required','id'=>'preparacion', 'class'=>'col-xs-12 col-sm-12','placeholder' => 'Colegio'])!!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xs-12" >
			<div class="hr dotted"></div>
				<div class="form-group" align="center">
					<input type="hidden" name="proceso" id="proceso" value="{!! $proceso!!}">
					<input type="hidden" name="n_comprobante" id="n_comprobante" value="{!! $n_comprobante!!}">
					<input type="hidden" name="f_comprobante" id="f_comprobante" value="{!! $f_comprobante!!}">
					<button type="submit" class="width-30 btn btn-sm btn-primary">
						<i class="ace-icon fa  fa-check"></i>
						<span class="bigger-110">Enviar</span>
					</button>								
				</div>	
				<div>
					<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor"></div> 
				</div>
			<input type="hidden" name="tipo" value="{{$tipo}}">
		</div>		
{!! Form::close() !!}			                  
								<!-- PAGE CONTENT ENDS -->
	<!-- Fin -->							

</div>	
@endsection
@section('script')
<script type="text/javascript">
 //Selects Anidados de departamentos-prov y Dist

  $("#sede").change(event => {		    	
			  //Usaremos la ruta que creamos para los selects anidados en "Tutor"
			  		$.get(`/adminsion/inscripciones/listaescuela/${event.target.value}`,function(res,sta){
			  		$("#escuelasede").empty();
			  //console.log(res);
			  		$("#escuelasede").append(`<option value=''>Escuela</option>`);
			  		res.forEach(element => {
			  		$("#escuelasede").append(`<option value=${element.id}>${element.escuela}</option>`);
			  		});
			 	 });
			  });

  //Lugar de nacimiento
    $("#departamento_nac").change(event => {
      //Usaremos la ruta que creamos para los selects anidados en "Tutor"
      $.get(`/prov/${event.target.value}`,function(res,sta){
        $("#provincia_nac").empty();
        //console.log(res);
        $("#provincia_nac").append(`<option value=''>Provincia</option>`);
        res.forEach(element => {
          $("#provincia_nac").append(`<option value=${element.id}>${element.provincia}</option>`);
        });
      });
    });
    $("#provincia_nac").change(event => {
      $.get(`/dist/${event.target.value}`,function(res,sta){
        $("#distrito_nac").empty();
        //console.log(res);
        $("#distrito_nac").append(`<option value=''>Distrito</option>`);
        res.forEach(element => {
          $("#distrito_nac").append(`<option value=${element.id}>${element.distrito}</option>`);
        });
      });
    });
</script>
@endsection