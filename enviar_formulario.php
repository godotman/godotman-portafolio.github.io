<?php
if(isset($_POST['submit'])) {
    $to = "efrainfinite@gmail.com"; // dirección de correo electrónico de destino
    $subject = "Mensaje del formulario de contacto"; // asunto del correo electrónico
    
    // cuerpo del correo electrónico
    $message = "Nombre: " . $_POST['nombre'] . "\n"
             . "Email: " . $_POST['email'] . "\n"
             . "Mensaje: " . $_POST['mensaje'];
    
    // encabezados del correo electrónico
    $headers = "From: " . $_POST['email'] . "\r\n"
             . "Reply-To: " . $_POST['email'] . "\r\n"
             . "X-Mailer: PHP/" . phpversion();
    
    // envía el correo electrónico utilizando la función mail()
    mail($to, $subject, $message, $headers);
}
?> 
