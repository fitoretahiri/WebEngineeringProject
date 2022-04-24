<?php
if(!isset($_SESSION)){
    session_start();
}


require '../database/ProductsDatabase.php';

class NewsController{
    public $db;

    public function __construct(){
        $this->db=new ProductsDatabase;
    }

    //CRUD

    public function readData(){

        //metoda query()mundeson shenimin e sintakses se databazes
        $query=$this->db->database->query('SELECT * FROM news');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image']= '../HomePics/'.$request['image'];

        $query=$this->db->database->prepare('INSERT INTO menu(image,title,text,addedby)
        VALUES (:image, :title, :text, :addedby)');
        
        $name_surname=$_SESSION["name"]." ".$_SESSION["surname"];

        $query->bindParam(':image',$request['image']);
        $query->bindParam(':title',$request['title']);
        $query->bindParam(':text',$request['text']);
        $query->bindParam(':addedby', $name_surname);
        $query->execute();

        return header('Location:../pages/menuDashboard.php');
    }
}
?>