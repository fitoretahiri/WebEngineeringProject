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
    }


?>