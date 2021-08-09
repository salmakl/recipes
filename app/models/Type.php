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
    public function getByType($type) {
        $this->db->query("SELECT r.img,r.name FROM recipes r, type t WHERE t.id=r.type AND t.id=$type AND r.status=1");
          //Bind values
          $this->db->bind(':type', $type);
          $recipes = $this->db->resultSet();
          return $recipes;
    }
    

   }
?>