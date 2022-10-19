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
                                <table id="usuarios" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre Apellido</th>
                                            <th scope="col">Documento</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col" >Acciones<a href="usuarios/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a></th>
                                        </tr>
                                     </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->id }}</td>
                                            <td>{{ $usuario->name }} {{ $usuario->apellido }}</td>
                                            <td>{{ $usuario->documento }}</td>
                                            <td>{{ $usuario->telefono }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->estado }}</td>
                                            <td colspan="2">
                                                <form action="{{ route ('usuarios.destroy',$usuario->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
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