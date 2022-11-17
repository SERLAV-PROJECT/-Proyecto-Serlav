<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Facturas</h2>

<table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre Cliente</th>
                                            <th scope="col">Valor Total</th>

                                        </tr>
                                     </thead>
                                    <tbody>
                                        @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ $factura->id }}</td>
                                            <td>{{ $factura->nombreCliente }} {{ $factura->apellido }}</td>
                                            <td>{{ $factura->valorTotal }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
</body>
</html>