<?php

$Destino = "ivonnesumano3@gmail.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$Contenido =  "Nombre: " . $name . "\nCorreo: " . $email ."\n Asunto: " . $subject . "\nMensaje" . $message;

mail($Destino, "ASUNTO", $Contenido);

header("location:index.html");
?>