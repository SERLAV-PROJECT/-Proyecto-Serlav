@extends('layouts.plantillacreate');

@section('addPendra')

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">
                                            <h4 class="box-title">Factura</h4>
                                            <form action="/facturas/{{ $factura->id }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <a href="/facturas"  style="margin-left: 90%; margin-top:-4%" class="btn btn-secondary" tabindex="8">Cancelar</a>
                                            <button type="submit" style="margin-left: 80%; margin-top:-4%" class="btn btn-primary" tabindex="9">Guardar</button>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nombre Cliente</label>
                                                <input type="text" id="nombreCliente" name="nombreCliente" class="form-control @error('nombreCliente') is-invalid @enderror" value="{{$factura->nombreCliente}}" tabindex="1">
                                                <div class="valid-feedback">
                                                    Correcto!
                                                </div>
                                                @error('nombreCliente')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Fecha</label>
                                                <input type="date" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ $factura->fecha }}" tabindex="2">
                                                <div class="valid-feedback">
                                                    Correcto!
                                                </div>
                                                @error('estado')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class=" form-control-label">Valor Total</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                                    <input type="text" id="valorTotal" name="valorTotal" class="form-control" value="{{ $total }}" tabindex="2">
                                                    <div class="valid-feedback">
                                                        Correcto!
                                                    </div>
                                                </div>
                                            </div> 
                                        </form>
                                        </div>
                                        <div class="card-body--">
                                            <div class="table-stats order-table ov-h">
                                                <table id="prendas" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Prenda</th>
                                                            <th scope="col">Descripcion</th>
                                                            <th scope="col">Cantidad</th>
                                                            <th scope="col">valor</th>
                                                            <th scope="col">Factura</th>
                                                            <th scope="col">...</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($detalle as $detalle)
                                                        <tr>
                                                            <td>{{ $detalle->prenda->nombrePrenda }}</td>
                                                            <td>{{ $detalle->descripcion }}</td>
                                                            <td>{{ $detalle->prenda->cantidad }}</td>
                                                            <td>{{ $detalle->prenda->valor }}</td>
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
                            </div>
                        </div> <!-- /.col-md-4 -->

                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">
                                            <h4 class="box-title">Prendas <a href="/detalles/create" class="btn btn-warning" style="margin-left: 85%; margin-top:-5%"><i class="fa fa-plus-circle">Detalle</i></a></h4>
                                        </div>
                                        <div class="card-body--">
                                            <div class="table-stats order-table ov-h">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Prenda</th>
                                                            <th scope="col">Tipo de Tela</th>
                                                            <th scope="col">Color</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($prendas as $prenda)
                                                        <tr>
                                                            <td class="serial">{{ $prenda->id }}</td>
                                                            <td><span class="name">{{ $prenda->nombrePrenda }}</span> </td>
                                                            <td><span class="name">{{ $prenda->tipoTela}}</span></td>
                                                            <td><span class="name">{{ $prenda->color }}</span></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div> <!-- /.table-stats -->
                                        </div>
                                    </div> <!-- /.card -->
                                </div>
                            </div>
                        </div> <!-- /.col-md-4 -->

                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">
                                            <h4 class="box-title">Acciones</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="/pagos" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">Factura</label>
                                                <select name="factura_id" id="factura_id">
                                                    <option value="{{ $factura->id}}">{{ $factura->fecha }}</option>
                                                </select>
                                            </div>
                                            <br> 
                                            <div class="form-group">
                                                <label class=" form-control-label">Valor Total</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                                    <input type="text" id="valor" name="valor" class="form-control" value="{{ $total }}" tabindex="2">
                                                    <div class="valid-feedback">
                                                        Correcto!
                                                    </div>
                                                </div>
                                            </div>    
                                            <br>

                                            <br>
                                                    
                                            <a href="/pagos" class="btn btn-secondary" tabindex="9">Cancelar</a>
                                            <button type="submit" class="btn btn-primary" tabindex="10">Pagar</button>
                                        </form>
                                        </div>
                                    </div> <!-- /.card -->
                                </div>
                            </div>
                        </div> <!-- /.col-md-4 -->

                        <br>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Agregar Prendas </h4>
                                </div>
                                <div class="card-body">
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
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>
                </div>
                <!-- /.orders -->
            </div>
        </div>
@endsection