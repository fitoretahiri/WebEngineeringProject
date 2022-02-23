<?php
<<<<<<< HEAD


=======
//session_start();
>>>>>>> 826daa207fca53f01e64d33c7df019be482f6002
include_once './repository/userRepository.php';
include_once './Classes/signupClasses.php';

    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['age']) || empty($_POST['birthday'])||
        empty($_POST['email'])||empty($_POST['psw'])||empty($_POST['psw2'])){
            echo "Fill all fields";
        }else{
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
        }
        
    }

    


?>