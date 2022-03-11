<?php
class SliderDatabase{
    public $database;

    public function __construct(){
        try{
            session_start();
            $link = new PDO('mysql:host=localhost;dbname=slider', 'root','');
            $this->database = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>
