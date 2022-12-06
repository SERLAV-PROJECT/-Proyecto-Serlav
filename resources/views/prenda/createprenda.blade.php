@extends('layouts.plantillabase')

@section('contenido')
<div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Crear Prenda</strong>
                            </div>
                            <div class="card-body card-block">
                            <form action="{{ route('store-prendas') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class=" form-control-label">Nombre de la Prenda</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="name" name="nombrePrenda" class="form-control @error('nombrePrenda') is-invalid @enderror" value="{{ old('nombrePrenda') }}" tabindex="1">
                                        <div class="valid-feedback">
                                        Correcto!
                                    </div>
                                    @error('nombrePrenda')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> 
                                <br> 
                                <div class="form-group">
                                    <label class=" form-control-label">Tipo de Tela</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input type="text" id="tipoTela" name="tipoTela" class="form-control @error('tipoTela') is-invalid @enderror" value="{{ old('tipoTela') }}" tabindex="2">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('tipoTela')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror

                                </div>    
                                <br>

                                <div class="form-group">
                                    <label class=" form-control-label">Color</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <label>Color picker</label>
                                        <input type="text" class="form-control" id="colorPicker">
                                </div>
                                <br>
                                        
                                        
                                        <div class="form-group">
                                            <label class=" form-control-label">Cantidad</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input type="text" id="cantidad" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad') }}" tabindex="4">
                                                <div class="valid-feedback">
                                                    Correcto!
                                                </div>
                                                @error('cantidad')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror  
                                        </div>       
                                        <br>        
                               
                                <div class="form-group">
                                    <label class=" form-control-label">Valor</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                        <input type="number" id="valor" name="valor" class="form-control @error('valor') is-invalid @enderror" value="{{ old('valor') }}" tabindex="3">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('valor')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror

                                </div>
                                <br>
                                <a href="/facturas" class="btn btn-secondary" tabindex="9">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection

@section('js')

@endsection