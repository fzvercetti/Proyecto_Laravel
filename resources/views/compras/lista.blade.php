<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de ganado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        table,
        td,
        th {
            border: 2px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 70px;
        }

        td {
            height: 30px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
        <!-- navigation bar -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
        
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ganaderos/crear">Crear registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ganaderos">Ver registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/"></a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- navigation bar ends here -->
</head>

<body>
    <h2>Listas de ganaderos</h2>
    <table>
        <tr>
            <th>Propietario</th>
            <th>Fecha</th>
            <th>Raza</th>
            <th>Comprador</th>
            <th>Opciones</th>
        </tr>
        @foreach ($compras as $compra)
        <tr>
            <td>{{ $compra->propietario }}</td>
            <td>{{ $compra->matricula }}</td>
            <td>{{ $compra->fecha }}</td>
            <td>{{ $compra->raza }}</td>
            <td>{{ $compra->comprador }}</td>
            <td>

                <a href="/compras/ver/{{$compra->id}}">Ver</a>
                <a href="/compras/editar/{{$compra->id}}">Editar</a>
                <a href="/compras/eliminar/{{$compra->id}}" onclick="return eliminarAlumno('Eliminar')">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/compras/crear">Registro de ganado</a>
</body>

<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>