@extends('plantilla.usuario')
@section('titulo','Usuario - Detalle')
@section('activacion')
@endsection
@section('estilos')
	<style type="text/css">
		#textEditar{
    		border: none;
		   border-bottom: 2px solid #003399;
		}
	</style>  
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Expediente</li>
	<li class=""><a href="{{ route('usuario.nue.index') }}"> Usuarios</a></li>
	<li class="">Ver Más</li>
</ul>
@endsection
@section('contenido')
<div class="col-xs-12">
		{!! Form::model($usuario,['route' => ['usuario.nue.update',$usuario->id], 'method' => 'PUT','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}
								<!-- PAGE CONTENT BEGINS -->

								<div class="hr dotted"></div>
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" alt="Alex's Avatar" src="{{ $RutaDeMiFotoPerfil }}" style="vertical-align: top;">
												</span>
													
												<div class="space-4"></div>

												<div style="background-color:#778899; border-radius: 10px 10px 0 0;">
													<div class="inline position-relative">
														<span class="white">{{$usuario->nombres}}<br>{{$usuario->apellido_paterno.' '.$usuario->apellido_materno}}<br>({{$usuario->dni}})</span>
													</div>
												</div>
											</div>
											<div class="space-6"></div>
											<div class="profile-contact-info">
												<div class="profile-contact-links align-left">
													<p><label><i class="ace-icon fa fa-hand-o-right"></i> Roles: <br></label>
														<div class="hr dotted"></div>	
														@foreach($roles as $id =>$rol)
															<label>
																<input type="checkbox" value="{{$id}}" {{$usuario->roles->pluck('id')->contains($id) ? 'checked':''}}  
																name="roles[]"> {{$rol}}
															</label> <br>
														@endforeach		

													</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-9">
										<div class="space-6"></div>
											<div class="space-12"></div>
											<label><b>&nbsp;&nbsp;Más Información</b></label>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> DNI </div>
													<div class="profile-info-value">
														<input type="text" id="textEditar" placeholder="Escribir aquí" name="dni" class="form-control" required="required" value="{!! $usuario->dni or $dni!!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Nombres </div>
													<div class="profile-info-value">
														<input type="text" placeholder="Escribir aquí" name="nombres" id="textEditar" class="textEditar form-control" required="required" value="{!! $usuario->nombres or old('nombres') !!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Ap. Paterno </div>
													<div class="profile-info-value">
														<input type="text" placeholder="Escribir aquí" name="apellido_paterno" id="textEditar" class="form-control" required="required" value="{!! $usuario->apellido_paterno or old('apellido_paterno') !!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Ap. Materno </div>
													<div class="profile-info-value">
														<input type="text" placeholder="Escribir aquí" name="apellido_materno" id="textEditar" class="form-control" required="required" value="{!! $usuario->apellido_materno or old('apellido_materno') !!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Fecha de Nacimiento </div>
													<div class="profile-info-value">
														<input type="date" placeholder="Escribir aquí" name="f_nac" class="form-control" id="textEditar" value="{!! $usuario->f_nac or old('f_nac') !!}">
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name"> Domicilio actual</div>
													<div class="profile-info-value">
														<input type="text" placeholder="Nombre de la Av., Calle, Jr., Otros" name="domicilio" class="col-sm-8" required="required" id="textEditar" value="{!! $usuario->domicilio or old('domicilio') !!}">
														<input type="text" placeholder="N°" name="n_domicilio" class="col-sm-offset-1 col-sm-3" required="required" id="textEditar" value="{!! $usuario->n_domicilio or old('n_domicilio') !!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Telefono</div>
													<div class="profile-info-value">
														<input type="text" placeholder="Escribir aquí" name="tel" id="textEditar" class="form-control" value="{!! $usuario->tel or old('tel') !!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> N Celular</div>
													<div class="profile-info-value">
														<input type="text" placeholder="Escribir aquí" name="cel" id="textEditar" class="form-control" value="{!! $usuario->cel or old('cel') !!}">
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> E-mail</div>
													<div class="profile-info-value">
														<input type="email" placeholder="Escribir aquí" name="email" class="form-control" id="textEditar" required="required" value="{!! $usuario->email or old('email') !!}">
													</div>
												</div> 
												<div class="profile-info-row">
													<div class="profile-info-name"> Contraseña</div>
													<div class="profile-info-value">
														<input type="password" placeholder="Opcional" name="password" id="textEditar" class="form-control">
													</div>
												</div>
												
									</div>
												<div class="col-sm-12 col-xs-12" >
													<div class="hr dotted"></div>
														<div class="form-group" align="center">
															<button type="submit" class="width-30 btn btn-sm btn-primary">
																<i class="ace-icon fa  fa-refresh"></i>
																<span class="bigger-110"> Actualizar</span>
															</button>								
														</div>	
														<div>
															<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor"></div> 
														</div>
												</div>
								</div> 
								<!-- PAGE CONTENT ENDS -->
								
							</div>
	</div>
	{!! Form::close() !!}	
</div>
@endsection
