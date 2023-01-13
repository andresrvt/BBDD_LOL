<?php
$id = $_GET['id'] ?? $_POST['id'];

$conexion = mysqli_connect("localhost", "root", "", "lol");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
};



if (isset($id)) {
  $borrar = "DELETE FROM `champ` where id=$id";

  if (mysqli_query($conexion, $borrar)) {
    echo "Campeón eliminado correctamente";
  } else {
    echo "Error:" . mysqli_connect_error();
  }
  header('Location:002campeones.php');
}

