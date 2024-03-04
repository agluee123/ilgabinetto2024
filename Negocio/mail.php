<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo_electronico = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "bastosagustin1998@gmail.com";
    $asunto = "Nuevo mensaje de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $correo_electronico\n";
    $contenido .= "Mensaje: $mensaje\n";

    @mail($destinatario, $asunto, $contenido);
    header("Location:contacto.php");
    exit();
}
?>