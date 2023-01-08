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
        public function show($id)
        {
            return ($this->model->show($id) != false) ? $this->model->show($id) : header(("Location:index.php"));
        }
        public function list()
        {
            return ($this->model->list()) ? $this->model->list() : false;
        }
        public function update($id, $name, $consult)
        {
            return ($this->model->update($id ,$name, $consult) != false) ? header("Location:show.php?id=".$id) : header("Location:list.php");
        }
        public function delete($id, $name, $consult)
        {
            return ($this->model->delete($id, $name, $consult)) ? header("Location:list.php") : header ("Location:show.php?id=".$id) ;
        }
    }
?>