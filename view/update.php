<?php
    require_once("C://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $obj->update($_POST['id'],$_POST['Name'], $_POST['consult'] );
?>