<?php

    class dbconnect{
        public function __construct(){

        }
        public $host = "localhost";
        public $user = "root";
        public $pass = "123456";
        public $dbname = "dbshop";
        public function query($sql){
            $db = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
            $result = $db->query($sql);
            return $result;
        }

        public function exec($sql){
            $db = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
            $result = $db->exec($sql);
            return $result;
        }

        public function getOnce($sql){
            $db = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
            $result = $db->query($sql)->fetch();
            return $result;
        }
    }

?>