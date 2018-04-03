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
	<li class=""><a href="{{ url('inscripcion-general') }}"> Inscripciones</a></li>
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
		<div class="col-sm-6">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nombre</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="nombres" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Apellido Paterno</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="apellido_paterno" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Apellido Materno</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="apellido_materno" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fecha de nacimiento</label>
				<div class="col-sm-9">
					<input type="date" placeholder="Escribir aquí" name="f_nac" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">DNI</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="dni" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Correo Electrónico</label>
				<div class="col-sm-9">
					<input type="email" placeholder="Escribir aquí" name="email" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Departamento de Nacimiento</label>
				<div class="col-sm-9">
					<div class="clearfix">
                        {!!Form::select('departamento',$departamentos,null,['required','id'=>'departamento_nac', 'class'=>'col-xs-12 col-sm-6','placeholder' => 'Departamento'])!!}
                    </div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Provincia de Nacimiento</label>
				<div class="col-sm-9">
					<div class="clearfix">
                        {!!Form::select('provincia',$provincias,null,['required','id'=>'provincia_nac', 'class'=>'col-xs-12 col-sm-6','placeholder' => 'Provincia'])!!}
                     </div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Distrito de Nacimiento</label>
				<div class="col-sm-9">
					 <div class="clearfix">
                        {!!Form::select('distrito_nac',$distritos,null,['required','id'=>'distrito_nac', 'class'=>'col-xs-12 col-sm-6','placeholder' => 'Distrito'])!!}
                      </div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Domicilio</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="domicilio" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nº de Domicilio</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="n_domicilio" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nº Telefónico</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="tel" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nº Celular</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="cel" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tipo de sangre</label>
				<div class="col-sm-9">
					<input type="text" placeholder="Escribir aquí" name="tipo_sangre" class="form-control" required="required">
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
<script type="text/javascript">
 //Selects Anidados de departamentos-prov y Dist
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