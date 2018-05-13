{{ csrf_field() }}
		<div class="col-sm-12">
		
			<div class="row form-group">				
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">DNI</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="text" placeholder="Escribir aquí" name="dni" class="form-control" required="required" value="{!! $usuario->dni or $dni!!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nombre</label>
				<div class="col-sm-4">				
					<input type="text" placeholder="Escribir aquí" name="nombres" class="form-control" required="required" value="{!! $usuario->nombres or old('nombres') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Apellido Paterno</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="text" placeholder="Escribir aquí" name="apellido_paterno" class="form-control" required="required" value="{!! $usuario->apellido_paterno or old('apellido_paterno') !!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Apellido Materno</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="apellido_materno" class="form-control" required="required" value="{!! $usuario->apellido_materno or old('apellido_materno') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Fecha de nacimiento</label>
				<div class="col-sm-4 col-sm-offset-0">
					<input type="date" placeholder="Escribir aquí" name="f_nac" class="form-control" required="required" value="{!! $usuario->f_nac or old('f_nac') !!}">
				</div>			
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Correo Electrónico</label>
				<div class="col-sm-4">
					<input type="email" placeholder="Escribir aquí" name="email" class="form-control" required="required" value="{!! $usuario->email or old('email') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Departamento de Nacimiento</label>
				<div class="col-sm-4">
					<div class="clearfix">
                        {!!Form::select('departamento',$departamentos,null,['id'=>'departamento_nac', 'class'=>'col-xs-12 col-sm-9', 'placeholder' => 'Departamento'])!!}
                    </div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Provincia de Nacimiento</label>
				<div class="col-sm-4">
					<div class="clearfix">
                        {!!Form::select('provincia',$provincias,null,['id'=>'provincia_nac', 'class'=>'col-xs-12 col-sm-9','placeholder' => 'Provincia'])!!}
                     </div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Distrito de Nacimiento</label>
				<div class="col-sm-4">
					 <div class="clearfix">
                        {!!Form::select('distrito_nac',$distritos,null,['required','id'=>'distrito_nac', 'class'=>'col-xs-12 col-sm-9', 'value'=> '$usuario->distrito_nac or old("distrito_nac")','placeholder' => 'Distrito'])!!}
                      </div>
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Domicilio</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="domicilio" class="form-control" required="required" value="{!! $usuario->domicilio or old('domicilio') !!}">
				</div>
			</div>
			<div class="row form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº de Domicilio</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="n_domicilio" class="form-control" required="required" value="{!! $usuario->n_domicilio or old('n_domicilio') !!}">
				</div>
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Nº Celular</label>
				<div class="col-sm-4">
					<input type="text" placeholder="Escribir aquí" name="cel" class="form-control" required="required" value="{!! $usuario->cel or old('cel') !!}">
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-xs-12" >
			<div class="hr dotted"></div>
				<div class="checkbox" align="center">
					@foreach($roles as $id =>$rol)
					<label>
						<input 
						type="checkbox"
						value="{{$id}}"
						{{$usuario->roles->pluck('id')->contains($id) ? 'checked':''}}  
						name="roles[]">
						{{$rol}}
					</label>
					@endforeach												
				</div>
		</div>	