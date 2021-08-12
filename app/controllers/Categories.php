<?php
// session_start();
    class Categories extends Controller {

        public function __construct() {
            $this->categoryModel = $this->model('Category');
            
        }
        public function index()
        {
            
            $categories = $this->categoryModel->getAll();    
            $this->view('category',$categories); 
        }
        public function getImg($id)
        {
            
            $img = $this->categoryModel->getImg($id);    
            return $img;
        }


        public function store(){
            if(isset($_POST['title']) &&  isset($_POST['img'])){
                if(!empty($_POST['title']) && !empty($_POST['img']))
                {
                    $title=$_POST['title'];
                    $img=$_POST['img'];
                    
                     $a=$this->categoryModel->store($title,$img);
                     

                     header("location:" . $_SERVER['HTTP_REFERER']);
                   
                   
                }
            }
        }

        public function getAll()
        {
            
            $categories = $this->categoryModel->getAll();    
            $this->view('categories',$categories); 
        }
        
        public function getByCategory($category)
        {
            $categories = $this->categoryModel->getByCategory($category); 
            $this->view('singleCategory',$categories); 
        }
        public function AddCategory()
        {
            
            $this->view('addCategory'); 
        }

        public function edit(){
         
            $id=$_POST['id'];
            $title=$_POST['nameT'];
            // die(print_r($_FILES));
            if(isset($_FILES['imgT'])  && !empty($_FILES["imgT"]["name"])){
                $img=time().$_FILES["imgT"]["name"];
                move_uploaded_file($_FILES['imgT']["tmp_name"],"../public/images/".time().$_FILES["imgT"]["name"]);
                
            }else{
                $img=$this->getImg($id);
                // print_r($img)
            }

            // die(var_dump($_FILES));
            $a=$this->categoryModel->edit($id,$title,$img);
             print_r($a);

             header("location:" . $_SERVER['HTTP_REFERER']);
           
           
     
}

  
    } 
?>