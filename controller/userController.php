<?php
include_once './Classes/signupClasses.php';
include_once './repository/userRepository.php';


    if(isset($_POST['submit'])){
      /*  if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['age']) || empty($_POST['birthday'])||
        empty($_POST['email'])||empty($_POST['psw'])||empty($_POST['psw2'])){
            echo "Fill all fields";
        }else{*/
            // echo '<script type="text/javascript" src="JS/registerScript.js"></script>';
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

            $userRepository->insertUser($user);
        //}
        
    }

?>