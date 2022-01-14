<?php
$nombre_form =$_POST ['nombre'];
$apellido_form =$_POST ['apellido'];
$email_form =$_POST ['email'];
$mensaje_form =$_POST ['mensaje'];

$cuerpo_mail = "Nombre". $nombre_form."\r\n"."Apellido: ".$apellido_form."\r\n"."Correo Electrónico: ".$email_form."\r\n".
"Mensaje :".$mensaje_form;

mail("gusvall.cyc@gmail.com", "mensaje enviado desde nuestra web.com", $cuerpo_mail);

header("Location: contacto.php?e=ok")


?>