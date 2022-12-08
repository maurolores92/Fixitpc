<?php

// Conecto mi form / name / con el server a traves de los name

$nombre = $_POST ["name"];
$celular = $_POST ["celular"]; 
$email = $_POST ["email"];x
$textarea = $_POST ["textarea"];

// Vamos a mostrar un texto plano
$header .= "Content-Type: text/plain"

// Como me va a llegar el cierpo del mail a mi, osea lo que la gente escribio en el form - /r/n es para hacer saltos de linea

$mensaje = "Este mensaje fue enviado por:" . $nombre . ",/r/n";
$mensaje = "Su numero de telefono es:" . $celular . ",/r/n";
$mensaje = "Su email es:" . $email . ",/r/n";
$mensaje = "Mensaje enviado" . $textarea . ",/r/n";
$mensaje = "mensaje" . $_POST ["mensaje"];
$mensaje = "Enviado el" . date ("d/m/Y", time ())

// Funcion mail 
// a quien le mando el mail 

$para = "maurolores1992@gmail.com";
$asunto = "Mensaje de Fix it PC"git 

mail($para, $asunto, utf8_decode($mensaje), $header);

// redireccion al haber enviado el mail

header("Location: exito.html")

?>