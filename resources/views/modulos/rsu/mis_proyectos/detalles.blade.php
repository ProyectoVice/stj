{{-- modal detalles --}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin" id="py-titulo">{{ $proyecto->titulo }}</h3>
			</div>
			
			<div class="modal-body">
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Doc. de Aprobación: </b></p>
					<p id="py-aprobacion" class="col-sm-9"> {{ $proyecto->doc_aprobacion }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Lugar: </b></p>
					<p class="col-sm-9"> {{ $proyecto->lugar }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Beneficiarios: </b></p>
					<p class="col-sm-9"> {{ $proyecto->beneficiarios }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Aliados: </b></p>
					<p class="col-sm-9"> {{ $proyecto->aliados }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Porcentaje de avance: </b></p>	
					<p class="col-sm-9"> {{ $proyecto->porcentaje }}</p>	
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Doc. de Culminación: </b></p>
					<p class="col-sm-9"> {{ $proyecto->doc_culminacion }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Objetivos: </b></p>
					<p class="col-sm-9"> {{ $proyecto->doc_culminacion }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Justificación: </b></p>
					<p class="col-sm-9"> {{ $proyecto->justificacion }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Logros: </b></p>
					<p class="col-sm-9"> {{ $proyecto->logros }}</p>
				</div>
				<div class="col-sm-12">
					<p class="col-sm-3 control-label no-padding-right"><b>Dificultades: </b></p>
					<p class="col-sm-9"> {{ $proyecto->dificultades }}</p>
				</div>
					<p><b>Evidencias: </b></p>
				
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-info btn-round submit" id="btn-calendar">
						<i class="ace-icon fa fa-calendar"> Actividades</i>
				</a>
				<a href="#" class="btn btn-info btn-round submit" id="btn-download">
						<i class="ace-icon fa fa-download"> Descargar</i>
				</a>
				<a href="#" class="btn btn-info btn-round submit" id="btn-editar">
						<i class="ace-icon fa fa-edit"> Editar</i>
				</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
{{-- fin modal --}}