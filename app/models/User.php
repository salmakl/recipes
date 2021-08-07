<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }



        public function find($email,$password) {
            $this->db->query("SELECT * FROM users WHERE email = :email AND password = :password");

            //Bind values
            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);


            //Execute function
            $user = $this->db->single();
            if($user){
                return $user;
            }else {
                return false;
            }
            // return $user;
        }

        public function store($fname,$lname,$email,$pwd) {
           
            $this->db->query( "INSERT INTO `users`(`fname`, `lname`, `email`, `password`) VALUES (:fname,:lname,:email,:pwd)");
            $this->db->bind(':fname', $fname);
            $this->db->bind(':lname', $lname);
            $this->db->bind(':email', $email);
            $this->db->bind(':pwd', $pwd);
            
        
                //Execute function
                try {
                    $this->db->execute();
                } catch(PDOException $e) {
                    return $e->getMessage();
                }
        }
    }
