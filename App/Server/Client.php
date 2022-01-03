<?php
    namespace App\Server;
    require "../../vendor/autoload.php";

    class Client{

        public function __construct(){
            $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Error Server > Create");
            @$result = socket_connect($socket, "127.0.0.1", 8000);
            if($result === false){
                new Server;
                die();
            }
                $read = socket_read($socket, 1024) or die("Error Server > Read");
                echo ("<div class=\"box-message\">from: {$read} </div>");

                if(isset($_POST['message']) && $_POST['message'] !== "" ? $message = $_POST['message'] : $message = readline("Msg: "));
                socket_write($socket, $message, strlen($message)) or die("Error Server > Write");

            socket_close($socket);
        }
    }

        echo ("<div class=\"box-message\">me: {$_POST['message']} </div>");
        new Client();

        if(isset($_POST['message']) && $_POST['message'] !== ""){
            \Src\DAOs\Emails::insertInto($_SESSION['id_user'], $_POST['message'], date('H:i:s'), $_POST['to_user']);
        }
?>