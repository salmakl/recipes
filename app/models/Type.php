<?php
   class Type {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function getAll() {
        $this->db->query("SELECT * FROM type");
        $types = $this->db->resultSet();
        return $types;
    }
    public function getImg($id) {
        $this->db->query("SELECT img FROM type WHERE id = $id");
        $types = $this->db->single();
        return $types['img'];
    }
    public function getByType($type) {
        $this->db->query("SELECT r.img,r.name FROM recipes r, type t WHERE t.id=r.type AND t.id=$type AND r.status=1");
          //Bind values
          $this->db->bind(':type', $type);
          $recipes = $this->db->resultSet();
          return $recipes;
    }
    
    
    public function store($title,$img) {
        $this->db->query('INSERT INTO type(name,img) VALUES(:name, :img)');
       
        //Bind values
        $this->db->bind(':name', $title);
        $this->db->bind(':img', $img);
        
        //Execute function
        try {
            $this->db->execute();
        } catch(PDOException $e) {
            return $e->getMessage();
        }
     }
    public function edit($id,$title,$img) {
        $this->db->query('UPDATE  type SET `name`=:name,`img`=:img WHERE id=:id');
       
        //Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $title);
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
         $this->db->query('DELETE FROM type WHERE id =$id');
         $recipes = $this->db->execute();

     }
   }
?>