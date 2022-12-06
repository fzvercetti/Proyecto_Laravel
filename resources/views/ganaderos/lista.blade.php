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
        
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" href="/ganaderos/crear" aria-current="page">Crear registros <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/ganaderos">Ver registros</a>
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
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Edad</th>
          <th scope="col">Matricula</th>
          <th scope="col">Ubicacion</th>
          <th scope="col">Opciones</th>
        </tr>
        
        @foreach ($ganaderos as $ganadero)
        <tr >
            <td >{{ $ganadero->nombre }}</td>
            <td >{{ $ganadero->apellido }}</td>
            <td >{{ $ganadero->edad }}</td>
            <td>{{ $ganadero->matricula }}</td>
            <td >{{ $ganadero->ubicacion }}</td>

            <td>
                <button class="btn success"><a href="/ganaderos/ver/{{$ganadero->id}}"> Ver</a></button>
                <button class="btn warning"><a href="/ganaderos/editar/{{$ganadero->id}}">Editar</a></button>
                <button class="btn danger"><a href="/ganaderos/eliminar/{{$ganadero->id}}" onclick="return eliminarAlumno('Eliminar')">Eliminar</a></button>
              
            </td>
        </tr>
        @endforeach
      </thead>
    </table>
  </div>
  

    <br>
    <button class="btn default"> <a href="/ganaderos/crear">Registrar ganaddero</a></button>
   
</body>

<script>
    function eliminarAlumno(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

</html>