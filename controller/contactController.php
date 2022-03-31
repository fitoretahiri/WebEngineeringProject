<?php
    require_once "./database/ContactDatabase.php";

    class ContactController{
        public $db;

        public function __construct(){
            $this->db=new ContactDatabase;
        }


        public function readData(){
            $query=$this->db->database->query('SELECT * FROM contact');
            return $query->fetchAll();
        }

        public function insert($request){

            $query=$this->db->database->prepare('INSERT INTO contact(name,email,telephone,organization,message)
            VALUES (:name, :email, :telephone,:organization,:message)');

            //tash duhet me i tregu :menu_image cka eshte e perdorim bindParam()
            $query->bindParam(':name',$request['name']);//['image'] e kena lon se n formen e krijume inputi n fjale e ka emrin image
            $query->bindParam(':email',$request['email']);
            $query->bindParam(':telephone',$request['telephone']);
            $query->bindParam(':organization',$request['user']);
            $query->bindParam(':message',$request['comments']);
            $query->execute();

            return header('Location:../views/menuDashboard.php');
        }
    }

?>