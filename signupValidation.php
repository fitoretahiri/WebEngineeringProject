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
    include "../Classes/signupController.php";
    include "../Classes/signupClasses.php";
    $signup=new SignupController($name,$surname,$age,$birthday,$email,$password,$password2);


}