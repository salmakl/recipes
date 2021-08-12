<?php
session_start();
    class Types extends Controller {

        public function __construct() {
            $this->typeModel = $this->model('Type');
            
        }
        public function index()
        {
            
            $types = $this->typeModel->getAll();    
            $this->view('type',$types); 
        }
        public function store(){
            if(isset($_POST['title']) &&  isset($_POST['img'])){
                if(!empty($_POST['title']) && !empty($_POST['img']))
                {
                    $title=$_POST['title'];
                    $img=$_POST['img'];
                    // die(var_dump($_POST));
                    $a=$this->typeModel->store($title,$img);
                     print_r($a);

                     header("location:" . $_SERVER['HTTP_REFERER']);
                   
                   
                }
            }
        }

        public function getAll()
        {
            
            $types = $this->typeModel->getAll();    
            $this->view('types',$types); 
        }
        public function getImg($id)
        {
            
            $img = $this->typeModel->getImg($id);    
            return $img;
        }
        
        public function getByType($type)
        {
            $types = $this->typeModel->getByType($type); 
            $this->view('singleType',$types); 
        }
        public function AddType()
        {
            
            $this->view('addType'); 
        }

        public function edit(){
         
                    $id=$_POST['id'];
                    $title=$_POST['nameT'];
                    // die(print_r($_FILES));
                    if(isset($_FILES['imgT'])  && !empty($_FILES["imgT"]["name"])){
                        $img=time().$_FILES["imgT"]["name"];
                        move_uploaded_file($_FILES['imgT']["tmp_name"],"../public/images/".time().$_FILES["imgT"]["name"]);
                        // $a=$this->typeModel->edit($id,$title,$img);
                    }else{
                        $img=$this->getImg($id);
                        // print_r($img)
                    }

                    // die(var_dump($_FILES));
                    $a=$this->typeModel->edit($id,$title,$img);
                     print_r($a);

                     header("location:" . $_SERVER['HTTP_REFERER']);
                   
                   
             
        }

        
           
}