<?php
  $id = $_GET['id'] ?? $_POST['id'];

  $conexion = mysqli_connect("localhost", "root", "", "lol");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  };

  if (isset($id)) {
    $consulta = "SELECT * FROM `champ` WHERE id = $id";
    $campeon = mysqli_query($conexion, $consulta);

    if ($campeon) {
      foreach ($campeon as $champs) {
      }
    } else {
      echo "No hay campeón seleccionado";
    }
  }
  
  if (isset($id)) {
    $borrar = "DELETE * FROM `champ` where id=$champs[id]";

    if (mysqli_multi_query($conexion, $borrar)) {
      echo "Campeón eliminado correctamente";
    } else {
      echo "Error:" . mysqli_connect_error();
    }
  }
?>