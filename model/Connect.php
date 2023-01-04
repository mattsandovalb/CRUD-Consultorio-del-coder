<?php
    class Connect{
        public static function Connection(){
            try{
                $connection = new PDO('mysql:host=localhost; dbname = manager', 'root', '');
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $connection->exec("SET CHARACTER UTF8");
            }catch(Exception $e){
                die('Error' . $e->getMessage());
                echo "Linea del Error" . $e->getLine();
            }
            return $connection;
        }
    }
?>