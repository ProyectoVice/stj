@if(Auth::user()->hasRoles(['UsuarioAsuntos']))					
<li class="">
	<a href="#" class="dropdown-toggle" title="Academico">
		<i class="menu-icon fa fa-desktop" ></i>
			<span class="menu-text"> Academico </span>
				<b class="arrow fa fa-angle-down"></b>
	</a>

	<b class="arrow"></b>

	<ul class="submenu">
		@if(Auth::user()->hasRoles(['ViceAcademico']))
		<li class="">
			<a href="{{ route('academico.cal.index') }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Calendario Asuntos
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		@if(Auth::user()->hasRoles(['DirEscuela']))						
		<li class="">						
			<a href="{{ route('academico.cal_escuela.index') }}">
				<i class="menu-icon fa fa-caret-right"></i>
					Calendario Escuela
			</a>
				<b class="arrow"></b>
		</li>
		@endif
		
	</ul>
</li>
@endif