<?php
include "modelo/conexion.php";

$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM persona WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edición de persona</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid d-flex justify-content-center align-items-center">
    <form class="col-4" method="POST">
      <h3 class="text-center text-secondary mt-5">Formulario</h3>
      <?php
      include "controlador/modificar_persona.php";
      while ($datos = $sql->fetch_object()) { ?>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input hidden type="number" name="id" value="<?= $id ?>">
          <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
        </div>

        <div class="mb-3">
          <label for="dni" class="form-label">DNI</label>
          <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
        </div>

        <div class="mb-3">
          <label for="fecha" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha ?>">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" class="form-control" name="correo" value="<?= $datos->correo ?>">
        </div>
      <?php }
      ?>
      <a href="./index.php" class="btn btn-primary">Regresar</a>
      <button type="submit" class="btn btn-success" name="btnmodificar" value="ok">Modificar Persona</button>
    </form>
  </div>

</body>

</html>