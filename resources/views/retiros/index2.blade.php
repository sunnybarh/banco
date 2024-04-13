@extends('layouts.principal')

@section('hijos')
<h1>Empleado: {{$empleado->nombre}} {{$empleado->apellido}}
<h1>Modulo de Retiros Afiliados: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/retiro/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Retiro</a>
<table class="table">
    <theah>
        <tr>
            <th>ID</th>
            <th>codempleado</th>
            <th>codafiliado</th>
            <th>fecha</th>
            <th>monto</th>
            <th>Acciones</th>
       </tr>
    </thead>

    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->codafiliado==$afiliado->id)
        <tr>
        <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>

            </th>
        </tr>
        
        @endif
        @endforeach

    </tbody>

</table>

@endsection