<?php
    class consultController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/Brifing_CRUD/model/consultModel.php");
            $this->model = new consultModel();
        }
        public function save($name, $consult)
        {
            $id = $this->model->insert($name, $consult);
            return ($id!=false) ? header("Location:list.php?id=".$id) :header("Location:create.php");
        }
        public function list($id)
        {
            return ($this->model->list($id) != false) ? $this->model->list($id) : header(("Location:index.php"));
        }
    }
?>