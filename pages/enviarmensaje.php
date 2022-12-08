<?php

$destino = "maurolores1992@gmail.com";
$asunto = 'Mensaje de Fix it PC';

$nombre = $_POST ['nombre'];
$celular = $_POST ['celular'];
$email = $_POST ['email'];
$textarea = $_POST ['textarea'];

$header = "Envio desde formulario de contacto de Fix it PC";
$mensaje = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Numero de telefono: " . $celular . "\n" . "Mensaje : " . $mensaje;

mail($destino, $header, utf8_decode($mensaje));
header('Location: exito.html');

?>

