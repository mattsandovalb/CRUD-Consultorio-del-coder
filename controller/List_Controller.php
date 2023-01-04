<?php
    require_once('model/List_model.php');
    $singleList  = new List_model();
    $matList = $singleList->getList;
    require_once('index.php');
?>