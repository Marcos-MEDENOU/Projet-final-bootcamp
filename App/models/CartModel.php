<?php 
   
    namespace App\Models;

    use App\Models\Connexions;

    class CartModel extends Connexions{

        public function insertCarts() {
        
            $conn = $this->connect();
            /**
             * $sql
             */
            $sql = "INSERT INTO electrobest_project.cart
            (user_id,product_id, product_quantity) 
            
            VALUES(:s,:n,:qty)";
            /**
             * $stmt
             */
            $stmt = $conn->prepare($sql);
                
            try {
                //code...
                $stmt->execute
                ([
                        ':s' =>$_SESSION["NavCustomerId"],
                        ':n' => $_POST['pid'],                       
                        ':qty' => $_POST['p_qty'],
                    ]);
                // echo "Cart Added Successfully";              
            } catch(PDOException $e){
                echo "Some Internal Error Occured";
            }     
        }

        public function countUserCart($cid){

            $this->cid=$cid;

            $conn=$this->connect();
            
            $select_products_count = $conn->prepare("SELECT * FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$this->cid]);

            $stmt=$select_products_count->fetchAll();

            // print_r($stmt);
            
            return $stmt;
        }

        public function SearchIfUserAddCart(){
            // $this->cid=$cid;

            $conn=$this->connect();

            $select_products_count=$conn->prepare("SELECT * FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$_SESSION["NavCustomerId"]]);

            $stmt=$select_products_count->fetchAll();

            return $stmt;
        }

        //Avoir le nombre total d'ajout au panier déja éffectuer dans la base de donner
        
        public function pannerUserCartDB(){

            $conn=$this->connect();

            $select_products_count = $conn->prepare("SELECT product_quantity FROM electrobest_project. cart WHERE user_id=?;" );

            $select_products_count->execute([$_SESSION["NavCustomerId"]]);

            $stmt=$select_products_count->fetchAll();
            
            return $stmt;
        }

        public function pannerProductNameDB(){

            $conn=$this->connect();

            $select_products_count = $conn->prepare("SELECT product_name 
            FROM products INNER JOIN cart ON
             cart.product_id=products.product_id 
             WHERE  cart.user_id=?;");

            $select_products_count->execute([$_SESSION["NavCustomerId"]]);

            $stmt=$select_products_count->fetchAll();

            return $stmt;
        }

        //$newAdd est la valeur qui sera ajouter si un ajout était éffectuer

        public function updateUserCart(){

            $conn=$this->connect();
            $sql="UPDATE cart
            INNER JOIN customer ON customer.cid=?
            INNER JOIN products ON products.product_id=?
            SET cart.product_quantity = ? WHERE cart.user_id=? AND cart.product_id=?
            ";

            // $sql="UPDATE cart.product_quantity SET cart.product_quantity = ?  
            // FROM cart         
            // INNER JOIN customer ON customer.cid=?
            // INNER JOIN products ON products.name=?";
            // -- WHERE user_id=? AND product_name=?;

            // -- $conn->prepare("SELECT product_name 
            // -- FROM products INNER JOIN cart ON
            // --  cart.product_id=products.product_id 
            // --  WHERE  cart.user_id=?;");
            
            $updateUserCart= $conn->prepare($sql);
        //     $updateUserCart->execute(
        //       [$_POST['p_qty'],$_SESSION["NavCustomerId"], $_POST["p_name"]
        //    ]);

           $updateUserCart->execute(
            [$_SESSION["NavCustomerId"], $_POST["pid"], $_POST['p_qty'],$_SESSION["NavCustomerId"],$_POST["pid"]
         
         ]);

            $stmt=$updateUserCart->fetchAll();

            return $stmt;

        }

        public function getAllUserProducts(){

            @session_start();
            $conn=$this->connect();

            $select_products_count = $conn->prepare("SELECT
                cart.cid,
                cart.product_id,
                products.product_name,
                products.product_image, 
                products.product_price, 
                product_quantity
            FROM products INNER JOIN cart ON
             cart.product_id=products.product_id 
             WHERE  cart.user_id=?;");
            if(isset($_SESSION["NavCustomerId"])){
                $select_products_count->execute([$_SESSION["NavCustomerId"]]);
            }

            $stmt=$select_products_count->fetchAll();

            return $stmt;

        }
        public function deleteCart($id){
            // session_start();
            $conn = $this->connect();
            /**
             * $sql
             */
            $sql = "DELETE FROM electrobest_project.cart
            WHERE cart.cid=?";
            /**
             * 
             * $stmt
             * 
             */
            
            try {
                //code...
                $stmt = $conn->prepare($sql);
                
                $stmt->execute([$id]);
                // echo "Cart Added Successfully";              
            } catch(PDOException $e){
                echo "Some Internal Error Occured";
            }     

        }
}
        
   