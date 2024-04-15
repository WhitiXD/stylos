<?php
  $destinatario = "stylosbrand@gmail.com"; // Cambiar por tu dirección de correo electrónico

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $cabecera = "From: $nombre <$correo>";

  mail($destinatario, $asunto, $mensaje, $cabecera);

  echo "¡Gracias por tu mensaje, $nombre! Se ha enviado correctamente.";

  // Si deseas redirigir al remitente a una página de confirmación, puedes agregar el siguiente código:
  // header("Location: confirmacion.html");
?>
