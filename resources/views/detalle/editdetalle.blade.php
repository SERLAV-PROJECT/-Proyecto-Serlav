@extends('layouts.plantillabase')

@section('contenido')
<div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Editar Detalle</strong>
                            </div>
                            <div class="card-body card-block">
                            <form action="/detalles/{{ $detalle->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class=" form-control-label">Descripcion la Prenda</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="descripcion" name="descripcion" class="form-control"  value="{{$detalle->descripcion}}" tabindex="1">
                                        <div class="valid-feedback">
                                        Correcto!
                                        </div>
                                    @error('descripcion')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    </div> 
                                </div>    
                                <br> 

                                <div class="mb-3">
                                    <label for="" class="form-label">Prenda</label>
                                    <select name="prenda_id" id="prenda_id">
                                        @foreach ($prenda as $prenda)
                                        <option value="{{ $prenda->id }}">{{ $prenda->nombrePrenda }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Factura</label>
                                    <select name="factura_id" id="factura_id">
                                        @foreach ($factura as $factura)
                                        <option  value="{{ $factura->id }}">{{ $factura->fecha }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <a href="/detalles" class="btn btn-secondary" tabindex="9">Cancelar</a>
                                <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection