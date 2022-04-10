<?php
include_once '../repository/contactUsRepository.php';

    class Message{
        private $id;
        private $fullName;
        private $email;
        private $telephone;
        private $organization;
        private $message;

        public function __construct($id,$fullName,$email,$telephone,$organization,$message){
            $this->id=$id;
            $this->fullName=$fullName;
            $this->email=$email;
            $this->telephone=$telephone;
            $this->organization=$organization;
            $this->message=$message;           
        }

        function getId(){
            return $this->id;
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTelephone(){
            return $this->telephone;
        }

        public function getOrganization(){
            return $this->organization;
        }

        public function getMessage(){
            return $this->message;
        }
    }

    
?>