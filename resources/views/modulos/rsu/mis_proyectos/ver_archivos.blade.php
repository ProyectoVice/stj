{{-- modal detalles --}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin" id="py-titulo">{{ $proyecto->titulo }}</h3>
			</div>
			
			<div class="modal-body">
					
				<div class="row">
					<div class="col-sm-8 col-xs-12">
						{!! Form::open(['route' => ['rsu.mp.file-up',$proyecto->id], 'method' => 'PUT', 'class'=>'form-horizontal form-label-left','enctype'=>'multipart/form-data']) !!} 
                          {{csrf_field()}}
                          <div class="col-sm-10 col-xs-10">
							<input type="file" name="rsu-file" class="ace-file" required="true">
						  </div>
							<button type="submit" class="btn btn-success btn-xs"><i class="icon fa fa-arrow-right"></i> </button>
						  
						{!! Form::close() !!}
					</div>
					<div class="col-sm-4 col-xs-12" align="center">
						@if($proyecto->file_informe!='')
						<a href="{{ Storage::url($proyecto->file_informe) }}" target="_blank"><label style="font-size: 15px;"><i class="icon fa fa-download"></i> Descargar informe</label></a>
						@else
						<label><i class="icon fa fa-times"></i> No hay archivo para descargar</label>
						@endif
					</div>
					
				</div>
			
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
{{-- fin modal --}}