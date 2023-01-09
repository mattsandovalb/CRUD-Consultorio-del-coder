<?php
    require_once("C://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $id = $_POST['id'];
    $name= $_POST["Name"];;
    $consult= $_POST["Consult"];;
    $obj->update($id, $name, $consult);
    
?>