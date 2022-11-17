@extends('layouts.plantillacreate');

@extends('layouts.plantillacreate');

@section('addPendra')

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Orders -->
                <div class="orders">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="box-title">Factura</h4>
                                                </div>
                                                <div class="card-body--">
                                                    <div class="table-stats order-table ov-h">
                                                        <table class="table ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Prenda</th>
                                                                    <th scope="col">Cantidad</th>
                                                                    <th scope="col">Valor</th>
                                                                    <th scope="col">...</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($prendas as $prenda)
                                                                <tr>
                                                                    <td class="serial">{{ $prenda->id }}</td>
                                                                    <td><span class="name">{{ $prenda->nombrePrenda }}</span> </td>
                                                                    <td><span class="count">{{ $prenda->cantidad }}</span></td>
                                                                    <td><span class="count">{{ $prenda->valor }}</span></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- /.table-stats -->
                                                </div>
                                            </div> <!-- /.card -->
                                        </div>  <!-- /.col-lg-8 -->

                                        <div class="col-xl-5">
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-12">
                                                    <div class="card br-0">
                                                            <div class="card-body">
                                                                <h4 class="box-title">Detalles </h4>
                                                            </div>
                                                            <div class="card-body--">
                                                                <div class="table-stats order-table ov-h">
                                                                    <table id="prendas" class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Descripcion</th>
                                                                                <th scope="col">Prenda</th>
                                                                                <th scope="col">Factura</th>
                                                                                <th scope="col">...</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($detalle as $detalle)
                                                                            <tr>
                                                                                <td>{{ $detalle->descripcion }}</td>
                                                                                <td>{{ $detalle->prenda->nombrePrenda }}</td>
                                                                                <td>{{ $detalle->factura->fecha }}</td>
                                                                                <td colspan="2">
                                                                                    <form action="/detalles/{{ $detalle->id }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <a href="/detalles/{{ $detalle->id }}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                    </div> <!-- /.card -->
                                                </div>

                                                <!--<div class="col-lg-6 col-xl-12">
                                                    <div class="card bg-flat-color-3  ">
                                                        <div class="card-body">
                                                            <h4 class="card-title m-0  white-color ">August 2018</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div id="flotLine5" class="flot-line"></div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div> <!-- /.col-md-4 -->

                                        <div class="col-xl-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="box-title">Agregar Prendas </h4>
                                                </div>
                                                <div class="card-body--">
                                                <div class="card">
                                                    <div class="card-body card-block">
                                                    <form action="/prendas" method="POST">
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
                                                                <input type="text" id="color" name="color" class="form-control @error('color') is-invalid @enderror" value="{{ old('color') }}" tabindex="2">
                                                                <div class="valid-feedback">
                                                                    Correcto!
                                                                </div>
                                                                @error('color')
                                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                                @enderror  
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
                                                        <a href="/prendas" class="btn btn-secondary" tabindex="9">Cancelar</a>
                                                        <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div> <!-- /.card -->
                                        </div>  <!-- /.col-lg-8 -->
                                    </div>
                                </div>
                                <!-- /.orders -->
            </div>
        </div>
@endsection