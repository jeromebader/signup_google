<?php 

    class User {

        private $name;
        private $lastname;
        private $id;
        private $email;
        private $password;

       function __construct($_name,$_lastname,$_id,$_email,$_password)
        {
            $this->name= $_name;
            $this->lastname=$_lastname;
            $this->id=$_id;
            $this->email=$_email;
            $this->password=$_password;

        }

        public function setId(string $_id){
            $this->id=$_id;
        }
        public function getId(){
            return $this->id;
        }

        
        public function setName(string $_name){
            $this->name=$_name;
        }
        public function getName(){
            return $this->name;
        }
        
        public function setLastname(string $_lastname){
            $this->lastname=$_lastname;
        }
        public function getLastname(){
            return $this->lastname;
        }
        
        public function setEmail(string $_email){
            $this->email=$_email;
        }
        public function getEmail(){
            return $this->email;
        }
        
        public function setPassword(string $_password){
            $this->password=$_password;
        }
        public function getPassword(){
            return $this->password;
        }


    }

?>