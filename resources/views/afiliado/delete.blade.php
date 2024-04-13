@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Afiliado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado/{{$eliminarRegistro->id}}" method="POST">
    @csrf
    @method('DELETE')


    <div class ="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codigoAfiliado" id="codigoAfiliado" value="{{$eliminarRegistro->codigoAfiliado}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  id="nombre" value="{{$eliminarRegistro->Nombre}}" class="form-control">

    </div>

    <div class ="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$eliminarRegistro->Apellido}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="{{$eliminarRegistro->Ciudad}}" class="form-control">

    <div class ="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$eliminarRegistro->Telefono}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad" id="edad" value="{{$eliminarRegistro->Edad}}"class="form-control" >
    </div>

    <button type="submit">Eliminar</button>

</form>

</div>

</div>

</div>
@endsection