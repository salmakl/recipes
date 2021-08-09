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
        public function getAll()
        {
            
            $types = $this->typeModel->getAll();    
            $this->view('types',$types); 
        }
        
        public function getByType($type)
        {
            $types = $this->typeModel->getByType($type); 
            $this->view('singleType',$types); 
        }
           
}