<?php
session_start();
    class Recipes extends Controller {

        public $data = [];

        public function __construct() {
            $this->recipesModel = $this->model('Recipe');
        }

        public function index(){

        $recipes = $this->recipesModel->getAll();  
        if (isset($_SESSION['id'])){
        $this->getWishlist();
        $this->view('recipes',$recipes); }
        else{
            $this->view('recipes',$recipes);
        }
        }
        public function getRecipes(){

        $data = $this->recipesModel->getRecipes();   
        // die(var_dump($data));
        $this->view('overview',$data); 
        }
        public function getDetails(){

        $data = $this->recipesModel->getRecipes();   
        // die(var_dump($data));
        $this->view('adminrecipes',$data); 
        }
    
         public function Wishlist(){
            $id_user=$_SESSION['id'];
            
            $wlist=$this->recipesModel->Wishlist($id_user);
            // die($id_user);
            $this->view('favoris',$wlist); 
            }

        public function addRecipe(){
            if(isset($_SESSION['id'])){
        $types=$this->recipesModel->getTypes();
        $categories=$this->recipesModel->getCategories();
        $content = array($types,$categories);
        // die(var_dump($content));
        $this->view('addRecipe',$content); 
        }else{
            header("location:".URLROOT."/users");
        }
    }
        public function getById($id){        
        $recipe = $this->recipesModel->getById($id); 
        $new = $this->indexByCategory($recipe['type']);

        $content = array($recipe,$new);
        // die(var_dump($content));
        $this->view('details',$content); 
        }
        public function getByUser(){    

        if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $recipes = $this->recipesModel->getByUser($id); 
  
        $this->view('profile',$recipes); 
        }

    }
        public function indexByCategory($category){
            $recipes = $this->recipesModel->getCategory($category); 
            // $this->view('home',$recipes);
            return $recipes;
        }
        public function getWishlist(){
            if(isset($_SESSION['id'])){
            $id=$_SESSION['id'];
            $list = $this->recipesModel->getWishlist($id); 

            $wishlist = array();

            foreach($list as $item){
                array_push($wishlist,$item['id_recipe']);

            }
            $_SESSION['wishlist'] = $wishlist;
            return $wishlist;
        
        }
        }

        public function store(){
            if(isset($_POST['add'])){

                    $name=$_POST['name'];
                    $description=$_POST['description'];
                    $ingrediant=$_POST['ingrediants'];
                    $type=$_POST['type'];
                    $category=$_POST['category'];
                    $user=$_SESSION['id'];  
                    
                    // $img=$_POST['img'];
                    if(isset($_FILES['img'])  && !empty($_FILES["img"]["name"])){
                        $image=time().$_FILES["img"]["name"];
                        move_uploaded_file($_FILES['img']["tmp_name"],"../public/images/".time().$_FILES["img"]["name"]);
                        
                    }

                
                    
                   $a= $this->recipesModel->store($name,$description,$ingrediant,$type,$user,$category,$image);
                //    echo 'here';
                    $this->index();
                }

            }
            public function getImg($id)
            {
                
                $img = $this->recipesModel->getImg($id);    
                return $img;
            }
                public function update(){
                    
        
                            $name=$_POST['name'];
                            $description=$_POST['description'];
                            $ingrediants=$_POST['ingrediants'];
                            $type=$_POST['type'];
                            $category=$_POST['category'];
                            $id=$_POST['id']; 
                            
                            
                            
                            if(isset($_FILES['img'])  && !empty($_FILES["img"]["name"])){
                                $image=time().$_FILES["img"]["name"];
                                move_uploaded_file($_FILES['img']["tmp_name"],"../public/images/".time().$_FILES["img"]["name"]);
                                
                            } else{
                                $img=$this->getImg($id);
                                }
                                
                           $a= $this->recipesModel->update($name,$description,$ingrediants,$type,$category,$img,$id);
                        // die(var_dump($a));
                            $this->getByUser();
                        }
    
        public function Add2Favoris($id_recipe,$id_user){
            if(isset($_SESSION['id'])){
            $id_user=$_SESSION['id'];
           
        $a= $this->recipesModel->Add2Favoris($id_recipe,$id_user);   
               
        // $this->back();
        header("location:" . $_SERVER['HTTP_REFERER']);
            }else{
                header("location:".URLROOT."/users");
            }
    }
        public function Rate(){
        
            $id_user=$_SESSION['id'];
            // die(var_dump($this->data));
        //    $data['id_recipe'] = $this->data['id_recipe'];
        //    $data['rating'] = $this->data['rating'];
        $a= $this->recipesModel->Rate($this->data,$id_user);   
               print_r(json_encode($a));
        // $this->back();
        // header("location:" . $_SERVER['HTTP_REFERER']);
       
    }
        public function RemoveFavori($id_recipe,$id_user){
            $id_user=$_SESSION['id'];
           
        $a= $this->recipesModel->RemoveFavori($id_recipe,$id_user);   
               
        // $this->back();
        header("location:" . $_SERVER['HTTP_REFERER']);
       
    }
        public function approuved($id){
        
            $this->recipesModel->approuved($id);
            header("location:" . $_SERVER['HTTP_REFERER']);


        }
        public function Napprouved($id){
        
            $this->recipesModel->Napprouved($id);
            header("location:" . $_SERVER['HTTP_REFERER']);
        }




        public function edit($id)
        {
           $recipe= $this->recipesModel->edit($id);
           $types=$this->recipesModel->getTypes();
           $categories=$this->recipesModel->getCategories();
           $content = array($types,$categories,$recipe);
        //    die(var_dump($content[0]));
           $this->view('editRecipe',$content);
            
        }

        public function delete($id){
            
            $this->recipesModel->delete($id);
            header("location:" . $_SERVER['HTTP_REFERER']);
    }
}