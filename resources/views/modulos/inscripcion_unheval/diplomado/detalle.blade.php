@extends('plantilla.usuario')
@section('titulo','Inscrito - Detalle')
@section('activacion')
@endsection
@section('estilos')
@endsection
@section('ruta')
    <ul class="breadcrumb">
        <i class="ace-icon fa fa-leaf"></i>
        <li class="active">Expediente</li>
        <li class=""><a href="{{ route('diplomado.ins.index', ['tipo'=>$tipo]) }}"> Registro</a></li>
        <li class="">Ver Más</li>
    </ul>
@endsection
@section('contenido')
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="hr dotted"></div>
        <div>
            <div id="user-profile-1" class="user-profile row">
                <div class="col-xs-12 col-sm-5 center">
                    <div>
                        <span class="profile-picture">
                            <img id="avatar" alt="Alex's Avatar" src="{{URL::to('plantilla/images/avatars/profile-pic.jpg')}}" height="150px;" style="vertical-align: top;">
                        </span>

                        <div class="space-4"></div>

                        <div style="background-color:#778899; border-radius: 10px 10px 0 0;">
                            <div class="inline position-relative">
                                <span class="white">{{$inscripcion->user->nombres}}<br>{{$inscripcion->user->apellido_paterno.' '.$inscripcion->user->apellido_materno}}<br>({{$inscripcion->user->dni}})</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-6"></div>
                    <div class="profile-contact-info">
                        <div class="profile-contact-links align-left">
                            <p><label><i class="ace-icon fa fa-hand-o-right"></i> Pagos realizados: <br></label>
                            <div class="hr dotted"></div>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                <tr>
                                    <th class="center">N</th>
                                    <th class="center">Número</th>
                                    <th class="center">Fecha</th>
                                    <th class="center">Detalle</th>
                                    <th class="center">Importe</th>
                                    <th class="center">Tipo</th>
                                </tr>
                                @foreach($control as $id=>$c)
                                <tr>
                                    <td>{{$id+1}}</td>
                                    <td>{{$c->num_comprobante}}</td>
                                    <td>{{$c->fecha_comprobante}}</td>
                                    <td>{{$c->descripcion}}</td>
                                    <td>{{$c->importe}}</td>
                                    @if($c->tipo=='1')
                                    <td>Matricula</td>
                                    @endif
                                    @if($c->tipo=='2')
                                    <td>Modulo</td>
                                    @endif
                                    @if($c->tipo=='3')
                                    <td>Diploma</td>
                                    @endif
                                </tr>
                                @endforeach
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="space-6"></div>
                    <div class="space-12"></div>
                    <label><b>&nbsp;&nbsp;Información del Usuario</b></label>
                    <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                            <div class="profile-info-name"> DNI </div>
                            <div class="profile-info-value">
                                <span id="username">{{$inscripcion->user->dni}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Nombres </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->user->nombres}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Ap. Paterno </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->user->apellido_paterno}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Ap. Materno </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->user->apellido_materno}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Fecha de Nacimiento </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->user->f_nac}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Lugar de Nacimiento</div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->user->distrito->distrito.' - '.$inscripcion->user->distrito->provincia->provincia.' - '.$inscripcion->user->distrito->provincia->departamento->departamento}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Domicilio actual</div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->user->domicilio.' '.$inscripcion->user->n_domicilio}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Telefono</div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->user->tel}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> N Celular</div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->user->cel}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Genero </div>
                            <div class="profile-info-value">
                                <span id="country">
                                    @if($inscripcion->user->genero=='1')
                                        Masculino
                                    @elseif($inscripcion->user->genero=='0')
                                        Femenino
                                    @endif
                                </span>
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <div class="profile-info-name"> Estado Civil </div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->user->est_civil->est_civil}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Religión </div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->user->religion->religion}}</span>
                            </div>
                        </div>
                        <input type="hidden" name="tipo" value="{{$tipo}}">
                    </div>
                    <br><br><br><br><br><br>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="space-6"></div>
                    <div class="space-12"></div>
                    <label><b>&nbsp;Programa</b></label>
                    <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Programa </div>
                            <div class="profile-info-value">
                                <span id="username">{{$inscripcion->programa_ncgt->descripcion}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Organizado</div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->programa_ncgt->dependencia->dependencia}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Fecha Inicio </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->programa_ncgt->fecha_inicio}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Fecha Fin </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->programa_ncgt->fecha_fin}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Número Modulo </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->programa_ncgt->numero_modulo}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Costo de matricula </div>
                            <div class="profile-info-value">
                                <span id="country">{{$inscripcion->programa_ncgt->costo_matricula}}</span>
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Costo de modulo</div>
                            <div class="profile-info-value">
                                <span >{{$inscripcion->programa_ncgt->costo_modulo}}</span>
                            </div>
                        </div>


                        <input type="hidden" name="tipo" value="{{$tipo}}">
                    </div>
                    <br><br><br><br><br><br>
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div>
@endsection
