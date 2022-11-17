@extends('layouts.plantillacreate');

<!--        
<input type="date" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha') }}" tabindex="2">
-->

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
            @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>
    <a href="/facturas" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
@endsection

@section('addPendra')

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Orders -->
                <div class="orders">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="box-title">Orders </h4>
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
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($prendas as $prenda)
                                                                <tr>
                                                                    <td class="serial">{{ $prenda->id }}</td>
                                                                    <td>  <span class="name">{{ $prenda->nombrePrenda }}</span> </td>
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

                                        <div class="col-xl-4">
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-12">
                                                    <div class="card br-0">
                                                        <div class="card-body">
                                                            <div class="chart-container ov-h">
                                                                <div id="flotPie1" class="float-chart"></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.card -->
                                                </div>

                                                <div class="col-lg-6 col-xl-12">
                                                    <div class="card bg-flat-color-3  ">
                                                        <div class="card-body">
                                                            <h4 class="card-title m-0  white-color ">August 2018</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div id="flotLine5" class="flot-line"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                    </div>
                                </div>
                                <!-- /.orders -->
                                <!-- To Do and Live Chat -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title box-title">To Do List</h4>
                                                <div class="card-content">
                                                    <div class="todo-list">
                                                        <div class="tdl-holder">
                                                            <div class="tdl-content">
                                                                <ul>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                                                            <a href='#' class="fa fa-times"></a>
                                                                            <a href='#' class="fa fa-pencil"></a>
                                                                            <a href='#' class="fa fa-check"></a>
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                                            <a href='#' class="fa fa-times"></a>
                                                                            <a href='#' class="fa fa-pencil"></a>
                                                                            <a href='#' class="fa fa-check"></a>
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                                            <a href='#' class="fa fa-times"></a>
                                                                            <a href='#' class="fa fa-pencil"></a>
                                                                            <a href='#' class="fa fa-check"></a>
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                                            <a href='#' class="fa fa-times"></a>
                                                                            <a href='#' class="fa fa-pencil"></a>
                                                                            <a href='#' class="fa fa-check"></a>
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                                            <a href='#' class="fa fa-times"></a>
                                                                            <a href='#' class="fa fa-pencil"></a>
                                                                            <a href='#' class="fa fa-check"></a>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div> <!-- /.todo-list -->
                                                </div>
                                            </div> <!-- /.card-body -->
                                        </div><!-- /.card -->
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title box-title">Live Chat</h4>
                                                <div class="card-content">
                                                    <div class="messenger-box">
                                                        <ul>
                                                            <li>
                                                                <div class="msg-received msg-container">
                                                                    <div class="avatar">
                                                                    <img src="images/avatar/64-1.jpg" alt="">
                                                                    <div class="send-time">11.11 am</div>
                                                                    </div>
                                                                    <div class="msg-box">
                                                                        <div class="inner-box">
                                                                            <div class="name">
                                                                                John Doe
                                                                            </div>
                                                                            <div class="meg">
                                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.msg-received -->
                                                            </li>
                                                            <li>
                                                                <div class="msg-sent msg-container">
                                                                    <div class="avatar">
                                                                    <img src="images/avatar/64-2.jpg" alt="">
                                                                    <div class="send-time">11.11 am</div>
                                                                    </div>
                                                                    <div class="msg-box">
                                                                        <div class="inner-box">
                                                                            <div class="name">
                                                                                John Doe
                                                                            </div>
                                                                            <div class="meg">
                                                                                Hay how are you doing?
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.msg-sent -->
                                                            </li>
                                                        </ul>
                                                        <div class="send-mgs">
                                                            <div class="yourmsg">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                            <button class="btn msg-send-btn">
                                                                <i class="pe-7s-paper-plane"></i>
                                                            </button>
                                                        </div>
                                                    </div><!-- /.messenger-box -->
                                                </div>
                                            </div> <!-- /.card-body -->
                                        </div><!-- /.card -->
                                    </div>
                                </div>
                                <!-- /To Do and Live Chat -->
                                <!-- Calender Chart Weather  -->
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <!-- <h4 class="box-title">Chandler</h4> -->
                                                <div class="calender-cont widget-calender">
                                                    <div id="calendar"></div>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="card ov-h">
                                            <div class="card-body bg-flat-color-2">
                                                <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                                            </div>
                                            <div id="cellPaiChart" class="float-chart"></div>
                                        </div><!-- /.card -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card weather-box">
                                            <h4 class="weather-title box-title">Weather</h4>
                                            <div class="card-body">
                                                <div class="weather-widget">
                                                    <div id="weather-one" class="weather-one"></div>
                                                </div>
                                            </div>
                                        </div><!-- /.card -->
                                    </div>
                                </div>
                                <!-- /Calender Chart Weather -->
            </div>
        </div>
@endsection