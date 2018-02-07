<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión - STJ</title>
	<link rel="icon" type="image/png" href="{{url('plantilla/images/gallery/unheval-logo.png')}}" />
	<style type="text/css">
		html { 
  background: url('/plantilla/images/gallery/slider-campus.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  overflow: hidden;
}

img{
  display: block;
  margin: auto;
  width: 100%;
  height: auto;
}

#login-button{
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  transition: 0.8s;
  /*padding: 30px;*/
  margin: auto;
  width: 150px;
  height: 180px;
  border-radius: 50%;
  background: rgba(3,3,3,.8);
  overflow: hidden;
  opacity: 0.7;
  box-shadow: 10px 10px 30px #000;
  display: {{ $errors->has('dni') | $errors->has('password') ? 'none' : ''}};
}

#login-button:hover{
	opacity: 1;

}
/* Login container */
#container{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 260px;
  height: {{ $errors->has('dni') | $errors->has('password') ? '320px;' : '260px;'}};
  border-radius: 5px;
  background: rgba(3,3,3,0.7);
  box-shadow: 1px 1px 50px #000;
  display: {{ $errors->has('dni') | $errors->has('password') ? '' : 'none'}};
}

.close-btn{
  position: absolute;
  cursor: pointer;
  font-family: 'Open Sans Condensed', sans-serif;
  line-height: 18px;
  top: 3px;
  right: 3px;
  width: 20px;
  height: 20px;
  text-align: center;
  border-radius: 10px;
  opacity: .2;
  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

#btn-cerrar-olvidado:hover{
  opacity: .9;
  color: white;
  background-color: rgba(233, 1, 1,.5);
}

/* Heading */
h1{
  font-family: 'Open Sans Condensed', sans-serif;
  position: relative;
  margin-top: 0px;
  text-align: center;
  font-size: 40px;
  color: #ddd;
  text-shadow: 3px 3px 10px #000;
}

/* Inputs */
a,
input{
  font-family: 'Open Sans Condensed', sans-serif;
  text-decoration: none;
  position: relative;
  width: 80%;
  display: block;
  margin: 9px auto;
  font-size: 17px;
  color: #fff;
  padding: 8px;
  border-radius: 6px;
  border: none;
  background: rgba(3,3,3,.5);
  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

input:focus{
  outline: none;
  box-shadow: 3px 3px 10px #333;
  background: rgba(3,3,3,.8);
}

/* Placeholders */
::-webkit-input-placeholder {
   color: #ddd; opacity: 0.5; }
:-moz-placeholder { /* Firefox 18- */
   color: red;   opacity: 0.5;}
::-moz-placeholder {  /* Firefox 19+ */
   color: red;   opacity: 0.5;}
:-ms-input-placeholder {  
   color: #333;   opacity: 0.5;}

/* Link */
a{
  font-family: 'Open Sans Condensed', sans-serif;
  text-align: center;
  padding: 4px 8px;
  background: rgba(107,255,3,0.3);
}

a:hover{
  background-color: green;
}

#remember-container{
  position: relative;
  margin: -5px 20px;
}


#remember{
  position: absolute;
  font-size: 13px;
  font-family: 'Hind', sans-serif;
  color: rgba(255,255,255,.5);
  top: 7px;
  left: 20px;
}

#forgotten{
  position: absolute;
  font-size: 12px;
  font-family: 'Hind', sans-serif;
  color: rgba(255,255,255,.5);
  right: 0px;
  top: 8px;
  cursor: pointer;
  -webkit-transition: all 2s ease-in-out;
  -moz-transition: all 2s ease-in-out;
  -o-transition: all 2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

#forgotten:hover{
  color: rgba(255,255,255,.9);
}

#forgotten-container{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 260px;
  height: 180px;
  border-radius: 10px;
  background: rgba(3,3,3,0.7);
  box-shadow: 1px 1px 50px #000;
  display: none;
}

.orange-btn{
  background: rgba(87,198,255,.5);
}
	</style>
</head>

<body>

<div id="login-button">
  <img src="{{URL::to('plantilla/images/gallery/unheval-logo.png')}}" title="Clic para Iniciar Sesión">
  </img>
</div>

<!-- Login -->
<div id="container">
	<div align="center">
	<table>
		<tr>
			<td style="vertical-align: 50%;">
				<img src="{{URL::to('plantilla/images/gallery/unheval-logo.png')}}" style="height: 45px; width: auto;">
			</td>
			<td><h1>UNHEVAL</h1></td>
		</tr>
	</table>
	</div>
 
  <form method="post" action="/login" name="login" align="center">
  		{!!csrf_field() !!}
	    <input type="text" name="dni" value="{{ old('dni') }}" placeholder="DNI" maxlength="8">
			{!! $errors->first('dni',
				'<span class="help-block" style="color:rgba(233, 1, 1,.9); ">*:message</span>'
			) !!}
    <input type="password" name="password" placeholder="Contraseña">
			{!! $errors->first('password',
				'<span class="help-block"  style=" color:rgba(233, 1, 1,.9);">*:message</span>') 
			!!}	
    <a href="javascript:document.login.submit()">Ingresar</a>
    <div id="remember-container">
      <span id="forgotten">Olvidaste tu contraseña</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Olvidado!</h1>
  <span class="close-btn" id="btn-cerrar-olvidado">
    <b>x</b>
  </span>

  <form>
    <input type="email" name="email" placeholder="E-mail">
    <a href="#" class="orange-btn">Nueva contraseña</a>
	</form>

{!!Html::script('plantilla/js/jquery-2.1.4.min.js')!!}

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='plantilla/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{!!Html::script('plantilla/js/bootstrap.min.js')!!}

<script>
   
   /* Mostrar Login */
   $('#login-button').click(function(){
  		$('#login-button').fadeOut("slow",function(){
    		$("#container").fadeIn();
    		TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    		TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
  		});
	});


	/* Mostrar Olvidado */
	$('#forgotten').click(function(){
	  $("#container").fadeOut(function(){
	    $("#forgotten-container").fadeIn();
	  });
	});
	/* Volver Login */
	$('#btn-cerrar-olvidado').click(function(){
	  $("#forgotten-container").fadeOut(function(){
	    $("#container").fadeIn();
	  });
	});
</script>
</div>
</body>
</html>