@extends('layouts.principal')

@section('hijos')
<h1>Editar Afiliado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/afiliado/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class ="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codigoAfiliado" id="codigoAfiliado"  value="{{$editarRegistro->codigoAfiliado}}" class="form-control" >
    </div>

    <div class ="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre"  value="{{$editarRegistro->Nombre}}" class="form-control" class="form-control" >

    </div>

    <div class ="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editarRegistro->Apellido}}" class="form-control" >
    </div>

    <div class ="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="{{$editarRegistro->Ciudad}}" class="form-control" >
    </div>

    <div class ="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editarRegistro->Telefono}}" class="form-control" >
    </div>

    <div class ="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad" id="edad"value="{{$editarRegistro->Edad}}" class="form-control"  >
    </div>

    <button type="submit">Guardar</button>

</form>

</div>

</div>

</div>
@endsection