<?php
    class db{
        private $host = 'localhost';
        private $dbName = 'manager';
        private $user = 'root';
        private $password = '';

        public function conn(){
            try{
                $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName,$this->user,$this->password);
                    return $pdo;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>