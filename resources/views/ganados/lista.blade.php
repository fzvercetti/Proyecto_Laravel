<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de ganado</title>
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
</head>

<body>
    <h2>Listas de ganado</h2>
    <table>
        <tr>
            <th>Raza</th>
            <th>Propietario</th>
            <th>Edad</th>
            <th>Matricula</th>
            <th>Opciones</th>
        </tr>
        @foreach ($ganados as $ganado)
        <tr>
            <td>{{ $ganado->raza }}</td>
            <td>{{ $ganado->propietario }}</td>
            <td>{{ $ganado->edad }}</td>
            <td>{{ $ganado->matricula }}</td>
            <td>

                <a href="/ganados/ver/{{$ganado->id}}">Ver</a>
                <a href="/ganados/editar/{{$ganado->id}}">Editar</a>
                <a href="/ganados/eliminar/{{$ganado->id}}" onclick="return eliminarAlumno('Eliminar')">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/ganados/crear">Registro de ganado</a>
</body>

<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>