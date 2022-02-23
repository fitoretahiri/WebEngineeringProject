<?php
    include_once './database/databaseConnection.php';

    class UserRepository{
        private $connection;

        function __construct(){
            $conn =new DatabaseConnection;
            $this->connection=$conn->startConnection();
        }

        function insertUser($user){
            $conn =$this->connection;

            $id=$user->getId();
            $name = $user->getName();
            $surname=$user->getSurname();
            $age=$user->getAge();
            $birthday=$user->getBirthday();
            $email=$user->getEmail();
            $psw=$user->getPsw();
            $psw2=$user->getPsw2();

            $sql="INSERT INTO users (id,name,surname,age,birthday,email,psw,psw2)VALUES (?,?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);

            $statement->execute([$id,$name,$surname,$age,$birthday,$email,$psw,$psw2]);
            
            //echo "<script> alert('user is added'); </script>";
        }

        function getAllUsers(){
            $conn=$this->connection;

            $sql="SELECT * FROM users";

            //me marr te dhena e perdorim funksionin query
            $statement=$conn->query($sql);
            //pasi kemi me marr shume rreshta e perdorim fetchAll()
            $users=$statement->fetchAll();

            return $users;
        }

        function getUserById($id){
            $conn=$this->connection;

            $sql="SELECT * FROM users WHERE id='$id'";

            $statement=$conn->query($sql);
         
            $user=$statement->fetch();

            return $user;
        }

        //save button ne edit
        function updateUser($id,$name,$surname,$age,$birthday,$email,$psw,$psw2){
            $conn=$this->connection;

            $sql="UPDATE  users SET name=?,surname=?, age=?,birthday=?,email=?, psw=?,psw2=? WHERE id=?";
            $statement = $conn->prepare($sql);

            //te pikepytjet vendosen kto te dhena
            $statement->execute([$name,$surname,$age,$birthday,$email,$psw,$psw2,$id]);

        }

        
    }



?>