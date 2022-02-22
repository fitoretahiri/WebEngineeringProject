<?php

class SignupController{
    private $name;
    private $surname;
    private $age;
    private $birthday;
    private $email;
    private $password;
    private $password2;

     function __construct($name,$surname,$age,$birthday,$email,$password,$password2){
        $this->$name=$name;
        $this->$surname=$surname;
        $this->$age=$age;
        $this->$birthday=$birthday;
        $this->$email=$email;
        $this->$password=$password;
        $this->$password2=$password2;
    }

    private function emptyInput(){
        $rezultati;
        if(empty($this->$name) || empty($this->$surname) || empty($this->$age) || empty($this->$birthday) || empty($this->$email)|| empty($this->$password) ||empty($this->$birthday) || empty($this->$email)|| empty($this->$password2) ){
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
}