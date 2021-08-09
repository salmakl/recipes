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
        public function Dash() {

            $this->view('overview');
        }

        public function getUsers()
        {
           $users= $this->userModel->getUsers();
        //    die(var_dump($users));
           $this->view('users',$users);   
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
                        // $this->view('home',$user);
                        header('Location:'.URLROOT);

                        // $this->home();
                    }elseif($user['role'] == 'admin'){
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['role'] = $user['role'];
                        // $this->view('overview');
                        header('Location:'.URLROOT.'/recipes/getRecipes');
                        // $this->Dash();
                    }

                }else {
                    echo 'incorrect password';
                }
            }
            
            

        }


    }