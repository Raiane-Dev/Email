<?php
    define ("URL", "http://192.168.0.104:{$_SERVER['SERVER_PORT']}/");
    define ("URL_DIRECTORIES", "http://192.168.0.104:{$_SERVER['SERVER_PORT']}/Public/Views/");

    if (Src\Repository\LibUsers::selectLogin($_SERVER['REMOTE_ADDR'])) {
        return true;
    } else {
        if($_SERVER['REQUEST_URI'] !== "/register"){
            Src\Helper\Warnings::redirect("register");
        }
    }
?>