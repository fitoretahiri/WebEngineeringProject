<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $host="localhost";
    $user="root";
    $password="";
    $db="onlineshop";

    $data=mysqli_connect($host,$user,$password,$db);
    if($data===false){
        die("connection failed");
    }
    $variable=$_POST;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST["email"];
        $password=$_POST["password"];
        

        $sql="SELECT * FROM users WHERE email='$email' AND psw='$password'";
        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_array($result);
        if(isset($row["roli"])){
            if($row["roli"]=="Admin"){
                $_SESSION['roli']=$row['roli'];
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> 0bbfe224b715cd117a1858885c15c4b8ef99f4e6
                header("location:./pages/index.php");
            }
            else if($row["roli"]=="User"){
                $_SESSION['roli']=$row['roli'];
                header("location:./pages/index.php");
<<<<<<< HEAD

=======
=======
=======
                $_SESSION['name']=$row['name'];
>>>>>>> Stashed changes
                header("location:index.php");
            }
            else if($row["roli"]=="User"){
                $_SESSION['roli']=$row['roli'];
                $_SESSION['name']=$row['name'];
                header("location:index.php");
>>>>>>> a0d5dc007db53243496de25f8d911b9e556bcdd0
>>>>>>> 0bbfe224b715cd117a1858885c15c4b8ef99f4e6
            }
        }
        
        if(empty($variable['email']) || empty($variable['password'])){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please fill all fields');
           window.location.href='./pages/login.php';  </script>");
        }

        else {
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Email or password incorrect');
                    window.location.href='./pages/login.php';  </script>");
        }

    }
?>