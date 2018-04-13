@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/dropzone.min.css')!!}
@endsection
@section('ruta')
<ul class="breadcrumb">
	<i class="ace-icon fa fa-leaf"></i>
	<li class="active">Responsabilidad Social Universitaria</li>
	<li class=""><a href="{{ route('rsu.mp.index') }}"> Mis Proyectos</a></li>
	<li class="">Editar</li>
</ul>
@endsection
@section('contenido')

<div class="col-xs-12">
	<!-- Inicio -->
		<h3 align="center"> {{$proyecto->titulo}}</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		
		<div class="col-sm-5">
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

					
							
		</div>

		<div class="col-sm-7">
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
		</div>
		
		<div class="col-sm-12 col-xs-12">
			<div class="row" style="background-color: #EDF4FC; padding: 10px; border-radius: 2%">
				@foreach($proyecto->evidencias as $e)
					<div class="col-md-2 col-sm-3 col-xs-4">
						<a class="btn btn-danger btn-xs" style="position: absolute;border-radius: 30%;" href="{{route('rsu.mp.img-d',[$e->id,$proyecto->id])}}"><i class="fa fa-remove"></i></a>
						<img width="150" height="150" alt="150x150" src="{{ Storage::url($e->file) }}" style="border-radius: 10%; padding-bottom: 10px;"  >
					</div>
				@endforeach
			</div>
		</div>

		<div class="col-sm-12 col-xs-12" ><br><br>
			<div class="hr dotted"></div><br><br><br>
			<div class="form-group" align="center">
					<button type="submit" class="width-30 btn btn-sm btn-primary">
					<i class="ace-icon fa  fa-check"></i>
					<span class="bigger-110">Enviar</span>
					</button>								
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
