<?php
$destino="juan_01_1994@hotmail.com";
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];
$contenido = "De: $nombre" . "\nemail: $email" . "\nTelefono: $telefono" . "\nMensaje: $mensaje";
mail($destino,"contacto",$contenido);

$mensaje2 = "Datos enviados correctamente";
echo "<script>";
echo "if(confirm('$mensaje2'));";  
echo "window.location = 'contactanos.html';";
echo "</script>";
?>