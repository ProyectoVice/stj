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
<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="hr dotted"></div>
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" alt="Alex's Avatar" src="{{URL::to('plantilla/images/avatars/profile-pic.jpg')}}" height="200px;" style="vertical-align: top;">
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
															@foreach($usuario->roles as $r)
															<i class="ace-icon fa fa-check-square-o"></i><span >{{$r->rol}}<br></span>
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
														<span id="username">{{$usuario->dni}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Nombres </div>
													<div class="profile-info-value">
														<span id="country">{{$usuario->nombres}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Ap. Paterno </div>
													<div class="profile-info-value">
														<span id="country">{{$usuario->apellido_paterno}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Ap. Materno </div>
													<div class="profile-info-value">
														<span id="country">{{$usuario->apellido_materno}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Fecha de Nacimiento </div>
													<div class="profile-info-value">
														<span id="country">{{$usuario->f_nac}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Lugar de Nacimiento</div>
													<div class="profile-info-value">
													<span >{{$usuario->distrito->distrito.' - '.$usuario->distrito->provincia->provincia.' - '.$usuario->distrito->provincia->departamento->departamento}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Domicilio actual</div>
													<div class="profile-info-value">
														<span >{{$usuario->domicilio.' '.$usuario->n_domicilio}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Telefono</div>
													<div class="profile-info-value">
														<span >{{$usuario->tel}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> N Celular</div>
													<div class="profile-info-value">
														<span >{{$usuario->cel}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Genero </div>
													<div class="profile-info-value">
														<span id="country">
															@if($usuario->genero=='1')
																Masculino
															@elseif($usuario->genero=='0')
																Femenino
															@endif
														</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Estado de Login </div>
													<div class="profile-info-value">
														<span id="country">
															@if($usuario->estado_login=='1')
																Activo
															@elseif($usuario->estado_login=='0')
																Inactivo
															@endif
														</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Estado Civil </div>
													<div class="profile-info-value">
														<span >{{$usuario->est_civil->est_civil}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Religión </div>
													<div class="profile-info-value">
														<span >{{$usuario->religion->religion}}</span>
													</div>
												</div>
											</div>
											<br><br><br><br><br><br>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div>
<!--bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb-->


@endsection
