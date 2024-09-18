<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $topic = htmlspecialchars($_POST['topic']);
    $message = htmlspecialchars($_POST['message']);
    
    // Dirección de correo de destino
    $to = "aureliasancheze5@gmail.com";
    
    // Asunto del correo
    $subject = "Consulta desde el sitio web";
    
    // Cuerpo del correo
    $body = "Nombre: $name\nEmail: $email\nTema: $topic\nMensaje: $message";
    
    // Cabeceras del correo
    $headers = "From: $email";
    
    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
