@extends('plantilla.usuario')
@section('titulo','Ajustes')
@section('activacion')
@endsection
@section('estilos')
	<style type="text/css">
		label{
			font-size: 14px;
			color: blue;
			font-weight: bold;
		}
		p{
			font-size: 15px;
		}
		.thumb{
               border: 1px solid #000;
               margin: 10px 5px 0 0;
               width: 100%;
               text-align: center;
            }
	</style>
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-cog"></i>
	<li class="active">Ajustes</li>
</ul>
@endsection
@section('contenido')
     <!-- Small modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="EditarFotoEstudiante">
      <div class="modal-dialog modal-sm">
         <div class="modal-content">
				<div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Actualizar foto</h4>
            </div>
            <div class="modal-body">                        
               {!! Form::open(['route' => 'ajustes.foto','method'=>'PUT', 'class'=>'form-horizontal form-label-left','enctype'=>'multipart/form-data']) !!}
               	{{ csrf_field() }}
                  <div class="item form-group">
                     <div class="col-12">
                        <input type="file" id="files-foto" name="foto-avatar" accept="image/*"/><br>
                        <output id="lista"><img src="{{$RutaDeMiFotoPerfil}}" width="100%"></output>
                     </div>
                  </div>
             </div>
              <div class="modal-footer">
                     <input type="submit" class="btn btn-success" value="Actualizar" >
              </div>
               {!! Form::close() !!}
            
         </div>
      </div>
    </div>
    <!--FIN modal-->

<div class="hr dotted"></div>

<div class="col-xs-12">
	<h2 class="StepTitle" align="center">Actualizar mis datos</h2>
			<div align="center">
				<a href="#" title="Clic para actualizar foto" data-toggle="modal" 
                   data-target="#EditarFotoEstudiante" title="Editar">
				<span class="profile-picture">
					<img id="avatar" alt="avatar" src="{{$RutaDeMiFotoPerfil}}" height="170px;">

				</span>
				</a>
			</div><hr>
								<!-- PAGE CONTENT BEGINS -->
	{!! Form::open(['route' => 'ajustes.update', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> DNI </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="col-xs-10 col-sm-5"  value="{{Auth::user()->dni}}"  disabled="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nombres </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Código Universitario" class="col-xs-10 col-sm-5" value="{{Auth::user()->nombres}}" disabled="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Apellido Paterno </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Paterno" class="col-xs-10 col-sm-5"  value="{{Auth::user()->apellido_paterno}}"  disabled="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Apellido Materno </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Materno" class="col-xs-10 col-sm-5"  value="{{Auth::user()->apellido_materno}}"  disabled="true">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> E-mail </label>
										<div class="col-sm-9">
											<input type="email" name="email" id="form-field-1-1" placeholder="E-mail" class="col-xs-10 col-sm-5"  value="{{Auth::user()->email}}">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Domicilio </label>
										<div class="col-sm-9">
											<input type="text" name="domicilio" id="form-field-1-1" placeholder="Nombre de Calle, Av. Jr." class="col-xs-10 col-sm-4"  value="{{Auth::user()->domicilio}}"> <input type="text" name="n_domicilio" id="form-field-1-1" placeholder="N°" class="col-xs-10 col-sm-1"  value="{{Auth::user()->n_domicilio}}">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Contraseña </label>
										<div class="col-sm-9">
											<input type="text" name="pasword" id="form-field-1-1" placeholder="Opcional (cambiar contraseña)" class="col-xs-10 col-sm-5">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Mis Roles </label>
										<div class="col-sm-9">
											@foreach($misRoles as $mr)
												<ul>
													<li style="margin-top: 5px;"> {{ $mr->rol->descripcion}}</li>
												</ul>
											@endforeach
										</div>
									</div>
									
									
									<div class="form-group" >
										<div class="col-sm-6">
										
											<button type="submit" class="width-35 pull-right btn btn-sm btn-primary col-xs-10 col-sm-5">
											<i class="ace-icon fa fa-cog" ></i>
											<span class="bigger-110">Actualizar</span>
											</button>
										</div>
									</div>
	{!! Form::close() !!}
</div><!-- PAGE CONTENT ENDS -->
@endsection
@section('script')
<script type="text/javascript">
	//Mostrar imagenes del imput file
    function foto(evt) {
      var files = evt.target.files; // FileList object
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("lista").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
  	}      
      document.getElementById('files-foto').addEventListener('change', foto, false);
</script>
@endsection