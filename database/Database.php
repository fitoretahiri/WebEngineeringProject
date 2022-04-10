<?php

class Database{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $database = "onlineshop";


    function startConnection(){

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Database Connection Failed".$e->getMessage();
            return null;
        }
<<<<<<< HEAD
=======


>>>>>>> 848ea6b05b4ee38dc2df9aed2bf34dc3fec61d7b
    }
}

?>