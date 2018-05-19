<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
  <link rel="icon" type="image/png" href="{{url('/plantilla/images/gallery/unheval-logo.png')}}" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Inscripcion</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<!--     Fonts and icons     -->
    <!--<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet"> -->
	<!-- CSS Files -->
     {!!Html::style('/plantilla/css/bootstrap.min.css')!!}
     {!!Html::style('/plantilla/css/gsdk-bootstrap-wizard.css')!!}
     {!!Html::style('/plantilla/css/demo.css')!!}	
	<!-- CSS Just for demo purpose, don't include it in your project -->
</head>
<body>
<div class="image-container set-full-height" style="background-image: url('/plantilla/images/gallery/wizard.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="#">
         <div class="logo-container">
            <div class="logo">
                <img src="/plantilla/images/gallery/unheval-logo.png" width="60px">
            </div>
            <div class="panel-heading">
                      <h3 class="panel-title"> <b>UNIVERSIDAD NACIONAL HERMILIO VALDIZÁN</b></h3>
            </div>
        </div>
    </a>
    <!--   Big container   -->
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

            <!--      Wizard container        -->
            <div class="wizard-container">

              <div class="card wizard-card" data-color="azzure" id="wizardProfile">
                  <form action="" method="">
                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
                    	<div class="wizard-header">
                        	<h3>
                        	   <b>INSCRIPCION</b> UNHEVAL <br>
                        	   <small>This information will let us know more about you.</small>
                        	</h3>
                    	</div>
						                  <div class="wizard-navigation">
							                 <ul>
    	                            <li><a href="#about" data-toggle="tab">Inscripcion</a></li>
    	                            <li class="active"><a href="#account" data-toggle="tab">Llenar datos</a></li>
    	                            <li><a href="#address" data-toggle="tab">Confirmar Inscripcion</a></li>
	                             </ul>
						                  </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Inscripciones</h4>                               
                                  <div class="form-group col-sm-10 col-sm-offset-1">
                                      <div class="form-group col-md-6">
                                        <label>DNI <small>(requiredo)</small></label>
                                        <input name="dni" type="text" class="form-control" placeholder="">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label>N de comprobante <small>(requiredo)</small></label>
                                        <input name="n_comprobante" type="text" class="form-control" placeholder="">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label>Fecha del comprobante <small>(requiredo)</small></label>
                                        <input name="f_comprobate" type="date" class="form-control" placeholder="">
                                      </div>
                                  </div>                                 
                              </div>
                            </div>
                            <div class="tab-pane active" id="account">
                              <div class="row form-group">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Inscripciones</h4>
                                  </div>                                  
                                    <div class="row form-group">
                                      <div class="col-sm-5 col-sm-offset-1">
                                        <label>Nombre <small>(requiredo)</small></label>
                                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                                      </div>
                                      <div class="col-sm-5">
                                        <label>Apellido Paterno <small>(requiredo)</small></label>
                                        <input name="a_paterno" type="text" class="form-control" placeholder="Apellido Paterno">
                                      </div>
                                    </div>                                   
                                    <div class="row form-group">
                                      <div class="col-sm-5 col-sm-offset-1">
                                        <label>Apellido Materno <small>(requiredo)</small></label>
                                        <input name="a_materno" type="text" class="form-control" placeholder="Apellido Materno">
                                      </div>                                    
                                      <div class="col-sm-5">
                                        <label>Fecha de Nacimiento <small>(requiredo)</small></label>
                                        <input name="f_nacimiento" type="date" class="form-control" placeholder="01/01/1990">
                                      </div>
                                    </div>                                    
                                    <div class="row form-group">
                                      <div class="col-sm-5 col-sm-offset-1">
                                        <label>DNI <small>(requiredo)</small></label>
                                        <input name="dni" type="text" class="form-control" placeholder="99999999">
                                      </div>                                    
                                      <div class="col-sm-5">                                      
                                        <label>Email <small>(requiredo)</small></label>
                                        <input name="email" type="email" class="form-control" placeholder="aaaaa@gmail.com">
                                      </div>
                                    </div>                                    
                                    <div class="row form-group">
                                      <div class="col-sm-5 col-sm-offset-1">
                                        <label>N telefonico </label>
                                        <input name="n_telefonico" type="text" class="form-control" placeholder="062-517777">
                                      </div>                                      
                                      <div class="col-sm-5">                                      
                                        <label>N celular <small>(requiredo)</small></label>
                                        <input name="n_celular" type="text" class="form-control" placeholder="">
                                      </div>                                      
                                    </div>
                                    <div class="row form-group">
                                         <div class="col-sm-5 col-sm-offset-1">
                                            <label>Departamento de Nacimiento</label><br>
                                             <select name="depa_nac" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>                                    
                                                <option value="...">...</option>
                                            </select>
                                          </div>                                      
                                          <div class="col-sm-5">                                            
                                            <label>Provincia de Nacimiento</label><br>
                                             <select name="provi_nac" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>                                    
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="row form-group">
                                         <div class="col-sm-5 col-sm-offset-1">
                                            <label>Distrito de Nacimiento</label><br>
                                             <select name="distr_nac" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>                                    
                                                <option value="...">...</option>
                                            </select>
                                          </div>                                    
                                          <div class="col-sm-5">                                      
                                              <label>Domicilio <small>(requiredo)</small></label>
                                              <input name="domicilio" type="text" class="form-control" placeholder="">
                                          </div>
                                    </div>
                                </div>
                              </div>               
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Inscripciones </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Street Name</label>
                                            <input type="text" class="form-control" placeholder="5h Avenue">
                                          </div>
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Street Number</label>
                                            <input type="text" class="form-control" placeholder="242">
                                          </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="New York...">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-info btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
      </div><!-- end row -->
    </div> <!--  big container -->
</div>
</body>
	<!--   Core JS Files   -->
  {!!Html::script('/plantilla/js/jquery-2.2.4.min.js')!!}
  {!!Html::script('/plantilla/js/bootstrap.min.js')!!}
  <!--  Plugin for the Wizard -->
  {!!Html::script('/plantilla/js/jquery.bootstrap.wizard.js')!!}
  {!!Html::script('/plantilla/js/gsdk-bootstrap-wizard.js')!!}
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  {!!Html::script('/plantilla/js/jquery.validate.min.js')!!}	
</html>
