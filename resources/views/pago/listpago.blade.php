@extends('layouts.plantillabase')

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
                                <table id="pagos" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Factura</th>
                                            <th scope="col">Valor Pago</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col" >Acciones<a href="pagos/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a></th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                        @foreach ($pago as $pago)
                                        <tr>
                                            <td>{{ $pago->id }}</td>
                                            <td>{{ $pago->factura->fecha}}</td>
                                            <td>{{ $pago->valor }}</td>
                                            @if ($pago->valor < $pago->factura->valorTotal )
                                            <td>{{ $pago->estado = "Pendiente" }}</td>
                                            
                                            @else
                                            <td>{{ $pago->estado = "Paga" }}</td>  
                                            
                                            @endif

                                            <td colspan="2">
                                                <form action="/pagos/{{ $pago->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="/pagos/{{ $pago->id }}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
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
        $('#usuarios').DataTable({
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