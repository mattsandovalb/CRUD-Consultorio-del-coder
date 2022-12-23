<?php

class dbConnect{
    public static function conect(){
        try{
            $conn = new PDO('mysql:host = localhost; dbname = appintment manager', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET CHARACTER SET UTF8");

        }catch(Exception $e){   
            die("Error" . $e->getMessage());
            echo "Error Line" . $e->getLine();
        }
        return $conn;
    }
}