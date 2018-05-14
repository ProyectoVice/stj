@extends('plantilla.usuario')
@section('titulo','Programas - Inscripciones')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/dropzone.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Programa</li>
	<li class=""><a href="{{ route('diplomado.ins.index', ['tipo'=>$tipo]) }}"> Inscripciones</a></li>
	<li class="">Nuevo</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
		<h3 align="center"> Editar los datos del interesado</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		{!! Form::model($inscripcion,['route' => ['diplomado.ins.update',$inscripcion->id], 'method' => 'PUT','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}

			{{ csrf_field() }}
		<div class="col-sm-12">

			<div class="row form-group">				
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">DNI</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="text" placeholder="Escribir aquí" name="dni" class="form-control" required="required" value="{!! $inscripcion->dni !!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nombre</label>
				<div class="col-sm-4">				
					<input type="text" placeholder="Escribir aquí" name="nombres" class="form-control" required="required" value="{{ $inscripcion->nombres }}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Apellido Paterno</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="text" placeholder="Escribir aquí" name="apellido_paterno" class="form-control" required="required" value="{{ $inscripcion->apellido_paterno }}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Apellido Materno</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="apellido_materno" class="form-control" required="required" value="{{ $inscripcion->apellido_materno }}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Fecha de nacimiento</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="date" placeholder="Escribir aquí" name="f_nac" class="form-control" required="required" value="{{ $inscripcion->f_nac }}">
				</div>			
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Correo Electrónico</label>
				<div class="col-sm-4">
					<input type="email" placeholder="Escribir aquí" name="email" class="form-control" required="required" value="{!! $inscripcion->email !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Departamento de Nacimiento</label>
				<div class="col-sm-4">
					<div class="clearfix">
                        {!!Form::select('departamento',$departamentos,null,['id'=>'departamento_nac', 'class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Departamento'])!!}
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
                        {!!Form::select('distrito_nac',$distritos,null,['required','id'=>'distrito_nac', 'class'=>'col-xs-12 col-sm-9', 'value'=> '$inscripcion->distrito_nac','placeholder' => 'Distrito'])!!}
                      </div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Domicilio</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="domicilio" class="form-control" required="required" value="{!! $inscripcion->domicilio !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº de Domicilio</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="n_domicilio" class="form-control" required="required" value="{!! $inscripcion->n_domicilio !!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº Celular</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="cel" class="form-control" required="required" value="{!! $inscripcion->cel !!}">
				</div>
			</div>
			<div class="row form-group center">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Seleccionar estado</label>
				<div class="col-sm-4">
					<div class="clearfix">
						<select name="estado" class="col-xs-12 col-sm-9">
							<option value="activo" selected>Activo</option>
							<option value="suspendido">Suspendido</option>
						</select>
					</div>
				</div>
			</div>
		</div>									


		<div class="col-sm-12 col-xs-12" >
			<div class="hr dotted"></div>
				<div class="form-group" align="center">
					<button type="submit" class="width-30 btn btn-sm btn-primary">
						<i class="ace-icon fa  fa-check"></i>
						<span class="bigger-110">Guardar</span>
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