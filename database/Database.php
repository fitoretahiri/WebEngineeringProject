<?php

class DataBase{
    public $pdo;
    public static $instance=null;

    public function __construct()
    {
        try {
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
            $link = new PDO("mysql:host=localhost;dbname=onlineshop", 'root', '');
            $this->pdo = $link;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
?>