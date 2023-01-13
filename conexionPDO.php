<?php
$dsn = 'mysql:dbname=lol;host=localhost';
$usuario = 'root';
$contraseña = '';

try {
    $conexion = new PDO($conexion, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Falló la conexión: " . $e->getMessage();
}
?>