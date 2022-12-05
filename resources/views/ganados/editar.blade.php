<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <a href="/ganados">Ver los proyectos</a>
    <br>

    <h2>Editar proyecto</h2>
    <div>
        <form action="/ganados/editar/{{ $ganado->id}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Raza:</label>
            <input type="text" name="raza" placeholder="raza" value="{{ $ganado->raza}}">

            <label>Peso:</label>
            <input type="text" name="peso" placeholder="peso" value="{{ $ganado->raza}}">

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="edad" value="{{ $ganado->edad}}">

            <label>Arete:</label>
            <input type="text" name="arete" placeholder="Arete" value="{{ $ganado->arete}}">

            <label>Propietario:</label>
            <input type="text" name="propietario" placeholder="propietario" value="{{ $ganado->propietario}}">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>