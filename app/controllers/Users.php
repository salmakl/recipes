<?php
    session_start();
    class Users extends Controller {
        

        public function __construct() {
            $this->userModel = $this->model('User');
        }


        public function index() {

            $this->view('login');
        }
        public function registerpage() {

            $this->view('signup');
        }

        public function store(){
            if(isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['fname']) && isset($_POST['lname'])){
            if(!empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['fname']) && !empty($_POST['lname']))
            {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $pwd=$_POST['pwd'];
                
               $a= $this->userModel->store($fname,$lname,$email,$pwd);
               
                $this->index();
            }
        }
            
        }
        public function home() {

            $this->view('home');
        }

        public function find(){
            if(isset($_POST['email']) && isset($_POST['pwd'])){

                $user = $this->userModel->find($_POST['email'],$_POST['pwd']);
                // die(print_r($user));
                if($user){
                    if($user['role'] == 'user') {

                        $_SESSION['id'] = $user['id'];
                        $_SESSION['role'] = $user['role'];
            $this->view('home',$user);

                        // $this->home();
                    }

                }else {
                    echo 'incorrect password';
                }
            }
            
            

        }


    }