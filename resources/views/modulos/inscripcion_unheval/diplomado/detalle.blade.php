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
                <div class="col-xs-12 col-sm-3 center">
                    <div>
                        <span class="profile-picture">
                            <img id="avatar" alt="Alex's Avatar" src="{{URL::to('plantilla/images/avatars/profile-pic.jpg')}}" height="200px;" style="vertical-align: top;">
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

                                <i class="ace-icon fa fa-check-square-o"></i><span > <br></span>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="space-6"></div>
                    <div class="space-12"></div>
                    <label><b>&nbsp;&nbsp;Más Información</b></label>
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
                            <div class="profile-info-name"> Estado de Login </div>
                            <div class="profile-info-value">
                                <span id="country">
                                    @if($inscripcion->user->estado_login=='1')
                                        Activo
                                    @elseif($inscripcion->user->estado_login=='0')
                                        Inactivo
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
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div>
@endsection
