<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $destinatario = "thesebymg@gmail.com";
    $asunto = "Nuevo suscriptor";
    $mensaje = "Nuevo suscriptor:\n";
    $mensaje .= "Nombre: " . $nombre . "\n";
    $mensaje .= "Correo electrónico: " . $email . "\n";

    // Cabeceras adicionales
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>

