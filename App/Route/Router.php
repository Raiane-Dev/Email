<?php

    namespace App\Route;
    
    use Src\Authenticator\Format;
    use App\Route\Render;

    final class Router{

        public function run($path, $class, $function){
            $slug = Format::formatSlug($_SERVER['REQUEST_URI']);

            if(strripos($slug, $path) !== false){
                (new $class)->$function();

                Render::render(
                    "Public/Views/templates/header.php",
                    "Public/Views{$path}.php",
                    "Public/Views/templates/footer.php",
                    $class::params()
                );
            }

        }
    }
?>