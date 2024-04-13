@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Depositos Afiliados: {{$afiliado}} </h1>

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
        @foreach($depositos as $deposito)
        @if($deposito->coddeposito==$deposito)
        <tr>
        <th>{{$deposito->id}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->monto}}</th>
            <th>

            </th>
        </tr>
        @endif
        @endforeach

    </tbody>

</table>

@endsection