<?php

    require "vendor/autoload.php";
    session_start();
    date_default_timezone_set("America/Sao_Paulo");

    App\Controllers\Controller::overall();
    $route = new App\Route\Router;
    $route->run('/home', '\App\Controllers\Controller', 'home');
    $route->run('/send', '\App\Controllers\Controller', 'send');
    $route->run('/register', '\App\Controllers\Controller', 'register');
?>
