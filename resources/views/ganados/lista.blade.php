<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <title>Listas de ganado</title>
    <style>
        body {
            margin: 50px;
            padding: 5px;
            
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

       
        .btn, a{
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 10px 10px; /* Add some padding */
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}
.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}
.danger {background-color: #f44336;} /* Red */
.danger:hover {background: #da190b;}
.default {background-color: #070B99; color: black;} /* Gray */
.default:hover {background: #ddd;} 
    </style>
    <!-- navigation bar -->
  
  <!-- navigation bar ends here -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
      <a class="navbar-brand" href="#">Inicio</a>
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
</head>

<body>
<div class="table-responsive">
    <table class="table table-dark">
      <thead>
        <tr>
        <th scope="col">Raza</th>
          <th scope="col">Peso</th>
          <th scope="col">Edad</th>
          <th scope="col">Arete</th>
          <th scope="col">Propietario</th>
          <th scope="col">Opciones</th>
        </tr>
        
        @foreach ($ganados as $ganado)
        <tr >
        <td>{{ $ganado->raza }}</td>
            <td>{{ $ganado->peso }}</td>
            <td>{{ $ganado->edad }}</td>
            <td>{{ $ganado->matricula }}</td>
            <td>{{ $ganado->arete }}</td>
            <td>{{ $ganado->propietario }}</td>
            <td>
                <button class="btn success"><a href="/ganados/ver/{{$ganado->id}}"> Ver</a></button>
                <button class="btn warning"><a href="/ganados/editar/{{$ganado->id}}">Editar</a></button>
                <button class="btn danger"><a href="/ganados/eliminar/{{$ganado->id}}" onclick="return eliminarAlumno('Eliminar')">Eliminar</a></button>
              
            </td>
        </tr>
        @endforeach
      </thead>
    </table>
  </div>
  <br>
    <button class="btn default"> <a href="/ganados/crear">Registro de ganado</a></button>
</body>

<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>