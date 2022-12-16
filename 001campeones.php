<!-- Crea el archivo 001campeones.php donde listes todos los campeones del LOL que has metido 
en tu base de datos. Acuérdate que para ello deberás hacer una conexión con la base de datos 
y un foreach para cada campeón que tengas albergado en la tabla champ. -->

<?php
$conexion = mysqli_connect("localhost","root","lol");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
};

echo "<h1>Bienvenid@ a MySQL !! </h1>";

$consulta = "SELECT * FROM `champ`";
$listaChamp = mysqli_query($conexion, $consulta);

if ($listaChamp) {
    foreach ($listaChamp as $champs) {
        echo "$champs[id]. Nombre campeón: $champs[name] -- Rol: $champs[rol] -- Dificultad: $champs[difficulty] <br> - $champs[description]<br><br>";
    }
}

?>