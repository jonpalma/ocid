<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="img/favicon.ico"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>OCID</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll nav-logo">
                    <img src="img/index/icons/logo.png" alt="logo" class="vertical-align">
                </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll vertical-align nav-padd active">INICIO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#servicios" class="smoothScroll vertical-align nav-padd">SERVICIOS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">NOSOTROS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#instalaciones-parallax" class="smoothScroll vertical-align nav-padd">INSTALACIONES</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#contacto" class="smoothScroll vertical-align nav-padd">CONTACTO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#imc" class="smoothScroll vertical-align nav-padd">IMC</a></li>
                    </ul>
                </div>
            </div>
        </nav>