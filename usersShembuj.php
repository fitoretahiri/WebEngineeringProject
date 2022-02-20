<?php
/*$user1=[
    "name"=>"Era",
    "surname"=>"Graicevci",
    "email"=>"eg51908@ubt-uni.net",
    "password"=>"era123456",
    "role"=>"user"
];
$user2=[
    "name"=>"Fitore",
    "surname"=>"Tahiri",
    "email"=>"ft1111@ubt-uni.net",
    "password"=>"fitore123",
    "role"=>"admin"
];

$users=[$user1,$user2];
?>*/

class User{
    public $name;
    private $surname;
    private $email;
    private $password;
    private $role;

    function __construct($name,$surname,$email,$password,$role){
        $this->name;
        $this->surname;
        $this->email;
        $this->password;
        $this->role;
    }

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

}

$user=new User("Era","Graicevci","eg51908@ubt-uni.net","era123456","user");
