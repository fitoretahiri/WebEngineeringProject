<?php

require './database/sliderDatabase.php';

class SliderController{
    public $db;

    public function __construct(){
        $this->db=new SliderDatabase;
    }

    public function readData(){
        $query=$this->db->database->query('SELECT * FROM pics');
        return $query->fetchAll();
    }

    public function insert($request){
        $request['image']= './HomePics/'.$request['image'];
        $query=$this->db->database->prepare('INSERT INTO pics(slider_image)
        VALUES (:slider_image)');

        $query->bindParam(':slider_image',$request['image']);
        $query->execute();

        return header('Location:../views/sliderDashboard.php');
    }

    public function edit($id){
        $query=$this->db->database->prepare('SELECT * FROM pics WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request,$id){
        $query=$this->db->database->prepare('UPDATE pics SET slider_image=:slider_image WHERE id = :id');
         $query->bindParam(":slider_image",$request["image"]);
         $query->bindParam(":id",$id);
         $query->execute();

         return header ('Location:../views/sliderDashboard.php');
        

    }

    public function delete($id){
        $query = $this->db->database->prepare('DELETE from pics WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location:../views/sliderDashboard.php");
    }

}

?>