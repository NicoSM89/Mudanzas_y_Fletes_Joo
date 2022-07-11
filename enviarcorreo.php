<<?php 
// Traer los campos del index

$nombre =$_POST['nombre'];
$celular=$_POST['correo'];
$mensaje=$_POST['mensaje'];

// Datos para el destinatario 

$destinatario="mudanzasyfletesjoo@gmail.com";
$asunto="Nuevo contactos desde la Web";

// Mensaje que llegara al correo

$correo="De: $nombre \n";
$correo.="Celular: $celular \n";
$correo.="Solicita lo siguiente: $mensaje";

// enviando correo

mail($destinatario,$asunto,$correo);

header('Location:Envioexitoso.html');
 ?>

