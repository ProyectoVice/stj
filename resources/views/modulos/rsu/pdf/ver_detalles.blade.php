@extends('modulos.rsu.pdf.plantilla')
@section('direccion','Responsabilidad Social Universitaria')
@section('milogo','plantilla/images/gallery/icono-rsu-unheval.png')
@section('titulo',$proyecto->titulo)

@section('contenido')
        <div class="col-sm-4">
                    <label class="col-sm-6" align="right"><b>Doc. de Aprobación: </b></label>
                    <label class="col-sm-6"> @if($proyecto->doc_aprobacion=='') - @else {{ $proyecto->doc_aprobacion }} @endif</label><br>          
                    
                    <label class="col-sm-6" align="right"><b>Lugar: </b></label>
                    <label class="col-sm-6" >@if($proyecto->lugar=='') -- @else {{ $proyecto->lugar }} @endif</label><br>   

                    <label class="col-sm-6" align="right"><b>Beneficiarios: </b></label>
                    <label class="col-sm-6">@if($proyecto->beneficiarios=='') - @else{{ $proyecto->beneficiarios }} @endif</label><br>  

                    <label class="col-sm-6" align="right"><b>Aliados: </b></label>
                    <label class="col-sm-6">@if($proyecto->aliados=='') - @else {{ $proyecto->aliados }} @endif</label><br> 

                    <label class="col-sm-6" align="right"><b>Porcentaje de avance: </b></label> 
                    <label class="col-sm-6">
                                @if($proyecto->porcentaje=='') - @else {{ $proyecto->porcentaje }}% @endif
                    </label><br>    
                    
                    <label class="col-sm-6" align="right"><b>Doc. de Culminación: </b></label>
                    <label class="col-sm-6">
                            @if($proyecto->doc_culminacion=='') - @else {{ $proyecto->doc_culminacion }} @endif
                    </label><br>                
        </div>
             <br>
             <label align="right"><b>Objetivos: </b></label>
                <p>@if($proyecto->objetivos=='') - @else  {!! $proyecto->objetivos !!} @endif</p>
             <label align="right"><b>Justificación: </b></label>
                <p>@if($proyecto->justificacion=='') - @else  {!! $proyecto->justificacion !!}@endif</p>
            <label align="right"><b>Logros: </b></label>
                <p>@if($proyecto->logros=='') - @else {!! $proyecto->logros !!}@endif</p>
            <label align="right"><b>Dificultades: </b></label>
            <p>@if($proyecto->dificultades=='') - @else {!! $proyecto->dificultades !!}@endif</p>
        
        <label align="right"><b>Equipo: </b></label><br>
        <table style="margin-left: 15px;" border=1 cellspacing=0 cellpadding=2 bordercolor="666633">
                    <thead>
                        <tr >
                            <th class="tth">DNI</th>
                            <th class="tth">Apellidos y Nombres</th>
                            <th class="tth">Escuela</th>
                            <th class="tth">Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipo as $p)
                        <tr style="margin-left: 5px; border: 1px solid black;">
                            <td>{{$p->dni  }}</td>
                            <td>{{$p->nombres}}</td>
                            <td>{{$p->escuela}}</td>
                            <td>{{$p->tipo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
        </table>

@endsection
