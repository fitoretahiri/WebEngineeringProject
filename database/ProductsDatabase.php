<?php
class ProductsDatabase{
    public $database;

    public function __construct(){
        try{
            session_start();
            $link = new PDO('mysql:host=localhost;dbname=produktet', 'root','');
            $this->database = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9bfaa47d96e53ef0b6769c0fef63a2bfa370f1f2
