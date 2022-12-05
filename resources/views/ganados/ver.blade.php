<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <title>Listas</title>
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
    </style>
     <!-- navigation bar -->
     <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
      <a class="navbar-brand" href="/ganados">Inicio</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" href="/ganados/crear" aria-current="page">Crear registros <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/ganados">Ver registros</a>
              </li>
             
              
          </ul>
          
      </div>
  </nav>
  <!-- navigation bar ends here -->
</head>

<body>
    <br>

    <h2> lista de ganados</h2>

    <div>
        <p> Raza: {{ $ganado->raza}}</p>
        <p> Peso: {{ $ganado->peso}}</p>
        <p> Edad: {{ $ganado->edad}}</p>
        <p> Arete: {{ $ganado->arete}}</p>
        <p> Propietario: {{ $ganado->propietario}}</p>

    </div>
</body>

</html>