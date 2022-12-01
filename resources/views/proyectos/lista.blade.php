<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        table,
        td,
        th {
            border: 1px solid black;
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
    <h2>Lista de proyectos</h2>
    <table>
        <tr>
            <th>titulo</th>
            <th>autor</th>
            <th>descripcion</th>
            <th>fecha</th>
            <th>asesor</th>
        </tr>
        @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->titulo }}</td>
            <td>{{ $proyecto->autor }}</td>
            <td>{{ $proyecto->descripcion }}</td>
            <td>{{ $proyecto->fecha }}</td>
            <td>{{ $proyecto->asesor }}</td>
            <td>
                <a href="/proyectos/ver/{{$proyecto->id}}">Ver</a>
                <a href="/proyectos/editar/{{$proyecto->id}}">Editar</a>
                <a href="/proyectos/eliminar/{{$proyecto->id}}" onclick="return eliminarAlumno('Eliminar Proyecto')">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="/proyectos/crear">Nuevo proyecto</a>
</body>

<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>