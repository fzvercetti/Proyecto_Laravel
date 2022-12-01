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
    <a href="/proyectos">Ver los proyectos</a>
    <br>

    <h2>Editar proyecto</h2>
    <div>
        <form action="/proyectos/editar/{{ $proyecto->id}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>titulo:</label>
            <input type="text" name="titulo" placeholder="titulo" value="{{ $proyecto->titulo}}">

            <label>autor:</label>
            <input type="text" name="autor" placeholder="autor" value="{{ $proyecto->autor}}">

            <label>descripcion:</label>
            <input type="text" name="descripcion" placeholder="descripcion" value="{{ $proyecto->descripcion}}">

            <label>fecha:</label>
            <input type="text" name="fecha" placeholder="fecha" value="{{ $proyecto->fecha}}">

            <label>asesor:</label>
            <input type="text" name="asesor" placeholder="Su asesor" value="{{ $proyecto->asesor}}">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>