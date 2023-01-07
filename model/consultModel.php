<?php

    class consultModel{
        private $pdo;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Brifing_CRUD/config/db.php");
            $con = new db();
            $this->pdo = $con->conn();
        }
        public function insert($name, $consult)
        {
            $stament = $this->pdo->prepare("INSERT INTO quotes (Name,Consult) VALUES( :Name,:Consult )");
            $stament->bindParam( ":Name", $name, PDO::PARAM_STR);
            $stament->bindParam(":Consult", $consult, PDO::PARAM_STR);
            return($stament->execute()) ? $this->pdo->lastInsertId() : false;
        }
        public function show($id)
        {
            $stament = $this->pdo->prepare("SELECT * FROM quotes where id = :id limit 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function list()
        {
            $stament = $this->pdo->prepare(("SELECT * FROM quotes"));
            return ($stament->execute()) ?$stament->fetchAll() : false;
        }
        public function update($id, $name)
        {
            $stament = $this->pdo->prepare("UPDATE quotes SET Name  = :Name WHERE id = :id");
            $stament->bindParam(":Name", $name);
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $id : false ;
        }
        public function delete($id)
        {
            $stament = $this->pdo->prepare("DELETE FROM quotes WHERE id = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false ;
        }
    }
?>