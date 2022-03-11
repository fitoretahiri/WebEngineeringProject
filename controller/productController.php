<?php
//kontrollerat i marrin te dhenat i update-ojne ato...

//me e preferushme eshte me u perdor require once qe me i shmang warnings
require_once '../database/ProductsDatabase.php';

class ProductController{
    public $db;// e deklarojme ni variabel $db qe me pas ma te lehte me iu cas databazes p.sh ne metoda etj

    public function __construct(){
        $this->db=new ProductsDatabase;
    }

    //CRUD

    public function readData(){

        //metoda query()mundeson shenimin e sintakses se databazes
        $query=$this->db->pdo->query('SELECT * FROM menu');

        return $query->fetchAll();
    }

    public function insert($request){
        //e kemi vene si parameter $request qe me e pas me te lehte me i marr te dhenat masi i bejme submit permes $_GET os post

        //metoda prepare() mundeson fshirjen,update-imin e fushave
        $query=$this->db->pdo->prepare('INSERT INTO menu(menu_image,menu_title,menu_body)
        VALUES (:menu_image, :menu_title, :menu_body)');

        //tash duhet me i tregu :menu_image cka eshte e perdorim bindParam()
        $query->bindParam(':menu_image',$request['image']);//['image'] e kena lon se n formen e krijume inputi n fjale e ka emrin image
        $query->bindParam(':menu_title',$request['title']);
        $query->bindParam(':menu_body',$request['body']);
        $query->execute();

        return header('Location:../views/menuDashboard.php');
    }

    public function edit($id){

        //se pari klikojme rreshtin qe dojme me editu
        $query=$this->db->pdo->prepare('SELECT * FROM menu WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();

        $query->fetch();
    }

    public function update($request,$id){
        $query=$this->db->pdo->prepare('UPDATE menu SET menu_image=:menu_image,
         menu_title=:menu_title,menu_body=:menu_body WHERE $id=:id');
         $query->bindParam(':menu_image',$request['image']);
         $query->bindParam(':menu_title',$request['title']);
         $query->bindParam(':menu_body',$request['body']);
         $query->bindParam(':id',$id);
         $query->execute();

         return header ('Location:../views/menuDashboard.php');
        

    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from menu WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location:../views/menuDashboard.php");
    }

}

?>