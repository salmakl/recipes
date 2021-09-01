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
            $this->db->query("SELECT r.id,r.name,r.description,status,r.img,t.name as type FROM recipes r,type t WHERE t.id=r.type");
            $recipes = $this->db->resultSet();
            $this->db->query("SELECT COUNT(*) as product FROM `recipes` ");
            $count1 = $this->db->Single();
            $this->db->query("SELECT COUNT(*) as visitor FROM `users` WHERE role='user'");
            $count2 = $this->db->Single();
            $array = array($recipes,$count1,$count2);
            // die(var_dump($array));
            return $array;
        }
        public function getById($id) {
            $this->db->query("SELECT * FROM recipes WHERE  id=:id");
            
            //Bind values
           $this->db->bind(':id', $id);
            $recipe = $this->db->single();
            $this->db->query("SELECT ratting_number FROM recipes,ratting WHERE recipes.id=ratting.id_recipe AND recipes.id=:id");
            $this->db->bind(':id', $id);
            $rating = $this->db->single();
            $array = array($recipe,$rating);
            return $array;
        }
        public function getCategory($category) {
            $this->db->query("SELECT * FROM recipes WHERE type = :category");

            //Bind values
            $this->db->bind(':category', $category);

            //Execute function
            $recipes = $this->db->resultSet();
            
            return $recipes;
        }
        public function getByUser($id) {
            $this->db->query("SELECT r.id,r.name,r.img,u.id as user FROM recipes r,users u WHERE u.id=r.user AND u.id=:id AND r.status=1 ");

            //Bind values
            $this->db->bind(':id', $id);

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

        public function store($name,$description,$ingrediant,$type,$user,$category,$img) {
           $this->db->query('INSERT INTO recipes (name, description, ingrediants, type, user, img, category) VALUES(:name,:description,:ingrediant,:type,:user,:img,:category)');
          
           //Bind values
           $this->db->bind(':name', $name);
           $this->db->bind(':description', $description);
           $this->db->bind(':ingrediant', $ingrediant);
           $this->db->bind(':type', $type);
           $this->db->bind(':user', $user);
           $this->db->bind(':category', $category);
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

        public function isRated($id_recipe,$id_user)
         {
            $this->db->query("SELECT * FROM ratting WHERE id_recipe = :id_recipe AND id_user = :id_user");
            $this->db->bind(':id_recipe', $id_recipe);
            $this->db->bind(':id_user', $id_user);
            $this->db->execute();
            if($this->db->rowCount()>0){
                return true;
            }else{
                return false;
            }

        }

        public function Rate($data,$id_user) {
            $this->db->query('INSERT INTO `ratting`(`id_recipe`, `ratting_number`, `id_user`) VALUES (:id_recipe,:rating,:id_user)');
           
            //Bind values
            $this->db->bind(':id_recipe', $data['id_recipe']);
            $this->db->bind(':rating', $data['rating']);
            $this->db->bind(':id_user', $id_user);
 
            
            //Execute function
            try {
                $this->db->execute();
            } catch(PDOException $e) {
                return $e->getMessage();
            }
         }
        public function UpdateRate($data,$id_user) {
            $this->db->query('UPDATE `ratting` SET `ratting_number`=:rating WHERE `id_user`=:id_user AND `id_recipe`=:id_recipe');
           
            
            $this->db->bind(':id_recipe', $data['id_recipe']);
            $this->db->bind(':rating', $data['rating']);
            $this->db->bind(':id_user', $id_user);
 
            
            //Execute function
            try {
                $this->db->execute();
            } catch(PDOException $e) {
                return $e->getMessage();
            }
         }

        public function RemoveFavori($id_recipe,$id_user) {
           $this->db->query('DELETE FROM `favoris` WHERE id_recipe=:id_recipe AND id_user=:id_user');
          
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

        public function getImg($id) {
            $this->db->query("SELECT img FROM recipes WHERE id = $id");
            $recipe = $this->db->single();
            return $recipe['img'];
        }
        public function edit($id) {
            
            $this->db->query("SELECT recipes.id,recipes.name AS recipe,recipes.description,recipes.ingrediants,type.name,categories.title,type.id AS type,categories.id AS category FROM recipes,type,categories WHERE recipes.type=type.id AND recipes.category=categories.id AND recipes.id=:id");
            
            //Bind values
            $this->db->bind(':id', $id);

            //Execute function
            $recipes = $this->db->single();
            return $recipes;
        }

        public function update($name,$description,$ingrediants,$type,$category,$img,$id){
            $this->db->query("UPDATE `recipes` SET `name`=:name,`description`=:description,`ingrediants`=:ingrediants,`type`=:type,`img`=:img,`category`=:category WHERE `id`=:id");

             //Bind values
             $this->db->bind(':name', $name);
             $this->db->bind(':description', $description);
             $this->db->bind(':ingrediants', $ingrediants);
             $this->db->bind(':type', $type);
             $this->db->bind(':category', $category);
             $this->db->bind(':img', $img);
             $this->db->bind(':id', $id);

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

        public function getCategories() {
            $this->db->query("SELECT * FROM categories");

            //Execute function
            $categories = $this->db->resultSet();
            return $categories;
        }
        public function getTypes() {
            $this->db->query("SELECT * FROM type");

            //Execute function
            $types = $this->db->resultSet();
            return $types;
        }

  
    }