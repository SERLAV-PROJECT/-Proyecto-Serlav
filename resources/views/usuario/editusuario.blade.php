@extends('layouts.plantillabase');

@section('contenido')
<div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Crear Usuario</strong>
                            </div>

                            <div class="card-body card-block">
                            <form action="/usuarios/{{ $usuario->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class=" form-control-label">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="name" name="name"  value="{{ $usuario->name }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" tabindex="1">
                                        <div class="valid-feedback">
                                        Correcto!
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <small class="form-text text-muted">ex. Pepito</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Apellido</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input type="text" id="apellido" name="apellido"  value="{{ $usuario->apellido }}" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido') }}" tabindex="2">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('apellido')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <small class="form-text text-muted">ex. Suarez</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Documento</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input type="number" id="documento" name="documento"  value="{{ $usuario->documento }}" class="form-control @error('documento') is-invalid @enderror" value="{{ old('documento') }}" tabindex="3">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('documento')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <small class="form-text text-muted">ex. 1031646877</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" id="telefono" name="telefono"  value="{{ $usuario->telefono }}" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}" tabindex="4">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('telefono')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <small class="form-text text-muted">ex. 3016951870</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" id="email" name="email"  value="{{ $usuario->email }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" tabindex="5" disabled>
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <small class="form-text text-muted">ex. correo@gmail.com</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="password" id="password" name="password" value="{{ $usuario->password }}" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" tabindex="6">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <small class="form-text text-muted">ex. ******</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Estado</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-heart"></i></div>
                                        <input type="text" id="estado" name="estado" value="{{ $usuario->estado }}" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado') }}" value="Activar" tabindex="8">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('estado')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Rol</label>
                                        <select name="roles" id="roles">
                                            @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <a href="/usuarios" class="btn btn-secondary" tabindex="9">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection