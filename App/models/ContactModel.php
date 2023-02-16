<?php 

    namespace App\Models;

    use App\Models\Connexions;

    class ContactModel extends Connexions{

        public function insertContact() {
        
            $conn = $this->connect();
            /**
             * $sql
             */
            $sql = "INSERT INTO electrobest_project.contact
            VALUES(NULL,:s,:n,:c,:p)";
            /**
             * $stmt
             */
            $stmt = $conn->prepare($sql);

            try {
                //code...
                $stmt->execute(
                    [
                        ':s' =>$_POST[$_SESSION["NavCustomerId"]],
                        ':n' => $_POST['user_name'],
                        ':c' => $_POST['user_email'],
                        ':p' => $_POST['user_text'],
                        
                    ]);
                echo "Product Added Successfully";
                exit();
            } catch(PDOException $e){
                echo "Some Internal Error Occured";
            }
            
        }

}
        
   