<?php

class dbConnect{
    public static function conect(){
        try{
            $conect = new PDO('mysql:host = localhost; dbname = appintment manager', 'root', '');
            $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conect->exec("SET CHARACTER SET UTF8");

        }catch(Exception $e){   
            die("Error" . $e->getMessage());
            echo "Error Line" . $e->getLine();
        }
        return $conect;
    }
}