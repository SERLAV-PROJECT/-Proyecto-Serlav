@extends('layouts.plantillabase');

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="usuarios" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre Cliente</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Valor Total</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col" >Acciones <a href="facturas/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a></th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                        @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ $factura->id }}</td>
                                            <td>{{ $factura->nombreCliente }}</td>
                                            <td>{{ $factura->fecha }}</td>
                                            <td>{{ $factura->valorTotal }}</td>
                                            <td>{{ $factura->user->name}}</td>
                                            <td>{{ $factura->estado }}</td>
                                            <td colspan="2">
                                                <form action="/facturas/{{ $factura->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="/facturas/{{ $factura->id }}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#facturas').DataTable({
            "language": {
                "search": "Buscar",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "first": "Primero",
                    "last": "Último"
                }
            }
        });
    });
</script>

@endsection