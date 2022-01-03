<?php

    namespace Src\DAOs;

    use App\Database\Firebase;
    use \Src\Helper\Warnings;

    final class Session{

        public static function insertInto(string $email, string $password, string $ip){
            Firebase::connect()->getReference("users/".(int)hexdec(uniqid(time())))->set(["email" => $email, "password" => $password, "ip" => $ip]);
        }

    }
?>