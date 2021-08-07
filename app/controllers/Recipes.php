<?php
session_start();
    class Recipes extends Controller {

        public function __construct() {
            $this->recipesModel = $this->model('Recipe');
        }

        public function index(){

        $recipes = $this->recipesModel->getAll();   
        $this->getWishlist();
        $this->view('recipes',$recipes); 
        }
    
         public function Wishlist(){
            $id_user=$_SESSION['id'];
            
            $wlist=$this->recipesModel->Wishlist($id_user);
            // die($id_user);
            $this->view('favoris',$wlist); 
            }

        public function addRecipe(){

        $this->view('addRecipe'); 
        }
        
        public function getById($id){        
        $recipe = $this->recipesModel->getById($id); 
        $new = $this->indexByCategory($recipe['type']);

        $content = array($recipe,$new);
        $this->view('details',$content); 
        }


        public function indexByCategory($category){
            $recipes = $this->recipesModel->getCategory($category); 
            // $this->view('home',$recipes);
            return $recipes;
        }
        public function getWishlist(){
            $id=$_SESSION['id'];
            $list = $this->recipesModel->getWishlist($id); 

            $wishlist = array();

            foreach($list as $item){
                array_push($wishlist,$item['id_recipe']);

            }
            $_SESSION['wishlist'] = $wishlist;
            return $wishlist;
        

        }

        public function store(){
            if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['ingrediant']) && isset($_POST['type']) && isset($_POST['img'])){
                if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['ingrediant']) && !empty($_POST['type']) && !empty($_POST['type']))
                {
                    $name=$_POST['name'];
                    $description=$_POST['description'];
                    $ingrediant=$_POST['ingrediant'];
                    $type=$_POST['type'];
                    $img=$_POST['img'];
                    
                   $a= $this->recipesModel->store($name,$description,$ingrediant,$type,$img);
                   
                    $this->index();
                }
    
        }
    }
        public function Add2Favoris($id_recipe,$id_user){
            $id_user=$_SESSION['id'];
           
        $a= $this->recipesModel->Add2Favoris($id_recipe,$id_user);   
               
        // $this->back();
        header("location:" . $_SERVER['HTTP_REFERER']);
       
    }
        public function edit(){

        }

        public function delete(){
   
    }
}