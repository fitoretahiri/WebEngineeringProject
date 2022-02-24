<?php
class ProductsDatabase{
    public $pdo;

    //sa here te krijohet instanca e nje databaze behet lidhja me databaze
    public function __construct(){
        try{
            session_start();

            //connection strings: stringje qe mundesojne lidhjen me databaze (brenda ())
            $link=new PDO('mysqli:host=localhost; dbname=produktet','root','');
            $this->pdo= $link;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}


?>