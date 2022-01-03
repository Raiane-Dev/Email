<?php
    namespace Src\Repository;

    use App\Database\Firebase;
    use \Src\Helper\Warnings;

    final class LibUsers{

        public static function selectLogin($ip){
            $user = Firebase::connect()->getReference('users')->getSnapshot()->getValue();
            if($info = array_search($ip, array_column($user, 'ip'))){
                $_SESSION['login'] = true;
                $_SESSION['id_user'] = $info;
                $_SESSION['ip'] = $user[$info]['ip'];
                $_SESSION['email'] = $user[$info]['email'];
            }
            
            return $user;
        }

        public static function selectSingle($id){
            $user = Firebase::connect()->getReference("users/{$id}")->getSnapshot()->getValue();
            return $user;
        }
    }
?>