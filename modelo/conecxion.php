<?php
$dsn = "mysql:host=localhost;dbname=id21592599_dblibreria";
$usuario = "id21592599_root";
$contrasena = "";

try {
    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
