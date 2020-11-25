<?php
    session_start();
    $adresse = explode('/', $_SERVER['REQUEST_URI'])[1];
    if (file_exists('MVC/view/'.$adresse.'.php'))
        require 'MVC/controller/'.$adresse.'.php';
    else
        require 'MVC/controller/accueil.php';