@if(Auth::user()->hasRoles(['Personal_Admision']))
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
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'Pregrado']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción General y Modalidades
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador CEPREVAL']))						
		<li class="">						
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'CEPREVAL']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción CEPREVAL
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Posgrado']))
		<li class="">
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'Posgrado_maestria']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Posgrado Maestria
			</a>
				<b class="arrow"></b>
		</li>		
		@endif
		@if(Auth::user()->hasRoles(['Administrador Posgrado']))
		<li class="">
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'Posgrado_doctorado']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
						Inscripción Posgrado Doctorado
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Posgrado']))
				<li class="">
					<a href="{{ route('adminsion.ins.index', ['tipo'=>'Posgrado_posdoctorado']) }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Inscripción Posgrado Posdoctorado
					</a>
					<b class="arrow"></b>
				</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador_Segunda_E_Educacion']))
		<li class="">
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'Segunda_especialidad_educacion']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Segunda Especialidad Educación
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador_Segunda_E_Enfermeria']))
		<li class="">
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'Segunda_especialidad_enfermeria']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Segunda Especialidad Enfermeria
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador_Estudios_C_Educacion']))
		<li class="">
			<a href="{{ route('adminsion.ins.index', ['tipo'=>'Estudios_complementarios']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Estudios Complementarios Educación
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador_Idiomas']))
		<li class="">
			<a href="{{ route('diplomado.ins.index', ['tipo'=>'Idiomas']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Idiomas
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador_Estudios_Informaticos']))
		<li class="">
			<a href="{{ route('diplomado.ins.index', ['tipo'=>'Estudios_informaticos']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Estudios Informaticos
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador Diplomados']))
		<li class="">
			<a href="{{ route('diplomado.ins.index', ['tipo'=>'Diplomado']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción Diplomados
			</a>
				<b class="arrow"></b>
		</li>
		@endif		
		@if(Auth::user()->hasRoles(['Administrador PROCAPT']))
		<li class="">
			<a href="{{ route('diplomado.ins.index', ['tipo'=>'PROCAPT']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción PROCATP
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['Administrador PROMASTER']))
		<li class="">
			<a href="{{ route('diplomado.ins.index', ['tipo'=>'PROMASTER']) }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Inscripción PROMASTER
			</a>
				<b class="arrow"></b>
		</li>
		@endif
	</ul>
</li>
@endif
