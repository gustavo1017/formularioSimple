<?php
$errores = '';
$enviado = '';
if (isset($_POST['submit'])) {
  // code...
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  if (!empty($nombre)) {
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  }
  else {
        $errores .= 'Por favor ingresa un nombre <br>';
        }

  if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $errores .= 'Por favor ingresa un correo valido <br>';
      }

  }else {
        $errores .= 'Por favor ingresa un correo <br>';
  }
  if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);

  }
  else {
        $errores .= 'Por favor ingresa el mensaje';
  }

  if (!$errores) {
        $enviar_a = 'tunombre@tuempresa.com';
        $asunto = 'Correo enviado desde miPagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Corrreo: $email \n";
        $mensaje .= "Mensaje: ". $mensaje;

      //  mail($enviar_a,$asunto,$mensaje_preparado);
        $enviado = true;

      }

}


require 'index.view.php';


 ?>
