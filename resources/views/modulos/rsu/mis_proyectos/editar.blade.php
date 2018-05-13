@extends('plantilla.usuario')
@section('titulo','RSU - Mis proyectos')
@section('activacion')
@endsection
@section('estilos')
	{!!Html::style('plantilla/css/dropzone.min.css')!!}
	{!!Html::style('/plantilla/css/colorbox.min.css')!!}
  <style type="text/css">

	.search {
	    padding: 5px;
	    width: 230px;
	    height: 40px;
	    position: relative;
	    left: -70px;
	    border-radius: 60%;
	}

    .search #input_nuevo {
        position: absolute;
        width: 100px;
        margin-right: 0px;

        -webkit-transition: all 0.7s ease-in-out;
        -moz-transition: all 0.7s ease-in-out;
        -o-transition: all 0.7s ease-in-out;
        transition: all 0.7s ease-in-out;

        height: 30px;
        line-height: 18px;
        padding: 0 2px 0 2px;
        border-radius:1px;
    }

    

	#btn_mas {
	    height: 30px;
	    position: absolute;
	    left: 100px;
	    top: 5px;
	    -webkit-transition: all 0.7s ease-in-out;
        -moz-transition: all 0.7s ease-in-out;
        -o-transition: all 0.7s ease-in-out;
        transition: all 0.7s ease-in-out;
	}

	.search:hover #input_nuevo,  #input_nuevo:focus {
        width: 400px;
    }
    .search:hover #btn_mas, #input_nuevo:focus + #btn_mas{
        left: 400px;
    }


  </style>
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
		<h3 align="center"> Llenar los datos de su proyecto</h3>
		<div class="hr dotted"></div>

		<!-- PAGE CONTENT BEGINS -->
		{!! Form::model($proyecto,['route' => ['rsu.mp.update',$proyecto->id], 'method' => 'PUT','id'=>'myform', 'class'=>'form-horizontal form-label-left', 'enctype'=>'multipart/form-data']) !!}

			{{ csrf_field() }}
		<div class="col-sm-6">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Título del Proyecto</label>
				<div class="col-sm-9">
				{!!Form::text('titulo', null, ['required', 'class'=> 'form-control', 'placeholder'=>'Escribir aquí'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ejes</label>
				<div class="col-sm-9">
					@foreach($RsuEjes as $eje)
							<label class=".clic">
								<input value="1" type="checkbox" class="ace RsuEjes-stj" id="{{$eje->id}}" />
								<span class="lbl"> {{$eje->eje}} ({{$eje->abr}})</span>
							</label><br>
					@endforeach
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lineamientos</label>
				<div class="col-sm-9 agregar">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Aprobación</label>
				<div class="col-sm-9">
				{!!Form::text('doc_aprobacion',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'N° / Nombre del doc.'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Aprobación*</label>
				<div class="col-xs-10 col-sm-6">
					<input type="file" name="aprobacion-file" class="ace-file">@if($proyecto->file_aprobacion!='')<a href="{{ Storage::url($proyecto->file_aprobacion) }}" title="clic para ver" target="_blank">Ya existe un archivo</a>@endif
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lugar</label>
				<div class="col-sm-9">
				{!!Form::text('lugar',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'Lugar dónde se realiza la RSU'])!!}
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Beneficiarios</label>
				<div class="col-sm-9">
				{!!Form::text('beneficiarios',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'Población o comunidad'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Aliados</label>
				<div class="col-sm-9">
				{!!Form::text('aliados',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'Grupos de interés / Aliados estratégicos'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Porcentaje de avance</label>
				<div class="col-sm-9">
					{!!Form::number('porcentaje',null,['max'=>'100','min'=>'1','class'=>'col-xs-10 col-sm-10'])!!}
				</div>
			</div>
						
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Doc. de Culminación</label>
				<div class="col-sm-9">
				{!!Form::text('doc_culminacion',null,['class'=>'col-xs-10 col-sm-10','placeholder'=>'N° / Nombre del doc.'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar Doc. de Culminación*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="culminacion-file" class="ace-file">@if($proyecto->file_culminacion!='')<a href="{{ Storage::url($proyecto->file_culminacion) }}" title="clic para ver" target="_blank">Ya existe un archivo</a>@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Satisfación de Beneficiarios</label>
				<div class="col-sm-9">
					{!!Form::select('satisfaccion',$satisfacciones,$proyecto->satisfacion !='' ? $proyecto->satisfacion : null,['class'=>'col-xs-10 col-sm-10','placeholder' => 'Seleccione'])!!}

					<br><br><a href="http://proyectosenfermeria.com/manual/encuesta_satisfacion.docx" target="_blank" style="color: red;" title="clic para descargar">Descargar Modelo</a>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color: #641E16;" title="Opcional">Adjuntar resultados de encuestas (Excel)*</label>
				<div class="col-xs-10 col-sm-7">
					<input type="file" name="satisfaccion-file" class="ace-file">@if($proyecto->file_satisfaccion!='')<a href="{{ Storage::url($proyecto->file_satisfaccion) }}" title="clic para ver" target="_blank">Ya existe un archivo</a>@endif
				</div>
			</div>

			
							
		</div>

		<div class=" col-sm-offset-1 col-sm-5">
			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Objetivos</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="objetivos" class="stj-edit-basic">{!! $proyecto->objetivos !!}</div>
				</div>
			</div>
		

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Justificación</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="justificacion" class="stj-edit-basic">{!! $proyecto->justificacion !!}</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Logros</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="logros" class="stj-edit-basic">{!! $proyecto->logros !!}</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 col-xs-12">Dificultades</label>
				<div class="col-sm-12 col-xs-12 stj-editor-basic">
					<div id="dificultades" class="stj-edit-basic">{!! $proyecto->dificultades !!}</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-12" style="color: #641E16;" title="Opcional">Evidencias (solo imágenes)*</label>
				<div class="col-sm-12 col-xs-12">
					<div class="dropzone"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" >
				<div >
					<div class="table-header">
           				<div id="custom-search-input">
			                <div class="container">
						        <div class="search">
									<input type="text" class="form-control input-sm" id="input_nuevo" name="input_nuevo" placeholder="DNI - Nombres y Apellidos" onKeypress="if (event.keyCode == 13) event.returnValue = false;" dentro del form />
									 <a href="#" id="btn_mas" class="btn btn-success btn-sm"><i class="icon fa fa-plus"></i></a>
								</div>
							</div>
					
			            </div>
					</div>
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center" id="lll">DNI</th>
									<th class="center">Nombres y Apellidos</th>
									<th class="center" class="hidden-480">Escuela</th>
									<th class="center" class="hidden-480">Tipo</th>
									<th class="center" class="hidden-480">Acciones</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
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
								<div class="tools tools-top">
									
									<a href="{{route('rsu.mp.img-d',[$e->id,$proyecto->id])}}">
										Eliminar <i class="ace-icon fa fa-times red" ></i>
									</a>
								</div>
							</li>
						@endforeach
					</ul>
			</div>
			</div>
		</div>

		<div class="col-sm-12 col-xs-12" align="center" ><br><br>
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

		
{!! Form::close() !!}
			                  
								<!-- PAGE CONTENT ENDS -->
	<!-- Fin -->									
</div>	


@endsection
@section('script')
		
{!!Html::script('plantilla/js/stj/stj-editor-basic.js')!!}
{!!Html::script('/plantilla/js/dropzone.min.js')!!}
{!!Html::script('/plantilla/js/jquery.colorbox.min.js')!!}

{!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
{!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
{!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
{!!Html::script('/plantilla/js/buttons.flash.min.js')!!}
{!!Html::script('/plantilla/js/buttons.html5.min.js')!!}
{!!Html::script('/plantilla/js/buttons.print.min.js')!!}
{!!Html::script('/plantilla/js/buttons.colVis.min.js')!!}
{!!Html::script('/plantilla/js/dataTables.select.min.js')!!}
{!!Html::script('/sweetalert/sweetalert2.all.js')!!}
{!!Html::script('/sweetalert/core.js')!!}

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">


//Enviar datos al servidor
	$('form').on('submit', function() {
		//stj_editor_enviar('Nombre_px_enviar_a_servidor','#ID_del_div_con_la_clase_<stj-editor-basic>');
		stj_editor_enviar('objetivos','#objetivos');
		stj_editor_enviar('justificacion','#justificacion');
		stj_editor_enviar('logros','#logros');
		stj_editor_enviar('dificultades','#dificultades');
	});

	//Imagenes para las evidencias
	var myDropzone = new Dropzone('.dropzone', {
		url: '/rsu/mis_proyectos/img/'+{{$proyecto->id}},
		paramName: 'foto',
		acceptedFiles: 'image/*',
		maxFilesize: 2,
		headers:{
			'X-CSRF-TOKEN':'{{ csrf_token() }}'
		},
		dictDefaultMessage:'Arrastra las fotos aquí para subirlas'
	});

	myDropzone.on('error', function(file,res){
		$('.dz-error-message:last > span').text(res.errors.foto[0]);
	});

	Dropzone.autoDiscover=false;

	//llamar las librerias del file- pa' que se vea bonito XD
	$('.ace-file').ace_file_input();		
	//Checkbox Multiple	
	$(".RsuEjes-stj" ).click(function() {
		var idCheckEje=$(this).attr("id");
		if( $('#'+idCheckEje).prop('checked')){

    		$.get(`/rsu/mis_proyectos/lineas/`+idCheckEje,function(res){
				res.forEach(element => {
				var idCheckLinea=element.id;
				//console.log(element.id);
				$(".agregar" ).append("<label class='.clic ejeCheck-"+idCheckEje+"'><input type='checkbox' class='ace' name='lineas[]' value='"+idCheckLinea+"'/><span class='lbl'> <i>"+element.abr+"</i> - "+element.lineamiento+"</span></label><br class='ejeCheck-"+idCheckEje+"'>" );
					   });
				});	
		}

		else{	$(".ejeCheck-"+idCheckEje).remove();	}
	});

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


   //datatables

				var myTable=$('#dynamic-table').DataTable( {
			        "processing": true,
			        "serverSide": true,
			        "ajax": '{!!route('rsu.mp.equipo-show', $proyecto->id)!!}',
			        "language":{"url":'{!! asset('/plantilla/js/latino.json') !!}'},
                 	"order": [[ 0, "desc" ]],

			        "columns" : [
				        {data:"dni"},
				        {data:"nombres"},
				        {data:null, render:
				        	function(data,type,row){
				        		
				        		if(data.id_responsabilidad=='1' || data.id_responsabilidad=='2'){
				        			return "{!!\App\Docente::find('2')->escuela->escuela!!}";

				        		}else if(data.id_responsabilidad=='3'){
				        			return "Estudiante";
				        		}else{
				        			return "No definido";
				        		}
		            		 	return  data.id_user;
				        	}
				        },
				        {data:"tipo"},
				        {data:null,bSortable: false, render: 
				        		function ( data, type, row ) {
				        			var mas = "<div class='center action-buttons'><a href='/rsu/mis_proyectos/ver/"+data.id+"' class='stj-acciones' title='Ver detalles'><i class='fa fa-eye'></i></a>";
				        			if(data.id_responsabilidad=='1'){
				        				var eliminar="</div>";
				        			}else{
				        				var eliminar="<a href='#' class='stj-acciones stj-acciones-delete' title='Eliminar' data-id='"+data.id+"'><i class='fa fa-trash'></i></a></div>";
				        			}
				        			var acciones=mas+eliminar;
				        			return acciones;
                			}
                		}
			        ],
			    });

		//Autocompletar en imput 
		$( "#input_nuevo" ).autocomplete({
		  source: "{!!route('rsu.mp.users',$proyecto->id)!!}",
		  minLength: 2,
		  select: function(event, ui) {
		  	$('#btn_mas').data('id', ui.item.id);
		  }
		});
		//Guardar nnuevo
		$('#btn_mas').on('click', function() {
			if($('#input_nuevo').val()==''){
				alert('llene el campo de texto');
				return;
			}
		    $.ajax({ 
		    		url: '{{ route('rsu.mp.users_new') }}',
		    		type: 'POST',
		    		data: {
		          id_boton:$('#btn_mas').data('id'),
		          id_proyecto: {!!$proyecto->id!!} ,
		          _token:'{!! csrf_token() !!}',
		        },
		    		success: function (data) {
		    			$('#input_nuevo').val("");
		          	myTable.ajax.reload();
		    		},
			    		error: function(error){
			    				alert('el valor ingresado no es válido');
		    				   console.log('El error: '+error);
		    		}
		    	})
		  });
		//Eliminar integrante

				$(document).on('click', '.stj-acciones-delete', function(event) {
					
        			var button = $(this);
		         var id = button.data('id');
		            //button.prop("disabled",true);
		            //----------------
		            swal({
						  title: '¿Está seguro que desea eliminar?',
						  text: 'El registo se perderá permanentemente',
						  type: 'warning',
						  showCancelButton: true,
						  confirmButtonColor: '#3085d6',
						  cancelButtonColor: '#d33',
						  confirmButtonText: 'Si, Eliminar',
						  cancelButtonText: 'No, cancelar',
						  confirmButtonClass: 'btn btn-success',
						  cancelButtonClass: 'btn btn-danger',
						  buttonsStyling: false,
						  reverseButtons: true
						}).then((result) => {
							if(result.value){
								 	$.ajax({ 
					               url: '/rsu/mis_proyectos/users_d/'+id,
					               type: 'GET',
					               data: {_token: '{{csrf_token()}}' },
					               success: function (data) {
					                   myTable.ajax.reload();
					                   swal(
										      '¡Eliminado!',
										      'Tu registro se ha eliminado',
										      'success'
										    )
					               },
					               complete: function (data) {
					                   button.prop('disabled', false);
					                   $('#modal_admin').hide();
					               },
					                	error: function(error){
				                   var r = error.responseJSON.message;
				                   swal("Error",r, "error");
			                   }
						         });
							} 
						})
        		});
		})

</script>

@endsection