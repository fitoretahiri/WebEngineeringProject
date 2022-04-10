<?php

include_once '../database/Database.php';
include_once '../repository/userRepository.php';
include_once '../Classes/signupClasses.php';

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

            if(checkUser()){
                $userRepository->insertUser($user);            
            }
    }

    function checkUser(){
        $host="localhost";
        $user="root";
        $password="";
        $db="onlineshop";
    
        $res=mysqli_connect($host,$user,$password,$db);
        if($res===false){
            die("connection failed");
        }
    
        $data=$_POST;
        if(empty($data['email']) || empty($data['name']) || empty($data['surname']) || empty($data['age'])
        || empty($data['birthday']) || empty($data['psw']) || empty($data['psw2']) || empty($data['checkbox'])){
            echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Please fill all fields');
                        window.location.href='register.php';  </script>");
                        return false;
        }
    
        if(strlen($data['psw'])<8){
            echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Password should be at least 8 characters!');
                        window.location.href='register.php';  </script>");
                        return false;
        }
    
        if($data['psw']!==$data['psw2']){
            echo ("<script LANGUAGE='JavaScript'>
                         window.alert('Password and Confirm Password does not match!');
                        window.location.href='register.php';  </script>");
                        return false;
        }
    
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $email=$_POST["email"];
    
            $sql="SELECT * FROM users WHERE email='$email'";
            $result=mysqli_query($res,$sql);
            $row=mysqli_fetch_array($result);
            
            if(isset($row['email'])){
                if($row['email']===$data['email']){
                    echo ("<script LANGUAGE='JavaScript'>
                window.alert('Try another email address. This email adress is already registered!');
<<<<<<< HEAD
               window.location.href='../pages/register.php';  </script>");
=======
               window.location.href='register.php';  </script>");
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
               return false;
                }
            }
            else return true;
        }
    }
?>