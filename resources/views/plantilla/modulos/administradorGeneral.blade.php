@if(auth()->user()->hasRoles(['Administrador General']))
	<li class="">
		<a href="{{url('#')}}">
			<i class="menu-icon fa fa-users"></i>
			<span class="menu-text"> Usuarios </span>
		</a>
		<b class="arrow"></b>
	</li>
@endif