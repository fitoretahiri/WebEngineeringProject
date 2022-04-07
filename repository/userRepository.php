<?php
<<<<<<< HEAD
    include_once './database/databaseConnection.php';
=======
<<<<<<< HEAD
    include_once '../database/databaseConnection.php';
    //use DatabaseConnection as dbh;
  
    class UserRepository {
=======
    require_once './database/databaseConnection.php';
>>>>>>> a93f67ba72e03a9955e60e32506ef04c59776a9c

    class UserRepository{
>>>>>>> 81c2227a58ea3d53a6186dd866073e282d02ca8e
        private $connection;

        function __construct(){
            $conn =new DatabaseConnection();
            $this->connection=$conn->startConnection();
        }

        function insertUser($user){
           /* if($this->emailTakenCheck()==false){
                header("location:../index.php?error=emailTaken");
            }*/
            
<<<<<<< HEAD
            else{*/
=======
>>>>>>> a93f67ba72e03a9955e60e32506ef04c59776a9c
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
<<<<<<< HEAD
          //  }
            //echo "<script> alert('user is added'); </script>";
        }
=======
        
    }
>>>>>>> a93f67ba72e03a9955e60e32506ef04c59776a9c

        function getAllUsers(){
            $conn=$this->connection;

            $sql="SELECT * FROM users";

            //me marr te dhena e perdorim funksionin query
            $statement=$conn->query($sql);//
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


        function deleteUser($id){
            $conn=$this->connection;

            $sql="DELETE FROM users WHERE id=?";
            $statement = $conn->prepare($sql);

            //te pikepytjet vendosen kto te dhena
            $statement->execute([$id]);
            return header("Location:../views/dashboard.php");

        }

<<<<<<< HEAD
        /* function checkUser($email){
            //kqyrim a eshte nje email qe e shkrun useri e ne databaze dmth qe u shkrujt m'a heret
             $statement=$this->startConnection()->prepare('SELECT email FROM users WHERE email=? ;');
   
             //nese statement execution fails
             if(!$statement->execute($email)){
                 $statement=null;
                 header("location: ../index.php?error=statementfailed");
                 exit();
             }
   
             //nese useri vec ekziston ne databaze me qat email, nuk e leojojme regjistrimin, nese ndodh e kunderta e lejojme
             $resultCheck;
             if($statement->rowCount()>0){
                 $resultCheck=false;
             }
             else{
                 $resultCheck=true;
             }
             return $resultCheck;
         }*/

=======
        
>>>>>>> a93f67ba72e03a9955e60e32506ef04c59776a9c
         
        
    }



?>