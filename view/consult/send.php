<?php
    require_once("c://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $obj->save($_POST['name'], $_POST['consult']);
?>