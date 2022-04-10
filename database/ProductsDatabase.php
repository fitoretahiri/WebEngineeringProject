<?php
class ProductsDatabase{
    public $database;

    public function __construct(){
        try{
          //  session_start();
            $link = new PDO('mysql:host=localhost;dbname=produktet', 'root','');
            $this->database = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
 