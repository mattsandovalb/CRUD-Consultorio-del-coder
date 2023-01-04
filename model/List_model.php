<?php
    class List_model{

        private $db;
        private $list;

        public function __construct()
        {
            require_once("Connect.php");
            //Call Static Function
            $this -> db = Connect::Connection();

            $this -> list = array();
        }

        public function get_list()
        {
            $consult = $this -> db -> query("SELECT * FROM LIST");

            while($rows = $consult -> fetch(PDO::FETCH_ASSOC))
            {
                $this -> list[]=$rows;
            }
            return $this -> list;
        }

    }
?>