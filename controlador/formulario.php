<?php
if (!empty($_POST["submit"])) {
   // Verifica si todos los campos necesarios están llenos
    if (!empty($_POST["fecha"]) && !empty($_POST["correo"]) && !empty($_POST["nombre"]) && !empty($_POST["asunto"]) && !empty($_POST["comentario"])) {
        $fecha = $_POST["fecha"]; 
        $correo = $_POST["correo"];
        $nombre = $_POST["nombre"];
        $asunto = $_POST["asunto"];
        $comentario = $_POST["comentario"];

        $sql = $conexion->query("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES ('$fecha', '$correo', '$nombre', '$asunto', '$comentario')");
         
    } 
}
?>
