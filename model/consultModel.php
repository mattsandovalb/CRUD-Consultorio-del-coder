<?php

    class consultModel{
        private $pdo;
        public function __construct()
        {
            require_once("../Brifing_CRUD/config/db.php");
            $con = new db();
            $this->pdo = $con->conn();
        }
        public function insert($name, $consult)
        {
            $stament = $this->pdo->prepare("INSERT INTO quotes VALUES(null, :Name,:Consult )");
            $stament->bindParam(":name", $name, ":consult", $consult);
            return($stament->execute()) ? $this->pdo->lastInsertId() : false;
        }
    }
?>