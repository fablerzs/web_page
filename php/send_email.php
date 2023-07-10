<?php
   //Reseteamos variables a 0.
   $name = $email = $subject = $message = $headers = $msgEmail = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = 'Enviado desde tu página web';   
      $message = $_POST['message'];
      $destinatary = 'mauricii.lr04@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $name;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $message;
      $msjCorreo .= "\r\n";

    if (mail($destinatary, $subject, $msgEmail, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>