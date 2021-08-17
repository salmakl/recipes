<?php
   class Category {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function getAll() {
        $this->db->query("SELECT * FROM categories");
        $types = $this->db->resultSet();
        return $types;
    }

    
    public function getByCategory($category) {
        $this->db->query("SELECT r.img,r.name,r.id FROM recipes r, categories c WHERE c.id=r.category AND c.id=$category AND r.status=1");
          //Bind values
          $this->db->bind(':category', $category);
          $recipes = $this->db->resultSet();
        //   die(var_dump($recipes));
          return $recipes;
    }

    public function getImg($id) {
        $this->db->query("SELECT img FROM categories WHERE id = $id");
        $types = $this->db->single();
        return $types['img'];
    }

   
    public function store($title,$img) {
        $this->db->query('INSERT INTO categories(title,img) VALUES(:title, :img)');
       
        //Bind values
        $this->db->bind(':title', $title);
        $this->db->bind(':img', $img);
        
        //Execute function
        try {
            $this->db->execute();
        } catch(PDOException $e) {
            return $e->getMessage();
        }
     }

     public function edit($id,$title,$img) {
        $this->db->query('UPDATE  categories SET `title`=:title,`img`=:img WHERE id=:id');
       
        //Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':title', $title);
        $this->db->bind(':img', $img);
        
        //Execute function
        try {
            $this->db->execute();
        } catch(PDOException $e) {
            return $e->getMessage();
        }
     }


     public function delete($id) 
     {
         $this->db->query('DELETE FROM categories WHERE id =$id');
         $recipes = $this->db->execute();

     }
}
?>