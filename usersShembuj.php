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

abstract class User{
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
   
    /*public function setEmail($username){
        $this->username=$username
    }
    public function setUsername($username){
        $this->username=$username
    }*/
    //public function getRole(){
       // return $this->role;
    //}

    public function __toString(){
        return "this is toString";
    }

    abstract function getRole();

    private function emptyInput(){
        $result;
        if(empty($this->email;)|| empty($this->password;)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }
}

    class Admin extends User{
        private $permissions;

        public function __construct($name, $surname,$email,$password,$role,$permissions){
            parent::__construct($name,$surname,$email,$password,$role);
            $this->permissions=$permissions;
        }

        public function __toString(){
            return "this is toString from admin";
        }

        function getRole(){
            return "1";
        }
    }

    class SimpleUser extends User{
        public function getRole(){
            return "0";
        }
    }



