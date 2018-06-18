@extends('plantilla.usuario')
@section('titulo','Silabo')
@section('activacion')
@endsection
@section('ruta')
    <ul class="breadcrumb">
        <i class="ace-icon fa fa-book"></i>
        <li class="active">Carga Lectiva - Docente</li>
        <li class="">Actividades Silabos</li>
    </ul>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <h3><u> Dependencia </u>: xxxxxx xxxxxx xxxxxxx</h3><hr><br>
        </div>


        <div class="col-sm-7 hidden-xs">
            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                Silabo - Asignación Actividades &nbsp;&nbsp;&nbsp;
            </div>
            <div class="table-responsive">
                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">N</th>
                        <th class="center">Semana</th>
                        <th class="center">Horario</th>
                        <th class="center">Ambiente</th>
                        <th class="center">Actividad</th>
                        <th class="center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($horarios as $id=>$horario)
                        <tr>
                            <td>{{$id}}</td>
                            <td>1</td>
                            <td>{{$dias[$horario->dia].' '.$horario->hora_inicio.' '.$horario->hora_fin}}</td>
                            <td>{{$horario->ambiente->ambiente}}</td>
                            <td>1</td>
                            <td>
                                <a href="" title="Asignar" data-toggle="modal">
                                    <i class="fa fa-pencil"></i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-5 col-xs-12">
            <div id='calendar'></div>
        </div>
    </div>

@endsection

@section('script')
    {!!Html::script('/plantilla/js/jquery.dataTables.min.js')!!}
    {!!Html::script('/plantilla/js/jquery.dataTables.bootstrap.min.js')!!}
    {!!Html::script('/plantilla/js/dataTables.buttons.min.js')!!}
@endsection