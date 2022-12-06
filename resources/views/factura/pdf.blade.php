<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="container py-5">
        <h5 class=" font-weight-bold">Reporte</h5>
        <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Nombre Cliente</th>
                                            <th scope="col">Valor Total</th>
                                            <th scope="col">Estado</th>

                                        </tr>
                                     </thead>
                                    <tbody>
                                        @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ $factura->id }}</td>
                                            <td>{{ $factura->fecha }}</td>
                                            <td>{{ $factura->nombreCliente }}</td>
                                            <td>{{ $factura->valorTotal }}</td>
                                            <td>{{ $factura->estado }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </div>
</body>
</html>