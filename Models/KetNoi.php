<?php

    class KetNoi {
        private $host = 'localhost';
        private $name = 'root';
        private $pass = '';
        private $db = 'atm';

        public $cn;

        public function KetNoi() {
            $this->cn = new mysqli($this->host, $this->name, $this->pass, $this->db);
            $result = $this->cn;

            if(!$result) {
                print_r($result->error);
                exit();
            }
            $result->set_charset('utf8');

            return $result;
        }

    }

?>

