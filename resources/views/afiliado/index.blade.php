@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Afiliado</h1>

<a href="afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>

<table class="table">
    <theah>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Acciones</th>
       </tr>
    </thead>

    <tbody>
        @foreach($afiliados as $afiliado)
        <tr>
        <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->codafiliado}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th>{{$afiliado->ciudad}}</th>
            <th>{{$afiliado->telefono}}</th>
            <th>{{$afiliado->edad}}</th>
            <th>
                <a href="/afiliado/{{$afiliado->id}}/edit" class="btn btn-info">Editar</a>
                <a href="/afiliado/{{$afiliado->id}}" class="btn btn-warning">Eliminar</a>

            </th>
        </tr>
        @endforeach

    </tbody>

</table>

@endsection



