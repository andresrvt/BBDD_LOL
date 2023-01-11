<!-- Modifica el archivo 001campeones.php y guárdalo como 002campeones.php pero pon al lado 
de cada uno de los campeones listados un botón para editar y otro para borrar. Cada uno de 
esos botones hará la correspondiente función dependiendo del id del campeón seleccionado. -->
<link rel="stylesheet" href="css/bootstrap.min.css">

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
        echo "<button class='btn btn-primary m-2'>Borrar</button><br><br></div>";
    }
}
?>