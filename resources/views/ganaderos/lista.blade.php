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
    <h2>Listas de ganaderos</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Opciones</th>
        </tr>
        @foreach ($ganaderos as $ganadero)
        <tr>
            <td>{{ $ganadero->nombre }}</td>
            <td>{{ $ganadero->edad }}</td>
            <td>{{ $ganadero->estado }}</td>
            <td>{{ $ganadero->municipio }}</td>
            <td>

                <a href="/ganaderos/ver/{{$ganadero->id}}">Ver</a>
                <a href="/ganaderos/editar/{{$ganadero->id}}">Editar</a>
                <a href="/ganaderos/eliminar/{{$ganadero->id}}" onclick="return eliminarAlumno('Eliminar')">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/ganaderos/crear">Registro de ganado</a>
</body>

<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>