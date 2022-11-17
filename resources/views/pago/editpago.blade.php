@extends('layouts.plantillabase')

@section('contenido')
<div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Editar Pago</strong>
                            </div>
                            <div class="card-body card-block">
                            <form action="/pagos/{{$pago->id}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="" class="form-label">Factura</label>
                                    <select name="factura_id" id="factura_id">
                                        @foreach ($factura as $factura)
                                        <option value="{{ $factura->id }}">{{ $factura->fecha }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <br>
                                    
                                <div class="form-group">
                                    <label class=" form-control-label">Valor Total</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input type="text" id="valor" name="valor" class="form-control @error('valor') is-invalid @enderror" value="{{ $pago->valor }}" tabindex="2">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('valor')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                </div>        
                                <br>

                                <div class="form-group">
                                    <label class=" form-control-label">Estado</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input type="text" id="estado" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ $pago->estado }}" tabindex="2">
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>
                                        @error('estado')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror  
                                </div>        
                                <br>
                                   
                                <a href="/pagos" class="btn btn-secondary" tabindex="9">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection