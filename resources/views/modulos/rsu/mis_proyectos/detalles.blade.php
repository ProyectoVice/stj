{{-- modal detalles --}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin" id="py-titulo">{{ $proyecto->titulo }}</h3>
			</div>
			
			<div class="modal-body">
					
				<div class="row">
					<label class="col-sm-4" align="right"><b>Doc. de Aprobación: </b></label>
					<label class="col-sm-8"> @if($proyecto->doc_aprobacion=='') - @else {{ $proyecto->doc_aprobacion }} @endif</label>					
					
					<label class="col-sm-4" align="right"><b>Lugar: </b></label>
					<label class="col-sm-8" >@if($proyecto->lugar=='') -- @else {{ $proyecto->lugar }} @endif</label>

					<label class="col-sm-4" align="right"><b>Beneficiarios: </b></label>
					<label class="col-sm-8">@if($proyecto->beneficiarios=='') - @else{{ $proyecto->beneficiarios }} @endif</label>

					<label class="col-sm-4" align="right"><b>Aliados: </b></label>
					<label class="col-sm-8">@if($proyecto->aliados=='') - @else {{ $proyecto->aliados }} @endif</label>

					<label class="col-sm-4" align="right"><b>Porcentaje de avance: </b></label>	
					<label class="col-sm-8">
								@if($proyecto->porcentaje=='') - @else {{ $proyecto->porcentaje }} @endif
					</label>	
					
					<label class="col-sm-4" align="right"><b>Doc. de Culminación: </b></label>
					<label class="col-sm-8">
							@if($proyecto->doc_culminacion=='') - @else {{ $proyecto->doc_culminacion }} @endif
					</label>

					<label class="col-sm-4" align="right"><b>Objetivos: </b></label>
					<label class="col-sm-8">
								@if($proyecto->objetivos=='') - @else  {!! $proyecto->objetivos !!} @endif
					</label>
					
					<label class="col-sm-4" align="right"><b>Justificación: </b></label>
					<label class="col-sm-8">
								@if($proyecto->justificacion=='') - @else  {!! $proyecto->justificacion !!}@endif
					</label>
					
				
					<label class="col-sm-4" align="right"><b>Logros: </b></label>
					<label class="col-sm-8">
								@if($proyecto->logros=='') - @else {!! $proyecto->logros !!}@endif
					</label>
					
				
					<label class="col-sm-4" align="right"><b>Dificultades: </b></label>
					<label class="col-sm-8">
								@if($proyecto->dificultades=='') - @else {!! $proyecto->dificultades !!}@endif
					</label>
					
					<label class="col-sm-12"><b>Evidencias: </b></label>
					
				</div>
			
			</div>

			<div class="modal-footer">
				<a href="{!!route('rsu.mp.cal',$proyecto->id)!!}" class="btn btn-info btn-round submit" id="btn-calendar">
						<i class="ace-icon fa fa-calendar"> Actividades</i>
				</a>
				<a href="{!!route('rsu.mp.dw',$proyecto->id)!!}" class="btn btn-info btn-round submit" id="btn-download">
						<i class="ace-icon fa fa-download"> Descargar</i>
				</a>
				<a href="{!! route('rsu.mp.edit', $proyecto->id) !!}" class="btn btn-info btn-round submit" id="btn-editar">
						<i class="ace-icon fa fa-edit"> Editar</i>
				</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
{{-- fin modal --}}