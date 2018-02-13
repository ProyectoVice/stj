@if(Auth::user()->hasRoles(['PersonalAdmision']))					
<li class="">
	<a href="#" class="dropdown-toggle" title="Gestión Admision">
		<i class="menu-icon fa fa-desktop" ></i>
			<span class="menu-text"> Admisión </span>
				<b class="arrow fa fa-angle-down"></b>
	</a>

	<b class="arrow"></b>

	<ul class="submenu">
		@if(Auth::user()->hasRoles(['Administrador Admision']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción General y Modalidades
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador CEPREVAL']))						
		<li class="">						
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción CEPREVAL
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Posgrado']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Posgrado
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['AdministradorSegundaEEdu']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Segunda Especialidad Educación
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['AdministradorSegundaEEnf']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Segunda Especialidad Enfermeria
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['AdministradorEstudiosCompEdu']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Estudios Complementarios Educación
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador idiomas']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Idiomas
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Estudios a Distancia']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Estudios a Distancia y Complementarios
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Diplomados']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Diplomado
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador PROCATP']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción PROCATP
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador PROMASTER']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción PROMASTER
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Admision']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción docente
			</a>
				<b class="arrow"></b>
		</li>
		@endif
			<!-- Modulo inscripción del docente -->
		@if(Auth::user()->hasRoles(['Docente']))
		<li class="">
			<a href="">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción 
			</a>
				<b class="arrow"></b>
		</li>
		@endif			
	</ul>
</li>
@endif