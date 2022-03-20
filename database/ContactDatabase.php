<?php
class ContactDatabase{
    public $database;

    public function __construct(){
        try{
            session_start();
            $link = new PDO('mysql:host=localhost;dbname=onlineshop', 'root','');
            $this->database = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>