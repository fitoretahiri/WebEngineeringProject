<?php

if(isset($_POST["butoni2"])){
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $age=$_POST["age"];
    $birthday=$_POST["birthday"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password2=$_POST["password2"];

    //instantiate signupController class
    //renditja ka rendsi, se pariduhet t'i kemi t'dhenat nga databaza, mandej signupController i duhet me i pas metodat nga signupClass
    include "../Classes/dbClasses.php";
    include "../Classes/signupClasses.php";
    include "../Classes/signupController.php";
    
    $signup=new SignupController($name,$surname,$age,$birthday,$email,$password,$password2);

    //running the errors
    $signup->signupUser();

    //going back to front page
    header("location:../index.php?error=none");

}