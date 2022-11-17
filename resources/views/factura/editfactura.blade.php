@extends('layouts.plantillabase');

@section('contenido')
<h2>Editar Uuarios</h2>

<form action="/facturas/{{ $factura->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre Cliente</label>
        <input type="text" id="nombreCliente" name="nombreCliente" class="form-control" value="{{ $factura->nombreCliente }}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="fecha" name="fecha" class="form-control" value="{{ $factura->fecha }}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Documento</label>
        <input type="number" id="valorTotal" name="valorTotal" class="form-control" value="{{ $factura->valorTotal }}" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input type="text" id="estado" name="estado" class="form-control" value="{{ $factura->estado }}" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <select name="user_id" id="user_id">
            @foreach ($usuario as $usuario)
            <option>{{ $usuario->id }}</option>
            @endforeach
        </select>
    </div>
    <a href="/usuarios" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
@endsection