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
@endif