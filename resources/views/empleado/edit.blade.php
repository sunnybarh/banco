@extends('layouts.principal')

@section('hijos')
<h1>Editar Empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/empleado/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class ="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codigoEmpleado" id="codigoEmpleado"  value="{{$editarRegistro->codigoEmpleado}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre"   value="{{$editarRegistro->Nombre}}" class="form-control">

    </div>

    <div class ="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido"  value="{{$editarRegistro->Apellido}}" class="form-control" >
    </div>

    <div class ="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id="nivel"  value="{{$editarRegistro->Nivel}}" class="form-control">
    </div>

    <div class ="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono"   value="{{$editarRegistro->Telefono}}" class="form-control">
    </div>

    <button type="submit">Guardar</button>

</form>

</div>

</div>

</div>
@endsection