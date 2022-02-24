<?php
class ProductsDatabase{
        private $server="localhost";
        private $username="root";
        private $psw="";
        public $database="produktet";

    //sa here te krijohet instanca e nje databaze behet lidhja me databaze
    public function __construct(){
        try{
            session_start();

            //connection strings: stringje qe mundesojne lidhjen me databaze (brenda ())
            $link=new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->psw);
            $this->database= $link;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}


?>