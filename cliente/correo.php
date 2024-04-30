<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se proporcionó un valor para el campo "mensaje" desde el formulario
    $mensaje = isset($_POST["mensaje"]) ? $_POST["mensaje"] : '';

    // Resto de los datos del formulario
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
    $apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : '';
    $correo_destino = isset($_POST["correo"]) ? $_POST["correo"] : '';

    // Configura el correo
    $to = $correo_destino;
    $subject = 'Mensaje desde formulario de contacto';
    $message = "Nombre: $nombre\nApellidos: $apellidos\nCorreo: $correo_destino\nMensaje: $mensaje";
    $headers = 'From: ' . $correo_destino . "\r\n" .
        'Reply-To: ' . $correo_destino . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Envía el correo
    mail($to, $subject, $message, $headers);

    // Puedes redirigir a una página de agradecimiento o mostrar un mensaje aquí
    header("Location: ./productos.php");
}
?>
