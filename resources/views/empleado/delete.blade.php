@extends('layouts.principal')

@section('hijos')
<h1>Eliminar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$eliminarRegistro->id}}" method="POST">
    @csrf
    @method('DELETE')

    <div class ="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codigoEmpleado"  id="codigoEmpleado" value="{{$eliminarRegistro->codigoEmpleado}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  id="nombre"  value="{{$eliminarRegistro->Nombre}}" class="form-control">

    </div>

    <div class ="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  id="apellido" value="{{$eliminarRegistro->Apellido}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel"  id="nivel" value="{{$eliminarRegistro->Nivel}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$eliminarRegistro->Telefono}}" class="form-control">
    </div>

    <button type="submit">Eliminar</button>

</form>

</div>

</div>

</div>
@endsection