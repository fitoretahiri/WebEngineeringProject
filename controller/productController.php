<?php
//kontrollerat i marrin te dhenat i update-ojne ato...

//me e preferushme eshte me u perdor require once qe me i shmang warnings

require '../database/ProductsDatabase.php';

class ProductController{
    public $db;// e deklarojme ni variabel $db qe me pas ma te lehte me iu cas databazes p.sh ne metoda etj

    public function __construct(){
        $this->db=new ProductsDatabase;
    }

    //CRUD

    public function readData(){

        //metoda query()mundeson shenimin e sintakses se databazes
        $query=$this->db->database->query('SELECT * FROM menu');

        return $query->fetchAll();
    }

    public function insert($request){
        //e kemi vene si parameter $request qe me e pas me te lehte me i marr te dhenat masi i bejme submit permes $_GET os post
        $request['image']= '../HomePics/'.$request['image'];

        //metoda prepare() mundeson fshirjen,update-imin e fushave
        $query=$this->db->database->prepare('INSERT INTO menu(menu_image,menu_title,menu_body)
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
        $query=$this->db->database->prepare('SELECT * FROM menu WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request,$id){
        $query=$this->db->database->prepare('UPDATE menu SET menu_image=:menu_image,
         menu_title=:menu_title,menu_body=:menu_body WHERE id = :id');
         $query->bindParam(":menu_image",$request["image"]);
         $query->bindParam(":menu_title",$request["title"]);
         $query->bindParam(":menu_body",$request["body"]);
         $query->bindParam(":id",$id);
         $query->execute();

         return header ('Location:../views/menuDashboard.php');
        

    }

    public function delete($id){
        $query = $this->db->database->prepare('DELETE from menu WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location:../views/menuDashboard.php");
    }

}

?>




























<!---
/*include_once './database/DataBase.php';

class ProductController  {
  public $db;
  public $menu_title;
  public $menu_body;
  public $menu_image;
  public $id;

  public function __construct($id='', $menu_title='',
  $menu_body='', $menu_image='')
  {
  $this->id=$id;
  $this->menu_title=$menu_title;
  $this->menu_body=$menu_body;
  $this->menu_image=$menu_image;
  $this->db=new DataBase();
  }


public function getID(){
  return $this->id;
}
public function getMenuTitle(){
  return $this->menu_title;
}
public function getMenuBody(){
  return  $this->menu_body;
}
public function getMenuImage(){
  return  $this->menu_image;
}
public function setID($id){
  $this->id=$id;
}
public function setMenuTitle($menu_title){
  $this->menu_title=$menu_title;
}
public function setMenuBody($menu_body){
  $this->menu_body=$menu_body;
}
public function setMenuImage($menu_image){
  $this->menu_image=$menu_image;
}

  public function readData(){
    $query = $this->db->pdo->query('SELECT menu_title,menu_body,menu_image,id from menu');

    return $query->fetchAll();
  }

  public function insert($request){
   $request['menu_image'] ='./img/' .$request['menu_image'];
     $query=$this->db->pdo->prepare('INSERT INTO produktet(menu_title,menu_body,menu_image)
     values(:menu_title, :menu_body, :menu_image)');

     $query->execute([
       ':menu_title' => $request['menu_title'] ,
       ':menu_body' => $request['menu_body'], 
       ':menu_image' => $request['menu_image']
    ]);
      header('Location : Dashboard.php');
  }
  public function edit($id){
    $query = $this->db->pdo->prepare('SELECT menu_title,menu_body,menu_image from menu WHERE id = :id');
    $query->bindParam(':id', $id);
    $query->execute();

    return $query->fetch();
}

public function update($request, $id){
  $request['menu_image'] ='../HomePics/' .$request['menu_image'];

    $query = $this->db->pdo->prepare('UPDATE menu SET menu_title = :menu_title,
    menu_body = :menu_body, menu_image = :menu_image WHERE id = :id');
    $query->bindParam(':menu_title', $request['menu_title']);
    $query->bindParam(':menu_body', $request['menu_body']);
    $query->bindParam(':menu_image', $request['menu_image']);
    $query->bindParam(':id', $id);
    $query->execute();
    return header('Location: menuDashboard.php');
}

public function  delete($id){
  $query=$this->db->pdo->prepare('DELETE  from menu where id=:id');
  $query->bindParam(':id', $id);
  $query->execute();

  return header('Location : index.php');

}



}

?>
--->