<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
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
    <a href="/compras">Ver lista</a>
    <br>

    <h2>Registro de compra y venta</h2>
    <div>
        <form action="/compras/crear" method ="POST">
            @csrf
            <label>Propietario:</label>
            <input type="text" name="propietario" placeholder="propietario" required>

            <label>Fecha:</label>
            <input type="text" name="fecha" placeholder="dd-mm-aaaa" required>

            <label>Raza:</label>
            <input type="text" name="raza" placeholder="Raza" required>

            <label>Comprador:</label>
            <input type="text" name="comprador" placeholder="Comprador" required>

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>