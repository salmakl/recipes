<?php
    session_start();
    class Users extends Controller {
        
        public $data = [];

        
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

        public function getUser()
        {
            $id=$_SESSION['id'];
           $user= $this->userModel->getUser($id);
       
           $this->view('profile',$user);   
        }
        public function getPassword()
        {
           $id=$_SESSION['id'];
           $user= $this->userModel->getPassword($id);
            // print_r($user);
             return $user;
        }
        public function editPassword()
        {
        //    die(var_dump($this->data)); 
           $id=$_SESSION['id'];
           $old=$this->data['old'];
           $new=$this->data['new'];
           $user= $this->userModel->getPassword($id);
            if($old!=$user){
                return false;
            }else {

                $this->userModel->editPassword($id,$new);
                print_r(json_encode(true));
            }
        }
        public function editProfil()
        {
            // die(var_dump($this->data)); 
           $id=$_SESSION['id'];
           $fname=$this->data['fname'];
           $lname=$this->data['lname'];
           $email=$this->data['email'];
 
            $this->userModel->editProfil($id,$fname,$lname,$email);
            print_r(json_encode(true));
            
        }
        public function getUsers()
        {
           $users= $this->userModel->getUsers();
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