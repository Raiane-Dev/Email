<?php
    namespace App\Database;

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    use Kreait\Firebase\Auth;

    final class Firebase{
            private static $db;
    
            public static function connect(){
                    try {
                        self::$db = (new Factory())->
                        withServiceAccount(dirname(__DIR__, 1)."\Config\\firebaseconfig.json")
                        ->withDatabaseUri('https://email-f0a41-default-rtdb.firebaseio.com/')
                        ->createDatabase();

                    } catch (Exception $e){
                        echo "Error";
                }

                return self::$db;
        }
    }

    // Firebase::connect()->getReference('table')->getSnapshot(); PARA PEGAR DADOS DE UMA TABELA
    // Firebase::connect()->getReference('table/date')->getSnapshot(); PARA PEGAR UM DADO

    // Firebase::connect()->getReference('table/'.uniqid())->set(array(dados)); PARA CADASTRAR PRECISAR PASSAR UM ARRAY DOS DADOS NO ARRAY

    // Firebase::auth()->createUserWithEmailAndPassword('raianeao.dev@gmail.com','senhaa'); CRIAR CLIENTE
?>