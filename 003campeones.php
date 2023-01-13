<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<?php

/* $orden = $_GET['orden'];
$col = $_GET['col'];
$consulta = "";

echo "$consulta";
if($orden == 'asc' || $orden == 'desc'){
    $conexion = connect();
    $consulta = "SELECT * FROM `champ` ORDER BY $col $orden";
} */

$conexion = mysqli_connect("localhost","root","","lol");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
};

echo "<h1>Bienvenid@ !! </h1>";

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {?>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">
                    Id
                <a class="text-decoration-none" href=""><i class="bi bi-chevron-up"></i></a>
                <a class="text-decoration-none" href=""><i class="bi bi-chevron-down"></i></a>
            </th>
                <th scope="col">
                    Nombre
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-up"></i></a>
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-down"></i></a>
            </th>
                <th scope="col">
                    Rol
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-up"></i></a>
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-down"></i></a>
            </th>
                <th scope="col">
                    Dificultad
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-up"></i></a>
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-down"></i></a>
            </th>
                <th scope="col">
                    Descripción
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-up"></i></a>
                    <a class="text-decoration-none" href=""><i class="bi bi-chevron-down"></i></a>
            </th>
            </tr>
        </thead>

   <?php foreach ($listaChamp as $champs) {
        echo "<tbody>
                <tr>
                <th scope='row'>$champs[id]</th>
                <th scope='row'>$champs[name]</th>
                <th scope='row'>$champs[rol]</th>
                <th scope='row'>$champs[difficulty]</th>
                <th scope='row' class='col-5'>$champs[description]</th>
                </tr>
            </tbody>";
    }
    echo "</table>";
}
?>
