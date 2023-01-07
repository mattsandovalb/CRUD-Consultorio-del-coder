<?php
    require_once("c://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $obj->delete($_GET["id"], $_GET["Name"], $_GET["Consult"], $_GET["Date"]);
?>