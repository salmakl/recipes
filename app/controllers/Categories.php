<?php
session_start();
    class Categories extends Controller {

        public function __construct() {
            $this->categoryModel = $this->model('Category');
            
        }
        public function index()
        {
            
            $types = $this->categoryModel->getAll();    
            $this->view('categories',$types); 
        }
        
        public function getByType($type)
        {
            $types = $this->categoryModel->getByType($type); 
            $this->view('singleCategory',$types); 
        }
           
}