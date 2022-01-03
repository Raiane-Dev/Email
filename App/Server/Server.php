<?php

    namespace App\Server;

    class Server{

        public function __construct(){

            $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Error Server > Create");
            socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
            $bind = socket_bind($socket, "127.0.0.1", 8000) or die("Error Server > Bind");
            $listen = socket_listen($socket, 2) or die("Error Server > Listen");

                do{
                $accept = socket_accept($socket) or die("Error Server > Accept");

                    if(isset($_POST['message']) && $_POST['message'] !== "" ? $message = $_POST['message'] : $message = readline("Msg: "));
                    socket_write($accept, $message, strlen($message)) or die("Error Server > Write");

                    $read = socket_read($accept, 1024) or die("Error Server > Read");
                    echo ("<div class=\"box-message\">{$read} </div>");

                socket_close($accept);
                break;
            }while(true);
            socket_close($socket);

            return $read;
        }
    }

    if(isset($_POST['message']) && $_POST['message'] !== ""){
        \Src\DAOs\Emails::insertInto($_SESSION['id_user'], $_POST['message'], date('H:i:s'), $_POST['to_user']);
    }

?>