<?php

<<<<<<< HEAD
include_once '../database/databaseConnection.php';
include_once '../repository/userRepository.php';
include_once '../Classes/signupClasses.php';
=======
include_once './repository/userRepository.php';
include_once './Classes/signupClasses.php';
>>>>>>> af712f60484057ef0264a561da14d046c072fa27

    if(isset($_POST['submit'])){
            $name= $_POST['name'];
            $surname= $_POST['surname'];
            $age= $_POST['age'];
            $birthday= $_POST['birthday'];
            $email= $_POST['email'];
            $psw= $_POST['psw'];
            $psw2= $_POST['psw2'];
            $id=$name.rand(100,999);


            $user= new User($id,$name,$surname,$age,$birthday,$email,$psw,$psw2);
            $userRepository=new UserRepository();

          
            
          if($this->emailTakenCheck()==false){
                header("location:../index.php?error=emailTaken");
            }
            $userRepository->insertUser($user);
        //}
        
    }

    
    function checkUser($email){
        //kqyrim a eshte nje email qe e shkrun useri e ne databaze dmth qe u shkrujt m'a heret
         $statement=$this->startConnection()->prepare('SELECT email FROM users WHERE email=? ;');

         //nese statement execution fails
        /* if(!$statement->execute($email)){
             $statement=null;
             header("location: ../index.php?error=statementfailed");
             exit();
         }*/

         //nese useri vec ekziston ne databaze me qat email, nuk e leojojme regjistrimin, nese ndodh e kunderta e lejojme
         $resultCheck;
         if($statement->rowCount()>0){
             $resultCheck=false;
         }
         else{
             $resultCheck=true;
         }
         return $resultCheck;
     }

     function emailTakenCheck(){
       
        $result;
         if(!$this->checkUser($this->email)){
             $result=false;
         }
         else{
             $result=true;
         }
         return $result; 
     }

?>