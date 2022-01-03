<?php

    namespace Src\Helper;

    final class Warnings{

        public static function notice($msg){
            echo "<script> alert('{$msg}'); </script>";
        }

        public static function redirect($pg){
            header("Location: {$pg}");
            die();
        }
    }
?>