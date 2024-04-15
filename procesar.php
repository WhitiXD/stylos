<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $talla = $_POST['talla'];
    $producto = $_POST['producto'];
    
    // Obtener la hora actual
    $hora_pedido = date('Y-m-d H:i:s');
    
    // Formato de separación entre respuestas
    $separador = "------------------Siguiente-Pedido---------------------\n";
    
    // Almacena los datos en un archivo
    $data = "Hora del pedido: $hora_pedido\n";
    $data .= "Nombre: $nombre\n";
    $data .= "Dirección de envío: $direccion\n";
    $data .= "Correo electrónico: $email\n";
    $data .= "Talla: $talla\n";
    $data .= "Producto: $producto\n";
    $data .= $separador; // Agrega el separador al final de cada respuesta
    
    file_put_contents('respuestas.txt', $data, FILE_APPEND);
    
    // Enviar una copia por correo electrónico
    $destinatario = "stylosbrand@gmail.com"; // Reemplaza con tu dirección de correo
    $asunto = "Nuevo pedido - $nombre"; // Asunto del correo
    $mensaje = $data; // El contenido del correo
    
    // Envía el correo
    mail($destinatario, $asunto, $mensaje);
}

// Redirige a la página de éxito o cualquier otro lugar
header("Location: https://stylosbrand.000webhostapp.com/exito-compra.html");
?>
