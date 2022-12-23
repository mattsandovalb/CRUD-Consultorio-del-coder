<?php

use FTP\Connection;
    class List_model{
        private $dB;
        private $list;

        public function __construct()
        {
            require_once('dbConnect.php');
            $this->dB = dbConnect::conect();
            $this-> list = array();
        }
        public function getList()
        {
            $consult = $this -> dB ->query("SELECT * FROM quotes"); //no se no se

            while($rows = $consult->fetch(PDO::FETCH_ASSOC))
            {
                $this ->list [] = $rows;
            }
            return $this->list;
        }
    }
?>