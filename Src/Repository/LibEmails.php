<?php
    namespace Src\Repository;

    use App\Database\Firebase;
    use \Src\Helper\Warnings;

    final class LibEmails{

        public static function selectAll(int $id_user): array{
            $bench = Firebase::connect()->getReference('emails')->getSnapshot()->getValue();
            
            foreach ( $bench as $key => $val ) {
                if ( $val['from_user'] === $id_user ) {
                    $repository[] = $bench[$key];
                }
            }

            return $repository;
        }
        

        public static function selectSingle(int $id, $id_user): array{
            $chat = Firebase::connect()->getReference('emails')->getSnapshot()->getValue();
            $params = [];
            
            foreach($chat as $key => $val){
                if ( 
                    $val['to_user'] === $id 
                    && $val['from_user'] === $_SESSION['id_user'] 
                    || $val['to_user'] === $_SESSION['id_user'] 
                    && $val['from_user'] === $id
                ){
                    $params[] = $chat[$key];
                }

            }
            if (!isset($params)) die("<script> alert('Undefined'); </script>");

            return $params;
        }
    }
?>