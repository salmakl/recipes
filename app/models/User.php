<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getUsers() 
        {
           $this->db->query("SELECT * FROM users");
           $users = $this->db->resultSet();
           return $users;
        }
        public function getUser($id) 
        {
           $this->db->query("SELECT * FROM users WHERE id = $id");
           $users = $this->db->resultSet();
           return $users;
        }
        public function getPassword($id) 
        {
           $this->db->query("SELECT `password` FROM users WHERE id = $id");
           $users = $this->db->single();
           return $users['password'];
        }
        public function editPassword($id,$password) 
        {
           $this->db->query("UPDATE `users` SET `password`=:password WHERE id=:id");

           $this->db->bind(':id', $id);
           $this->db->bind(':password', $password);
           try {
            $this->db->execute();
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
        public function editProfil($id,$fname,$lname,$email) 
        {
           $this->db->query("UPDATE `users` SET `fname`=:fname,`lname`=:lname,`email`=:email WHERE id=:id");

           $this->db->bind(':id', $id);
           $this->db->bind(':fname', $fname);
           $this->db->bind(':lname', $lname);
           $this->db->bind(':email', $email);
           try {
            $this->db->execute();
        } catch(PDOException $e) {
            return $e->getMessage();
        }
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
        public function delete($id){
            $this->db->query("DELETE FROM users WHERE id=:id");

            $this->db->bind(':id', $id);

            //Execute function
            try {
                $this->db->execute();
                return $ok = "ok";
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }
