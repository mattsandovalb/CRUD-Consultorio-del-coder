<?php
    class consultController{
        private $model;
        public function __construct()
        {
            require_once('../Brifing_CRUD/model/consultModel.php');
            $this->model = new consultModel();
        }
        public function save($name, $consult)
        {
            $id = $this->model->insert($name, $consult);
            return ($id!=false) ? header("Location:list.php?id=".$id) :header("Location:create.php");
        }
    }
?>