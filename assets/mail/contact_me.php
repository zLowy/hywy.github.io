<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = "workzlowy@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "zLowy Web | Formulario de:  $name";
$body = "Has recivido un nuevo mensaje de tu Formulario de Contacto en https://zlowy.github.io.\n\n"."Aquí tienes los detalles:\n\nNombre: $name\n\nEmail: $email\n\nMensaje:\n$message";
$header = "De: workzlowy@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Responder a: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
