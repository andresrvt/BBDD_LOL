<link rel="stylesheet" href="css/bootstrap.min.css">

<?php

$conexion = mysqli_connect("localhost","root","","lol");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
};

echo "<h1>Bienvenid@ !! </h1>";

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    echo "<div class='table-responsive'>
    <table class='table table-primary'>
        <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Rol</th>
                <th scope='col'>Dificultad</th>
                <th scope='col'>Descripción</th>
            </tr>
        </thead>
    <tbody>";
    foreach ($listaChamp as $champs) {
        echo "<tr>
              <td scope='row'>$champs[id]</td>
              <td>$champs[name]</td>
              <td>$champs[rol]</td>
              <td>$champs[difficulty]</td>
              <td>$champs[description]</td>
            </tr>";
        }
          echo "</tbody>
        </table>
      </div>
      <br>
      ";
}

?>