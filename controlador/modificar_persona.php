<?php
if (!empty($_POST["btnmodificar"])) {
  if (
    !empty($_POST["nombre"]) and
    !empty($_POST["apellido"]) and
    !empty($_POST["dni"]) and
    !empty($_POST["fecha"]) and
    !empty($_POST["correo"])
  ) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $fecha = $_POST["fecha"];
    $correo = $_POST["correo"];

    $sql = $conexion->query("UPDATE persona SET nombre='$nombre', apellido='$apellido', dni=$dni, fecha='$fecha', correo='$correo' WHERE id=$id");

    if ($sql == 1) {
      header("Location:index.php");
    } else {
      echo "<div class='alert alert-danger'>Error al actualizar persona</div>";
    }
  } else {
    echo "<div class='alert alert-warning'>Es necesario completar todos los campos</div>";
  }
}
