<?php
    class db {
        private $db;
        private $debug;
        function __construct($user,$pass,$dbname,$debug)
        {
            $this->db=new mysqli("localhost",$user,$pass,$dbname);
            $this->db->set_charset("utf8");
            if($this->db->connect_error){
                echo"Fail to connect".
                    $this->db->connect_error;
                exit();
            }
            else $this->debug_text("connect");
        }

        function query($sql){
            $result=$this->db->query($sql);
            $this
        }

        

        function debug_text($text){
            if($this->debug){
                echo "Debug:{$text}<br>";
            }
        }
    }
?>