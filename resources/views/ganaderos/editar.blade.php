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
    <a href="/ganaderos">Ver los ganaderos</a>
    <br>

    <h2>Editar ganaderos</h2>
    <div>
        <form action="/ganaderos/editar/{{ $ganadero->id}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre" value="{{ $ganadero->nombre}}">

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ $ganadero->edad}}">

            <label>Estado:</label>
            <input type="text" name="estado" placeholder="Estado" value="{{ $ganadero->estado}}">

            <label>Municipio:</label>
            <input type="text" name="municipio" placeholder="Municipio" value="{{ $ganadero->municipio}}">


            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>