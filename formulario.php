<?php

<?php
if(isset($_POST['email'])) {

<bold>// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
$email_to = "franciscaljubetic@gmail.com";
$email_subject = "Contacto desde el sitio web";

<bold>// Aquí se deberían validar los datos ingresados por el usuario</bold>
if(!isset($_POST['nombre']) ||
!isset($_POST['correo']) ||
!isset($_POST['telefono']) ||
!isset($_POST['trip_start']) ||
!isset($_POST['appt']) ||
!isset($_POST['mensaje'])) {

messages.error("<b>Por favor, llena todos los campos</b><br />") ;
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Mail: " . $_POST['correo'] . "\n";
$email_message .= "telefono: " . $_POST['telefono'] . "\n";
$email_message .= "fecha del viaje: " . $_POST['trip_start'] . "\n";
$email_message .= "hora del viaje: " . $_POST['appt'] . "\n\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";

<bold>// Ahora se envía el e-mail usando la función mail() de PHP</bold>
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}

?>