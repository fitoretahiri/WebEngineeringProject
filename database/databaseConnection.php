<?php
    class DatabaseConnection{
        private $server="localhost";
        private $username="root";
        private $psw="";
        private $database="ooplogin";

        function startConnection(){

            try{
                $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->psw);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch(PDOException $e){
                echo "Database connection failed".$e->getMessage();
                return null;
            }
        }
    }


?>