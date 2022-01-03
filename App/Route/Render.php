<?php

    namespace App\Route;

    final class Render{
        public static function render(string $header, string $file, string $footer, array $params){
            extract($params, EXTR_REFS);
            if(file_exists($file)){
                include($header);
                include($file);
                include($footer);
            }
        }
    }

?>