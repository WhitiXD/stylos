<?php
  ob_start();
  $destinatario = "stylosbrand@gmail.com"; // Cambiar por tu dirección de correo electrónico

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $direccion = $_POST['direccion'];
  $producto = $_POST['producto'];
  $talla = $_POST['talla'];


  $asunto = "Nueva compra de $nombre";

  $mensaje = "Nombre: $nombre\n";
  $mensaje .= "Correo electrónico: $correo\n";
  $mensaje .= "Dirección: $direccion\n";
  $mensaje .= "Producto: $producto\n";
  $mensaje .= "Talla: $talla\n";


  mail($destinatario, $asunto, $mensaje);

  echo "Gracias por tu compra, $nombre!";

{
    header("Location: https://stylosbrand.000webhostapp.com/exito-compra3.html");
exit;
  }
  ob_end_flush();
?>