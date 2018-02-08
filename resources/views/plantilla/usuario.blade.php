<!DOCTYPE html>
<html lang="es">
<?php 
$variable="";

?>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>STJ :: @yield('titulo')</title>
		<link rel="icon" type="image/png" href="{{url('plantilla/images/gallery/unheval-logo.png')}}" />

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		{!!Html::style('plantilla/css/bootstrap.min.css')!!}
		{!!Html::style('plantilla/font-awesome/4.5.0/css/font-awesome.min.css')!!}
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		{!!Html::style('plantilla/css/fonts.googleapis.com.css')!!}

		<!-- ace styles -->
		{!!Html::style('plantilla/css/ace.min.css')!!}
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="plantilla/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		{!!Html::style('plantilla/css/ace-skins.min.css')!!}
		{!!Html::style('plantilla/css/ace-rtl.min.css')!!}

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="plantilla/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		{!!Html::script('plantilla/js/ace-extra.min.js')!!}
		@yield('activacion')
		@yield('estilos')

	</head>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<img src="{{URL::to('plantilla/images/gallery/unheval-logo.png')}}" height="23px;" style="vertical-align: top;">
							UNHEVAL
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="blue dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-blue dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notificaciones
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-blue">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>

									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										Ver todas las Notificaciones
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>					
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{URL::to('plantilla/images/avatars/avatar.png')}}"
								alt="Foto" />
								<span class="user-info">
									<small>{{ Auth::user()->nombres }}</small>
									{{ Auth::user()->apellido_paterno.' '.Auth::user()->apellido_materno }}
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Ajustes
									</a>
								</li>
								<li>
									<a href="{{url('manual/directivo.pdf')}}" target="_black">
										<i class="ace-icon fa fa-exclamation"></i>
										Ayuda
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<form method="POST" action="{{ route('logout') }}" name="salir">
										{{ csrf_field() }}
									</form>
									<a href="javascript:document.salir.submit()">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
										
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

					
							@foreach(Auth::user()->roles as $rol)
								{{-- Mostrar los avatars/roles de usuario --}}
								{!!Auth::user()->hasAvatar($rol)!!}
							@endforeach
						
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<!--MODULOS-->
						<!-- Administrador -->
						@if(Auth::user()->hasRoles(['Administrador General']))
						<li class="">
							<a href="{{url('#')}}">
								<i class="menu-icon fa fa-users"></i>
								<span class="menu-text"> Usuarios </span>
							</a>
							<b class="arrow"></b>
						</li>
						@endif
						<!-- Fin Administrador -->

						{{-- Docente --}}
						@if(Auth::user()->hasRoles(['Docente']))
						
						<li class="">
							<a href="#" class="dropdown-toggle" title="Responsabilidad Social Universitaria">
								<i class="menu-icon fa fa-leaf" ></i>
								<span class="menu-text"> RSU </span>
								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Proyectos UNHEVAL
									</a>
									<b class="arrow"></b>
								</li>
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Proyectos Facultad
									</a>
									<b class="arrow"></b>
								</li>
								<li class="">
									<a href="{{ url('rsu-misproyectos') }}">
										<i class="menu-icon fa fa-caret-right"></i>
										Mis Proyectos
									</a>
									<b class="arrow"></b>
								</li>
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Invitaciones
									</a>
									<b class="arrow"></b>
								</li>
							</ul>
						</li>
						<!--modulos de admisión!-->
						<li class="">
							<a href="#" class="dropdown-toggle" title="Gestión Admision">
								<i class="menu-icon fa fa-leaf" ></i>
								<span class="menu-text"> Admisión </span>
								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Inscripciones
									</a>
									<b class="arrow"></b>
								</li>
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Inscripción docente
									</a>
									<b class="arrow"></b>
								</li>			
							</ul>
						</li>
						<!--Fin modulos de admisión!-->
						@endif
						{{-- Fin Docente --}}
					<!-- <li class="active open"> -->
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> U. Serv Univ </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Comensales
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Informes Nutricion
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									N° Becas
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Exon. Pago Cent Med
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Asistencia Social
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Servicio Psicopedagogía
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Centro Médico
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu nav-show">
									<li class="">
										<a href="">
											<i class="menu-icon fa fa-caret-right"></i>
											Medicina
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="">
											<i class="menu-icon fa fa-caret-right"></i>
											Odontología
										</a>
										<b class="arrow"></b>
									</li>
									
								</ul>
							</li>

						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-futbol-o"></i>
							<span class="menu-text"> U. Act Física Mental </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Estudiantes
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Reportes
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> U. Form Cultural </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Estudiantes
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Reportes
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					<li class="">
						<a href="">
							<i class="menu-icon fa fa-search"></i>
							<span class="menu-text"> Buscar estudiante </span>
						</a>
						<b class="arrow"></b>
					</li>			
					
				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<!-- Rutas -->
						
						@yield('ruta') 
						
					</div>

					<div class="page-content">
						<div class="row">
							@yield('contenido')

						</div>
					</div>


				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">UNIVERSIDAD NACIONAL HERMILIO VALDIZÁN</span>
							- HUÁNUCO &copy; 2018
						</span>

						&nbsp; &nbsp;
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		{!!Html::script('plantilla/js/jquery-2.1.4.min.js')!!}

		<!-- <![endif]-->

		<!--[if IE]>
<script src="plantilla/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='plantilla/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{!!Html::script('plantilla/js/bootstrap.min.js')!!}

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		{!!Html::script('plantilla/js/ace-elements.min.js')!!}
		{!!Html::script('plantilla/js/ace.min.js')!!}
		<!-- inline scripts related to this page -->
		<!--Otros Scripts-->
		@yield('script')
		<!--FIN de Otros Scripts-->
	</body>
</html>
