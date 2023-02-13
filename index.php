<?php
include "modelo/conexion.php";
include "controlador/registro_persona.php";
include "controlador/eliminar_persona.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Personas</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <button class="btn btn-small" onclick="toggleDarkMode()"><i class="bi bi-moon-fill"></i></button>
  <h1 class="text-center p-3">Registro</h1>
  <div class="container-fluid d-flex flex-column justify-content-center align-items-center mt-2">
    <form class="col-4" method="POST">
      <h3 class="text-center text-secondary">Formulario</h3>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido">
      </div>

      <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="text" class="form-control" name="dni">
      </div>

      <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha">
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo">
      </div>
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar Persona</button>
    </form>
    <div class="col-8 p-4">
      <h3 class="text-center text-secondary mt-5">Personas</h3>
      <table class="table table-striped table-hover" id="table">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">DNI</th>
            <th scope="col">FECHA</th>
            <th scope="col">CORREO</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "modelo/conexion.php";
          $sql = $conexion->query("SELECT * FROM persona");
          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <td><?= $datos->id ?></td>
              <td><?= $datos->nombre ?></td>
              <td><?= $datos->apellido ?></td>
              <td><?= $datos->dni ?></td>
              <td><?= $datos->fecha ?></td>
              <td><?= $datos->correo ?></td>
              <td>
                <a href="modificar_persona.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="bi bi-pencil-square"></i></a>
                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="bi bi-trash3-fill"></i></a>
              </td>
            </tr>
          <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>
</body>

</html>