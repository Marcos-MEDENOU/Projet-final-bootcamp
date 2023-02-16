<?php 

    namespace App\Models;

    use App\Models\Connexions;

    class ProductsModel extends Connexions{
        public $category;

        public function insertProducts($files) {
        
            $conn = $this->connect();
            /**
             * $sql
             */
            $sql = "INSERT INTO electrobest_project.products(product_reference,product_name, product_category,product_price, product_description , product_image) 
            VALUES(:s,:n,:c,:p,:info,:images)";
            /**
             * $stmt
             */
            $stmt = $conn->prepare($sql);

            try {
                //code...
                $stmt->execute(
                    [
                        ':s' =>$_POST['product_reference'],
                        ':n' => $_POST['product_name'],
                        ':c' => $_POST['product_category'],
                        ':p' => $_POST['product_price'],
                        ':info' => $_POST['description_product'],
                        ':images' =>$files
                    ]);
                echo "Product Added Successfully";
                exit();
            } catch(PDOException $e){
                echo "Some Internal Error Occured";
            }
            
        }

        public function insertProductsHomePage(){

            $conn = $this->connect();

            $select_home_products = $conn->prepare("SELECT * FROM `products` LIMIT 4");

            $select_home_products->execute();

            $stmt=$select_home_products->fetchAll();
            
            return $stmt;
        }


        /**********insert products in customers dash*****/
        public function insertProductsPage(){

            $conn = $this->connect();

            $select_home_products = $conn->prepare("SELECT * FROM `products`");

            $select_home_products->execute();

            $stmt=$select_home_products->fetchAll();

            return $stmt;
        }
        /**********end insert products in customers dash*****/




        /**********selects all products by category*****/
        public function ProductsCategory(){

            $conn = $this->connect();

            $select_home_products = $conn->prepare("SELECT * FROM `products` where product_category = ?;" );

            $select_home_products->execute([$_GET['category']]);

            $stmt=$select_home_products->fetchAll();
            
            return $stmt;
        }
        /**********end selects all products by category*****/

}
        
   