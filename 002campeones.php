<!-- Modifica el archivo 001campeones.php y guárdalo como 002campeones.php pero pon al lado 
de cada uno de los campeones listados un botón para editar y otro para borrar. Cada uno de 
esos botones hará la correspondiente función dependiendo del id del campeón seleccionado. -->

<?php
$conexion = mysqli_connect("localhost","root","","lol");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
};

echo "<h1>Bienvenid@ a MySQL !! </h1>";

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    foreach ($listaChamp as $champs) {
        echo "$champs[id]. Nombre campeón: $champs[name] -- Rol: $champs[rol] -- Dificultad: $champs[difficulty] <br> - $champs[description]<br>";
        echo "<a href='003editando.php'><button>Editar</button></a>";
        echo "<button>Borrar</button><br><br>";
    }
}

?>