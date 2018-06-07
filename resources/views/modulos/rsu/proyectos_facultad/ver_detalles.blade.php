@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
		<!-- page specific plugin styles -->
		{!!Html::style('/plantilla/css/colorbox.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class=""><a href="{{ route('rsu.pf.index') }}"> Proyectos Escuela</a></li>
	<li>{{$escuela->dependencia}}</li>
	<li class="">ver detalles</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
		<h3 align="center"> {{$proyecto->titulo}}</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		
		<div class="col-sm-4">
					<label class="col-sm-6" align="right"><b>Doc. de Aprobación: </b></label>
					<label class="col-sm-6"> @if($proyecto->doc_aprobacion=='') - @else {{ $proyecto->doc_aprobacion }} @endif</label><br>			
					
					<label class="col-sm-6" align="right"><b>Lugar: </b></label>
					<label class="col-sm-6" >@if($proyecto->lugar=='') -- @else {{ $proyecto->lugar }} @endif</label><br>	

					<label class="col-sm-6" align="right"><b>Beneficiarios: </b></label>
					<label class="col-sm-6">@if($proyecto->beneficiarios=='') - @else{{ $proyecto->beneficiarios }} @endif</label><br>	

					<label class="col-sm-6" align="right"><b>Aliados: </b></label>
					<label class="col-sm-6">@if($proyecto->aliados=='') - @else {{ $proyecto->aliados }} @endif</label><br>	

					<label class="col-sm-6" align="right"><b>Porcentaje de avance: </b></label>	
					<label class="col-sm-6">
								@if($proyecto->porcentaje=='') - @else {{ $proyecto->porcentaje }} @endif
					</label><br>	
					
					<label class="col-sm-6" align="right"><b>Doc. de Culminación: </b></label>
					<label class="col-sm-6">
							@if($proyecto->doc_culminacion=='') - @else {{ $proyecto->doc_culminacion }} @endif
					</label><br>	

					
							
		</div>

		<div class="col-sm-8">
					<label class="col-sm-2" align="right"><b>Objetivos: </b></label>
					<label class="col-sm-10">
								@if($proyecto->objetivos=='') - @else  {!! $proyecto->objetivos !!} @endif
					</label>
					
					<label class="col-sm-2" align="right"><b>Justificación: </b></label>
					<label class="col-sm-10">
								@if($proyecto->justificacion=='') - @else  {!! $proyecto->justificacion !!}@endif
					</label>
					
				
					<label class="col-sm-2" align="right"><b>Logros: </b></label>
					<label class="col-sm-10">
								@if($proyecto->logros=='') - @else {!! $proyecto->logros !!}@endif
					</label>
					
				
					<label class="col-sm-2" align="right"><b>Dificultades: </b></label>
					<label class="col-sm-10">
								@if($proyecto->dificultades=='') - @else {!! $proyecto->dificultades !!}@endif
					</label>
		</div>
		
		<div class="row">
			<div class="col-xs-12" >
				<hr>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center" id="lll">DNI</th>
							<th class="center">Apellidos y Nombres</th>
							<th class="center" class="hidden-480">Escuela</th>
							<th class="center" class="hidden-480">Tipo</th>
						</tr>
					</thead>
					<tbody>
						@foreach($equipo as $p)
						<tr>
							<td>{{$p->dni  }}</td>
							<td>{{$p->nombres}}</td>
							<td>{{$p->escuela}}</td>
							<td>{{$p->tipo}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" >
				<div ><hr>
					<ul class="ace-thumbnails clearfix" >
						@foreach($proyecto->evidencias as $e)

							<li>
								<a href="{{ Storage::url($e->file) }}" title="Evidencia: {{ $proyecto->titulo }}" data-rel="colorbox">
								<img width="150" height="150" alt="150x150" src="{{ Storage::url($e->file) }}" />
								</a>

							</li>
						@endforeach
					</ul>
			</div>
			</div>
		</div>

		<div class="col-sm-12 col-xs-12" ><br><br>
			<div class="hr dotted"></div><br><br><br>
			<div class="form-group" align="center">
				
            <a href="{!!route('rsu.pf.cal',$proyecto->id)!!}" class="btn btn-info btn-round submit" id="btn-calendar">
						<i class="ace-icon fa fa-calendar"> Actividades</i>
				</a>
				<a href="{!!route('rsu.pdf.vd',$proyecto->id)!!}" target="_blank" class="btn btn-info btn-round submit" id="btn-download">
						<i class="ace-icon fa fa-download"> Descargar</i>
				</a>	
								
			</div>	
			<div>
				<div class="btn-toolbar" data-role="editor-toolbar"
        data-target="#editor"></div> 
			</div>
		</div>			                  
								<!-- PAGE CONTENT ENDS -->
	<!-- Fin -->									

</div>	
@endsection
@section('script')

		<!-- page specific plugin scripts -->
		{!!Html::script('/plantilla/js/jquery.colorbox.min.js')!!}


		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			var $overflow = '';
			var colorbox_params = {
				rel: 'colorbox',
				reposition:true,
				scalePhotos:true,
				scrolling:false,
				previous:'<i class="ace-icon fa fa-arrow-left"></i>',
				next:'<i class="ace-icon fa fa-arrow-right"></i>',
				close:'&times;',
				current:'{current} de {total}',
				maxWidth:'100%',
				maxHeight:'100%',
				onOpen:function(){
					$overflow = document.body.style.overflow;
					document.body.style.overflow = 'hidden';
				},
				onClosed:function(){
					document.body.style.overflow = $overflow;
				},
				onComplete:function(){
					$.colorbox.resize();
				}
			};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
})
</script>
@endsection
