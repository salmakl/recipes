<?php
    class Recipe {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function getAll() {
            $this->db->query("SELECT * FROM recipes WHERE status =1");
            $recipes = $this->db->resultSet();
            return $recipes;
        }

        public function getRecipes() {
            $this->db->query("SELECT r.id,r.name,r.description,status,r.img,t.name as type FROM recipes r,type t WHERE t.id=r.type ");
            $recipes = $this->db->resultSet();
            return $recipes;
        }
        public function getById($id) {
            $this->db->query("SELECT * FROM recipes WHERE id=:id");
            //Bind values
           $this->db->bind(':id', $id);
            $recipe = $this->db->single();
            return $recipe;
        }
        public function getCategory($category) {
            $this->db->query("SELECT * FROM recipes WHERE type = :category");

            //Bind values
            $this->db->bind(':category', $category);

            //Execute function
            $recipes = $this->db->resultSet();
            
            return $recipes;
        }

        public function getWishlist($id) {
            $this->db->query("SELECT * FROM favoris WHERE id_user = :id");

            //Bind values
            $this->db->bind(':id', $id);

            //Execute function
            $recipes = $this->db->resultSet();
            return $recipes;
        }
        public function Wishlist($id_user) {
            
            $this->db->query("SELECT r.img,r.name FROM favoris f,recipes r,users u WHERE r.id=f.id_recipe AND u.id=$id_user");
            
            //Bind values
            $this->db->bind(':id_user', $id_user);

            //Execute function
            $recipes = $this->db->resultSet();
            return $recipes;
        }

        public function store($name,$description,$ingrediant,$type,$img) {
           $this->db->query('INSERT INTO recipes (name, description, ingrediant, type,img) VALUES(:name, :description, :ingrediant, :type, :img)');
          
           //Bind values
           $this->db->bind(':name', $name);
           $this->db->bind(':description', $description);
           $this->db->bind(':ingrediant', $ingrediant);
           $this->db->bind(':type', $type);
           $this->db->bind(':img', $img);
           
           //Execute function
           try {
               $this->db->execute();
           } catch(PDOException $e) {
               return $e->getMessage();
           }
        }
        public function Add2Favoris($id_recipe,$id_user) {
           $this->db->query('INSERT INTO favoris (id_recipe, id_user) VALUES(:id_recipe, :id_user)');
          
           //Bind values
           $this->db->bind(':id_recipe', $id_recipe);
           $this->db->bind(':id_user', $id_user);

           
           //Execute function
           try {
               $this->db->execute();
           } catch(PDOException $e) {
               return $e->getMessage();
           }
        }

        public function update($name,$description,$ingrediant,$type,$img){
            $this->db->query("UPDATE recipes SET name=:name, description=:description, type=:type, img=:img WHERE id=:id");

             //Bind values
             $this->db->bind(':name', $name);
             $this->db->bind(':description', $description);
             $this->db->bind(':ingrediant', $ingrediant);
             $this->db->bind(':type', $type);
             $this->db->bind(':img', $img);

            //Execute function
            try {
                $this->db->execute();
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }


        public function delete($id){
            $this->db->query("DELETE FROM recipes WHERE id=:id");

            $this->db->bind(':id', $id);

            //Execute function
            try {
                $this->db->execute();
                return $ok = "ok";
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        public function approuved($id)
        {
            $this->db->query("UPDATE `recipes` SET STATUS=1 WHERE id=:id");
            $this->db->bind(':id', $id);
                 //Execute function
                 try {
                    $this->db->execute();
                } catch(PDOException $e) {
                    return $e->getMessage();
                }

        }
        public function Napprouved($id)
        {
            $this->db->query("UPDATE `recipes` SET STATUS=0 WHERE id=:id");
            $this->db->bind(':id', $id);
                 //Execute function
                 try {
                    $this->db->execute();
                } catch(PDOException $e) {
                    return $e->getMessage();
                }

        }
    }