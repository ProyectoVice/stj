@if(Auth::user()->hasRoles(['Docente','Estudiante']))
						<li class="">
							<a href="#" class="dropdown-toggle" title="Responsabilidad Social Universitaria">
								<i class="menu-icon fa fa-leaf" ></i>
								<span class="menu-text"> RSU </span>
								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								@if(Auth::user()->hasRoles(['DRSU']))
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Proyectos UNHEVAL
									</a>
									<b class="arrow"></b>
								</li>
								@endif
								@if(Auth::user()->hasRoles(['DRSU-F']))
								<li class="">
									<a href="">
										<i class="menu-icon fa fa-caret-right"></i>
										Proyectos Facultad
									</a>
									<b class="arrow"></b>
								</li>
								@endif
								<li class="">
									<a href="{{ route('rsu.mp.index') }}">
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
								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-caret-right"></i>
										Repositorio
									</a>
									<b class="arrow"></b>
								</li>
							</ul>
						</li>
@endif