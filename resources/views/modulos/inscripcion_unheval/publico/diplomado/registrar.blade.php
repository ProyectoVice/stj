<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro de Inscripción</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {!!Html::style('/plantilla/css/gsdk-bootstrap-wizard.css')!!}
    {!!Html::style('/plantilla/css/demo.css')!!}
</head>
<body>

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
                                <small>{{$tipo}}</small>
                            </h3>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li ><a  data-toggle="tab" aria-expanded="true">Inscripcion</a></li>
                                <li class="active"><a href="#dj" data-toggle="tab">Terminos y Condiciones</a></li>
                                <li class="" style="width: 33.3333%;"><a href="#registro" data-toggle="tab" aria-expanded="false">Rellenar datos</a></li>
                                <li style="width: 33.3333%;"><a href="#address" data-toggle="tab">Confirmar Inscripcion</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="dj">

                                    <h4 class="info-text"> Terminos y Condiciones del servicio</h4>
                                    <div class="form-group col-sm-10 col-sm-offset-1">
                                       <p align="justify">La Universidad Nacional Hermilio Valdizán-UNHEVAL ofrece la inscripción en linea de diferetes programas,
                                           facilitando a usted su inscripción previo pago realizado; al dar click en el boton NEXT usted
                                           acepta los terminos y condiciones establecidos por la UNHEVAL.<br></p>
                                        <p>Los datos solicitados y rellenados por usted se almacenaran en la Base de Datos de la UNHEVAL</p>
                                        <p>Es responsabilidad de usted la validez de los datos personales rellenados</p>
                                        <p>Rellene cuidadosamente los datos solicitados, con el fin de evitarse inconvenientes</p>
                                    </div>
                            </div>
                            <div class="tab-pane " id="registro">
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Inscripción</h4>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>DNI <small>(requiredo)</small></label>
                                            <input name="dni" type="text" disabled  class="form-control" value="{!! isset($usuario) ? $usuario->dni : ''!!}">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Nombres <small>(requiredo)</small></label>
                                            <input name="nombres" type="text" disabled class="form-control" value="{{ isset($usuario) ? $usuario->nombres : ''}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Apellido Paterno <small>(requiredo)</small></label>
                                            <input name="apellido_paterno" type="text" disabled class="form-control" value="{{ isset($usuario) ? $usuario->apellido_paterno : ''}}">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Apellido Materno <small>(requiredo)</small></label>
                                            <input name="apellido_materno" type="text" disabled class="form-control" value="{{ isset($usuario) ? $usuario->apellido_materno : ''}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Fecha de Nacimiento <small>(requiredo)</small></label>
                                            <input name="f_nac" type="date" class="form-control" value="{{ isset($usuario) ? $usuario->f_nac : ''}}" placeholder="01/01/1990">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Email <small>(requiredo)</small></label>
                                            <input name="email" type="email" class="form-control" value="{!! isset($usuario) ? $usuario->email : ''!!}" placeholder="aaaaa@gmail.com">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Departamento de Nacimiento</label><br>
                                            {!!Form::select('departamento',$departamentos,null,['id'=>'departamento_nac', 'class'=>'form-control','placeholder' => 'Departamento'])!!}
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Provincia de Nacimiento</label><br>
                                            {!!Form::select('provincia',$provincias,null,['id'=>'provincia_nac', 'class'=>'form-control','placeholder' => 'Provincia'])!!}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Distrito de Nacimiento</label><br>
                                            {!!Form::select('distrito_nac',$distritos,null,['id'=>'distrito_nac', 'class'=>'form-control','placeholder' => 'Distrito'])!!}
                                        </div>
                                        <div class="col-sm-5">
                                            <label>N celular <small>(requiredo)</small></label>
                                            <input name="cel" type="text" class="form-control" value="{!! isset($usuario) ? $usuario->cel : ''!!}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Domicilio <small>(requiredo)</small></label>
                                            <input name="domicilio" type="text" class="form-control" value="{!! isset($usuario) ? $usuario->domicilio : ''!!}">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>N Domicilio <small>(requiredo)</small></label>
                                            <input name="n_domicilio" type="text" class="form-control" value="{!! isset($usuario) ? $usuario->n_domicilio : ''!!}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Revise los datos rellenados en los campos antes de finzalizar</h4>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>DNI <small>(requiredo)</small></label>
                                            <input name="dni" type="text" disabled class="form-control" value="{!! isset($usuario) ? $usuario->dni : ''!!}">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Nombres <small>(requiredo)</small></label>
                                            <input name="nombres" type="text" disabled class="form-control" value="{{ isset($usuario) ? $usuario->nombres : ''}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Apellido Paterno <small>(requiredo)</small></label>
                                            <input name="apellido_paterno" type="text" disabled class="form-control" value="{{ isset($usuario) ? $usuario->apellido_paterno : ''}}">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Apellido Materno <small>(requiredo)</small></label>
                                            <input name="apellido_materno" type="text" disabled class="form-control" value="{{ isset($usuario) ? $usuario->apellido_materno : ''}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Fecha de Nacimiento <small>(requiredo)</small></label>
                                            <input name="f_nac" type="date"  class="form-control" disabled value="">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Email <small>(requiredo)</small></label>
                                            <input name="email" type="email"  class="form-control" disabled value="">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Departamento de Nacimiento</label><br>
                                            {!!Form::select('departamento',$departamentos,null,['disabled','id'=>'departamento_nac', 'class'=>'form-control','placeholder' => 'Departamento'])!!}
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Provincia de Nacimiento</label><br>
                                            {!!Form::select('provincia',$provincias,null,['disabled','id'=>'provincia_nac', 'class'=>'form-control','placeholder' => 'Provincia'])!!}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Distrito de Nacimiento</label><br>
                                            {!!Form::select('distrito_nac',$distritos,null,['disabled','id'=>'distrito_nac', 'class'=>'form-control','placeholder' => 'Distrito'])!!}
                                        </div>
                                        <div class="col-sm-5">
                                            <label>N celular <small>(requiredo)</small></label>
                                            <input name="cel" type="text" class="form-control" disabled value="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Domicilio <small>(requiredo)</small></label>
                                            <input name="domicilio" type="text" class="form-control" disabled value="">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>N Domicilio <small>(requiredo)</small></label>
                                            <input name="n_domicilio" type="text" class="form-control" disabled value="">
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
                            <input type="hidden" name="descripcion" id="descripcion" value="{!! $descripcion!!}">
                            <input type="hidden" name="n_comprobante" id="n_comprobante" value="{!! $n_comprobante!!}">
                            <input type="hidden" name="f_comprobante" id="f_comprobante" value="{!! $f_comprobante!!}">
                            <input type="hidden" name="tipo" value="{{$tipo}}">
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
    </div><!-- end row -->
</div> <!--  big container -->
</body>
{!!Html::script('/plantilla/js/jquery.bootstrap.wizard.js')!!}
{!!Html::script('/plantilla/js/gsdk-bootstrap-wizard.js')!!}
<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
{!!Html::script('/plantilla/js/jquery.validate.min.js')!!}
    <script type="text/javascript">

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

</html>
