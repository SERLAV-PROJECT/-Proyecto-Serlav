@extends('layouts.plantillacreate');

@section('contenido')
<h2>Crear Facturas</h2>

<form action="/facturas" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre Cliente</label>
        <input type="text" id="nombreCliente" name="nombreCliente" class="form-control @error('nombreCliente') is-invalid @enderror" value="{{ old('nombreCliente') }}" tabindex="1">
        <div class="valid-feedback">
            Correcto!
        </div>
        @error('nombreCliente')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input type="date" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha') }}" tabindex="2">
        <div class="valid-feedback">
            Correcto!
        </div>
        @error('estado')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Valor Total</label>
        <input type="number" id="valorTotal" name="valorTotal" class="form-control @error('valorTotal') is-invalid @enderror" value="{{ old('valorTotal') }}" tabindex="3">
        <div class="valid-feedback">
            Correcto!
        </div>
        @error('valorTotal')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input type="text" id="estado" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado') }}" tabindex="7">
        <div class="valid-feedback">
            Correcto!
        </div>
        @error('estado')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <select name="user_id" id="user_id">
            @foreach ($usuario as $usuario)
            <option>{{ $usuario->id }}</option>
            @endforeach
        </select>
    </div>
    <a href="/facturas" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
@endsection