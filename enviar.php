<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["e-mail-usuario"];
    $interesados = $_POST["interesados"];
    $horario = $_POST["horario"];
    $fecha = $_POST["fecha"];

    $destinatario = "grecoloyalty@gmail.com";
    $asunto = "Nueva reservación desde el sitio web";

    $contenido = "Reservación recibida:\n\n";
    $contenido .= "Correo del usuario: $email\n";
    $contenido .= "Número de personas interesadas: $interesados\n";
    $contenido .= "Hora de la reunión: $horario\n";
    $contenido .= "Fecha de la reunión: $fecha\n";

    $cabeceras = "From: $email";

    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "¡Reservación enviada correctamente!";
    } else {
        echo "Error al enviar la reservación. Intenta más tarde.";
    }
}
?>
