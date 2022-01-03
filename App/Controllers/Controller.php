<?php

    namespace App\Controllers;

    final class Controller implements Roles{
        public static array $params = [];

        public static function overall(){
            $repository = \Src\Repository\LibEmails::selectAll($_SESSION['id_user']);
            $id = preg_split("/\//", $_SERVER['PATH_INFO']);
            (isset($id[2]) ? $id = $id[2] : $id = 1);
            $params = \Src\Repository\LibEmails::selectSingle($id, $_SESSION['id_user']);
            $class = \Src\Repository\LibUsers::class;
            
            self::$params = ["repository" => $repository, "chat" => $params, "class" => $class, "to_user" => $id];
        }

        public function home(){
     
        }

        public function send(){
            if(isset($_POST['action'])){
                \Src\DAOs\Emails::insertInto($_SESSION['id_user'], $_POST['message'], date('H:i:s'), $_POST['to_user']);
            }
        }

        public function register(){
            
        }

        public static function params(){
            return self::$params;
        }
    }
?>