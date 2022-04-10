<?php
include_once './repository/userRepository.php';

    class User{
        private $id;
        private $name;
        private $surname;
        private $age;
        private $birthday;
        private $email;
        private $psw;
        private $psw2;
        private $roli;

        public function __construct($id,$name,$surname,$age,$birthday,$email,$psw,$psw2){
            $this->id=$id;
            $this->name=$name;
            $this->surname=$surname;
            $this->age=$age;
            $this->birthday=$birthday;
            $this->email=$email;
            $this->psw=$psw;
            $this->psw2=$psw2;         
        }

        function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getAge(){
            return $this->age;
        }

        public function getBirthday(){
            return $this->birthday;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPsw(){
            return $this->psw;
        }

        public function getPsw2(){
            return $this->psw2;
        }

        public function getRole(){
            return $this->roli;
        }
    }
?>