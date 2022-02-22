<?php

class SignupController extends Signup{
    private $name;
    private $surname;
    private $age;
    private $birthday;
    private $email;
    private $password;
    private $password2;

     function __construct($name,$surname,$age,$birthday,$email,$password,$password2){
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->birthday=$birthday;
        $this->email=$email;
        $this->password=$password;
        $this->password2=$password2;
    }

    public function signupUser(){
        if($this->emptyInput()==false){
            //shfaqe mesazhin empty input
            header("location:../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail()==false){
            //shfaqe mesazhin empty email
            header("location:../index.php?error=email");
            exit();
        }
        if($this->matchedPasswords()==false){
            //passwords dont match
            header("location:../index.php?error=passwordmatch");
            exit();
        }
        if($this->matchedUsers()==false){
            //shfaqe mesazhin email taken
            header("location:../index.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->name,$this->surname,$this->age,$this->birthday,$this->email,$this->password,$this->password2);
    }

    private function emptyInput(){
        $rezultati;
        if(empty($this->name) || empty($this->surname) || empty($this->age) || empty($this->birthday)  || empty($this->email)||empty($this->password)|| empty($this->password2) ){
            $rezultati=false;
        }
        else{
            $rezultati=true;
        }
        return $rezultati;
    }

    public function invalidEmail(){
        $rezultati;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $rezultati=false;
        }
        else{
            $rezultati=true;
        }
        return $rezultati;
    }

    public function matchedPasswords(){
        $rezultati;
        if($this->password!=$this->password2){
            $rezultati=false;
        }
        else{
            $rezultati=true;
        }
        return $rezultati;
    }

    public function matchedUsers(){
        $rezultati;
        if(!$this->checkUser($this->email)){
            $rezultati=false;
        }
        else{
            $rezultati=true;
        }
        return $rezultati;
    }
}