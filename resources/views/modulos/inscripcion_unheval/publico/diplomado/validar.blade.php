<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro de Programa</title>
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
    <h2>{{$tipo}}</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home">Inscripción</a></li>
        <li><a href="#menu1">Registro de pago</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="card wizard-card" data-color="azzure" id="wizardProfile">
            {!! Form::open(['url' => route('publico.diplomado.ins.validar', $tipo), 'method' => 'POST','id'=>'myform', 'class'=>'form-horizontal form-label-left']) !!}
                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                <div class="wizard-header">
                        <h3>
                            <b>INSCRIPCION</b> UNHEVAL <br>
                        </h3>
                </div>
                    <div class="wizard-navigation">
                        <ul class="nav nav-pills">
                            <li style="width: 33.3333%;" class="active"><a href="#about" data-toggle="tab" aria-expanded="true">Inscripcion</a></li>
                            <li><a href="#dj" data-toggle="tab">Terminos y Condiones</a></li>
                            <li class="" style="width: 33.3333%;"><a href="#registro" data-toggle="tab" aria-expanded="false">Rellenar datos</a></li>
                            <li style="width: 33.3333%;"><a href="#address" data-toggle="tab">Confirmar Inscripcion</a></li>
                        </ul>
                        <div class="moving-tab" style="width: 315.333px; transform: translate3d(0px, 0px, 0px); transition: transform 0s;">Inscripcion</div></div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="about">
                                <h4 class="info-text"> Inscripciones</h4>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>Programa <small>(requiredo)</small></label>
                                            {!!Form::select('descripcion',$programa,null,['required','id'=>'descripcion', 'class'=>'form-control','placeholder' => 'Programa'])!!}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <label>N de comprobante <small>(requiredo)</small></label>
                                            <input name="n_comprobante" required type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Fecha del comprobante <small>(requiredo)</small></label>
                                            <input name="f_comprobante" required type="date" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <div class="wizard-footer height-wizard">
                        <div class="pull-right">
                            <input type="submit" class="btn btn-next btn-fill btn-info btn-wd btn-sm" name="next" value="Next">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <input type="hidden" name="tipo" value="{{$tipo}}">
                    {!!Form::close()!!}
            </div>
        </div>
        <!--registrar pago-->
        <div id="menu1" class="tab-pane fade">
            <h3>Menu 1</h3>
            <p>Ut.</p>
        </div>

    </div>
</div>

<script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });
</script>

</body>
{!!Html::script('/plantilla/js/jquery.bootstrap.wizard.js')!!}
{!!Html::script('/plantilla/js/gsdk-bootstrap-wizard.js')!!}
{!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
{!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
{!!Html::script('/plantilla/js/jquery.validate.min.js')!!}
</html>
