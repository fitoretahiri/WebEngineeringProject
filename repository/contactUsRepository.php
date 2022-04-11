<?php
    require '../database/Database.php';

    class ContactUsRepository{
        private $connection;

        function __construct(){
            $conn =new Database();
            $this->connection=$conn->startConnection();
        }

        function insertMessage($contact){
           
            
            $conn =$this->connection;

            $id=$contact->getId();
            $fullName = $contact->getFullName();
            $email=$contact->getEmail();
            $telephone=$contact->getTelephone();
            $organization=$contact->getOrganization();
            $message=$contact->getMessage();

            

            $sql="INSERT INTO contactmenu (id,fullName,email,telephone,organization,message)VALUES (?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);

            $statement->execute([$id,$fullName,$email,$telephone,$organization,$message]);
        
    }

        function getAllMessages(){
            $conn=$this->connection;

            $sql="SELECT * FROM contactmenu";

            //me marr te dhena e perdorim funksionin query
            $statement=$conn->query($sql);//
            //pasi kemi me marr shume rreshta e perdorim fetchAll()
            $messages=$statement->fetchAll();

            return $messages;
        }

        function getMessageById($id){
            $conn=$this->connection;

            $sql="SELECT * FROM contactmenu WHERE id='$id'";

            $statement=$conn->query($sql);
         
            $message=$statement->fetch();

            return $message;
        }

        function deleteMessage($id){
            $conn=$this->connection;

            $sql="DELETE FROM contactmenu WHERE id=?";
            $statement = $conn->prepare($sql);

            //te pikepytjet vendosen kto te dhena
            $statement->execute([$id]);
            return header("Location:../views/contactDashboard.php");

        }

        
         
        
    }



?>