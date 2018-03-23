
<html lang="es">
<head>	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Inscripciones</title>
		<link rel="icon" type="image/png" href="{{url('plantilla/images/gallery/unheval-logo.png')}}" />

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<style type="text/css">		

		</style>
</head>
<body>
	{!!Html::style('plantilla/css/bootstrap.min.css')!!}
	<div class="container">
		<div class="well form-horizontal">		
			<legend>Inscripcion UNHEVAL</legend>
				<div class="form-group">
					<label class="col-md-4 control-label">Programas</label>
					<div class="col-md-4 inputGroupContainer">
          				<div class="input-group"> 	 
							<select id="mySelect" class="form-control selectpicker" onchange="myFunction()">
		  						<option value="">Selecione una opcion</option>
		  						@foreach($programa as $p)
		  						<option value="{{$p->id}}">{{$p->programa}}</option>
		  						@endforeach
							</select>
						</div>
					</div>
				</div>
					<div id="cuerpo"></div>
		</div>
	</div>

		{!!Html::script('plantilla/js/jquery-2.1.4.min.js')!!}
	
		<script type="text/javascript">
			function myFunction() 
			{
		    	var x = document.getElementById("mySelect").value;		    
		    	if(x!="")
		    	{
		    		$.ajax({
				    //type: 'POST',
						    url: "/unheval/"+x,
						    //data: data,
						    beforeSend: function() {
						        // setting a timeout
						        $("#cuerpo").html('<h1>Esperando...</h1>');
						    },
						    success: function(data) {
						        $("#cuerpo").html(data);
						        $.getScript('plantilla/js/unheval.js');
						    },
						    error: function(xhr) { // if error occured
						    	//$("#cuerpo").empty();
						        $("#cuerpo").html('<h1>Error...</h1>');
						     }
				    // complete: function() {
				    //     $("#cuerpo").html('<h1>Complete...</h1>');
				    // },				    
						});				
				}
				else $("#cuerpo").empty();
			}			    
		</script>
</body>
</html>