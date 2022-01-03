<?php

    namespace Src\DAOs;

    use App\Database\Firebase;
    use \Src\Helper\Warnings;

    final class Emails{

        public static function insertInto(int $id_user, string $message, $time, int $to_user){
            Firebase::connect()->getReference("emails/".(int)hexdec(uniqid(time())))->set(["from_user" => $id_user, "message" => $message, "time" => $time, "to_user" => $to_user]);
        }
    }
?>