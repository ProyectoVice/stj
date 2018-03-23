<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/plantilla/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right">Departamento de Nacimiento:<br></label>
                    <div class="col-xs-12 col-sm-12">
                      <div class="clearfix">
                        {!!Form::select('departamento',$departamentos,null,['required','id'=>'departamento_nac', 'class'=>'col-xs-12 col-sm-3','placeholder' => 'Departamento'])!!}
                      </div>
                    </div>
                  </div>

                  <div class="space-2"></div>

                  <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right">Provincia de Nacimiento:</label>
                    <div class="col-xs-12 col-sm-12">
                      <div class="clearfix">
                        {!!Form::select('provincia',$provincias,null,['required','id'=>'provincia_nac', 'class'=>'col-xs-12 col-sm-3','placeholder' => 'Provincia'])!!}
                      </div>
                    </div>
                  </div>

                  <div class="space-2"></div>

                  <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Distrito de Nacimiento:</label>
                    <div class="col-xs-12 col-sm-12">
                      <div class="clearfix">
                        {!!Form::select('distrito_nac',$distritos,null,['required','id'=>'distrito_nac', 'class'=>'col-xs-12 col-sm-3','placeholder' => 'Distrito'])!!}
                      </div>
                    </div>
                  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/plantilla/js/bootstrap.min.js"></script>
     <script type="text/javascript">
       //Selects Anidados de departamentos-prov y Dist
  //Lugar de nacimiento
    $("#departamento_nac").change(event => {
      //Usaremos la ruta que creamos para los selects anidados en "Tutor"
      $.get(`/prov/${event.target.value}`,function(res,sta){
        $("#provincia_nac").empty();
        //console.log(res);
        $("#provincia_nac").append(`<option value=''>Provincia</option>`);
        res.forEach(element => {
          $("#provincia_nac").append(`<option value=${element.id}>${element.provincia}</option>`);
        });
      });
    });
    $("#provincia_nac").change(event => {
      $.get(`/dist/${event.target.value}`,function(res,sta){
        $("#distrito_nac").empty();
        //console.log(res);
        $("#distrito_nac").append(`<option value=''>Distrito</option>`);
        res.forEach(element => {
          $("#distrito_nac").append(`<option value=${element.id}>${element.distrito}</option>`);
        });
      });
    });
     </script>
  </body>
</html>