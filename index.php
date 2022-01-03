<?php

    require "vendor/autoload.php";
    session_start();
    date_default_timezone_set("America/Sao_Paulo");

    if($_SERVER['SERVER_PORT'] === '8000'){
        $_SESSION['id_user'] = 2;
        $_SESSION['ip'] = "192.168.0.104";
    } else {
        $_SESSION['id_user'] = 3;
        $_SESSION['ip'] = "192.168.0.107";
    }

    App\Controllers\Controller::overall();
    $route = new App\Route\Router;
    $route->run('/home', '\App\Controllers\Controller', 'home');
    $route->run('/send', '\App\Controllers\Controller', 'send');
    $route->run('/register', '\App\Controllers\Controller', 'register');
?>