<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destino = "grecoloyalty@gmail.com";
    $asunto = "Nuevo mensaje del formulario";
    $contenido = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
    $cabeceras = "From: $email";

    if (mail($destino, $asunto, $contenido, $cabeceras)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
