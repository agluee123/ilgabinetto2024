<?php
include_once("../vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//configuracion del servidor smtp para poder mandar el email
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $correo_electronico = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.yahoo.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ilgabinetto@yahoo.com.ar';
        $mail->Password = 'nvzjgfgieyxeqmvd';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('ilgabinetto@yahoo.com.ar', 'Sistema formulario');
        $mail->addAddress('ilgabinetto@yahoo.com.ar', 'agustin');

        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de $nombre";
        $mail->Body = "Nombre: $nombre<br>Email: $correo_electronico<br>Mensaje: $mensaje";

        // Enviar correo
        $mail->send();
        header("Location: /ilgabinetto/Vistas/contacto.php?enviado=1");
        exit;
    } catch (Exception $e) {
        header("Location: /ilgabinetto/Vistas/contacto.php?enviado=0");
    }
}
