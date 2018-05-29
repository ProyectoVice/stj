<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">      
    <title>Inscripciones</title>
    <link rel="icon" type="image/png" href="{{url('plantilla/images/gallery/unheval-logo.png')}}" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- Bootstrap -->
   {!!Html::style('plantilla/css/bootstrap.min.css')!!}
    {!!Html::style('plantilla/css/menu.css')!!}
</head>
<body style="">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <h3 class="panel-title"> Inscripcion UNHEVAL</h3>
                  </div>
                    <div class="panel-body">
                        <div class="row">
                          <div class="col-xs-12 col-md-12 text-center">
                            <a href="https://pillcomozo.unheval.edu.pe/admision/inscripcion.aspx" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger  glyphicon-pencil"></span> <br>PREGRADO <br>&nbsp;</a> 
  						              <a href="#" class="btn btn-xlarge" role="button"><span class="glyphicon bigger glyphicon-folder-open"></span> <br>POSGRADO<br>MAESTRIA</a>
                            <a href="#" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-grain"></span> <br>POSGRADO<br>DOCTORADO</a>  
  						              <a href="#" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-tower"></span> <br>POSGRADO<br>POSDOCTORADO</a>
                            <a href="#" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-pencil"></span> <br>SEGUNDA<br>ESPECIALIDAD<br></a>
  						              <a href="#" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-pencil "></span> <br>ESTUDIOS  <br>COMPLEMENTARIOS<br></a>
       					            <a href="#" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-globe"></span> <br>IDIOMAS <br>&nbsp;</a>
                            <a href="#" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-cloud"></span> <br>ESTUDIOS <br>DISTANCIA</a>
                            <a href="{{route('publico.diplomado.ins.index', 'procapt')}}" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-ok"></span> <br>PROCATP <br>&nbsp;</a>
                            <a href="{{route('publico.diplomado.ins.index', 'promaster')}}" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-ok"></span> <br>PROMASTER <br>&nbsp;</a>
                            <a href="{{route('publico.diplomado.ins.index', 'diplomado')}}" class="btn btn-xlarge" role="button" target="_blank"><span class="glyphicon bigger glyphicon-book"></span> <br>DIPLOMADOS <br>&nbsp;</a>
                          </div>
                       </div>                  
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>