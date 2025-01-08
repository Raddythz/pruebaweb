<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ubicacion = $_POST['ubicacion'];
    $tamaño = $_POST['tamaño'];
    $tipoEnergia = $_POST['tipoEnergia'];

    // Dirección de destino (correo que recibirá el formulario)
    $destinatario = "j.contreras@aconcaguagreen.cl"; // Cambia esta dirección por la que recibirá los correos
    $asunto = "Solicitud de Cotización desde el formulario"; // Asunto del correo

    // Cuerpo del correo
    $cuerpo = "Datos del formulario de cotización:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Ubicación del Proyecto: $ubicacion\n";
    $cuerpo .= "Tamaño del Proyecto: $tamaño\n";
    $cuerpo .= "Tipo de Energía: $tipoEnergia\n";

    // Cabeceras del correo
    $cabeceras = "From: $email"; // Quien envía el correo

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        echo "¡Gracias por solicitar tu cotización! Nos pondremos en contacto pronto.";
    } else {
        echo "Lo sentimos, hubo un error al enviar tu cotización. Intenta nuevamente.";
    }
}
?>