<!-- Modifica el archivo 001campeones.php y guárdalo como 002campeones.php pero pon al lado 
de cada uno de los campeones listados un botón para editar y otro para borrar. Cada uno de 
esos botones hará la correspondiente función dependiendo del id del campeón seleccionado. -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="modal fade" id='theModal' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Se van a eliminar los datos del campeón,¿estás seguro?.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Borrar campeón</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>



<?php
$conexion = mysqli_connect("localhost","root","","lol");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
};

echo "<h1 class='m-2'</h1>Conexión realizada</h1>";

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    foreach ($listaChamp as $champs) {
        echo "<div class='container-fluid !direction !spacing'>";
        echo "$champs[id]. Nombre campeón: $champs[name] -- Rol: $champs[rol] -- Dificultad: $champs[difficulty] <br> - $champs[description]<br>";
        echo "<a href='003editando.php?id=$champs[id]'><button class='btn btn-primary'>Editar</button></a>";
        echo "<a href='delete.php?id=$champs[id]'><button type='button' class='btn btn-danger m-2' data-toggle='modal' data-target='#theModal'>Borrar</button></a><br><br></div>";
    }
}
?>