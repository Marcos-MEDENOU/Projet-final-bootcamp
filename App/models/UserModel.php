<?php 

    namespace App\Models;
    use App\Models\Connexions;

    class UserModel extends Connexions{ 
    /**
    * $conn
    */
    public $conn;
    public $username;
    public $email;
    public $password;
    public $phoneNumber;
    public $emailConnexion;
    public $emailConnect;


    /**
     * verify()
     */
    public function verifyEmail($email) {
      /**
     * verify()
     */
   
        $this->email = $email;

        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT * FROM `electrobest_project`.customer WHERE useremail = ?;";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function verifyUsername($username) {
        /**
       * verify()
       */
     
          $this->username = $username;
  
          /**
           * 
           */
          $conn = $this->connect();
          /**
           * $sql
           */
          $sql = "SELECT * FROM `electrobest_project`.customer WHERE username = ?;";
          /**
           * $stmt
           */
          $stmt = $conn->prepare($sql);
          $stmt->execute([$this->username]);
          $result = $stmt->fetchAll();
          return $result;
      }


      public function verifyPhoneNumber($phoneNumber) {
        /**
       * verify()
       */
     
          $this->phoneNumber = $phoneNumber;
  
          /**
           * 
           * 
           */
          $conn = $this->connect();
          /**
           * $sql
           */
          $sql = "SELECT * FROM `electrobest_project`.customer WHERE contactNumber = ?;";
          /**
           * $stmt
           */
          $stmt = $conn->prepare($sql);
          $stmt->execute([$this->phoneNumber]);
          $result = $stmt->fetchAll();
          return $result;
      }

    //   public function verifyEmailConnexion($emailConnexion){
    //     $this->emailConnexion=$emailConnexion;
    //     $conn = $this->connect();
    //     $sql = "SELECT * FROM `electrobest`.customer WHERE useremail = ?;";
    //     /**
    //      * $stmt
    //      */
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute([$this->emailConnexion]);
    //     $result = $stmt->fetchAll();
    //     return $result;
    // }

    public function verifyEmailConn($emailConnexion){

        $this->emailConnect=$emailConnexion;

        $conn = $this->connect();
        /**
         * $stmt
         */
        try {
          //code...
           $sql="SELECT cid FROM  electrobest_project.customer where useremail=?;";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->emailConnect]);
        $row=$stmt->fetch();
        return $row;
        } catch (\PDOException $e) {
          //throw $th;
          echo $e->getMessage();
        }
               
    }

    public function verifyEmailConnexion($emailConnexion){

        $this->emailConnexion=$emailConnexion;

        $conn = $this->connect();

        $sql = "SELECT * FROM `electrobest_project`.customer WHERE useremail = ?;";
        /**
         * $stmt
         */
        try {
          //code...
          $stmt = $conn->prepare($sql);
          $stmt->execute([$this->emailConnexion]);
          $result = $stmt->fetchAll(); 
          return $result;
        } catch (\PDOException $e) {
          //throw $th;
          echo $e->getMessage();
        }
       
    }

    public function searchUserConnect($cid){
      
      
      $conn = $this->connect();

      $sql = "SELECT * FROM `electrobest_project`.customer WHERE cid = ?;";

      try {
        //code...
        $stmt = $conn->prepare($sql);
        $stmt->execute([$cid]);
        $result = $stmt->fetchAll();
        return $result;
      } catch (\PDOException $e) {
        echo $e->getMessage();
      }

    }

    /**
     * insertUser()
     */
    public function insertUser( $username, $email, $password, $phoneNumber) {

        $conn = $this->connect();
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phoneNumber=$phoneNumber;

        /**
         * $sql
         */
        try {
            //code...
            $sql = "INSERT INTO `electrobest_project`.customer(username,useremail,contactNumber,password, user_picture) VALUES(:username, :useremail, :contactNumber, :password, :user_picture)";
        
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ":username" => $this->username,
                ":useremail" => $this->email,    
                ":contactNumber" => $this->phoneNumber,
                ":password" => password_hash($this->password,PASSWORD_DEFAULT),
                ":user_picture"=>'avatar.jpg'
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            //throw $th;
        }
       

    }


    public function checkUserEmailBeforeChange($useremail){
        $conn = $this->connect();

        $sql = "SELECT * FROM `electrobest_project`.customer WHERE useremail = ?;";

        try {
          //code...
          $stmt = $conn->prepare($sql);
          $stmt->execute([$useremail]);
          $result = $stmt->fetchAll();
          return $result;
        } catch (\PDOException $e) {
          echo $e->getMessage();
        }

    }

    public function checkUserNameBeforeChange($username){

      $conn = $this->connect();

      $sql = "SELECT * FROM `electrobest_project`.customer WHERE username = ?;";

      try {
        //code...
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $result = $stmt->fetchAll();
        return $result;
      } catch (\PDOException $e) {
        echo $e->getMessage();
      }

      
    }

    public function updateUserName($username){
      session_start();
      $conn = $this->connect();
        $this->username = $username;
        // $this->email = $email;
        // $this->picture = $picture;

        try {
          //code...
          $sql = "UPDATE customer
          SET customer.username = ? 
          WHERE cid=?";
      
          $stmt = $conn->prepare($sql);
          $stmt->execute([
               $this->username, $_SESSION["NavCustomerId"],
              // ":useremail" => $this->email,    
              // ":contactNumber" => $this->phoneNumber,
              // ":password" => password_hash($this->password,PASSWORD_DEFAULT),
              // ":user_picture"=>'avatar.jpg'
          ]);
      } catch (\PDOException $e) {
          echo $e->getMessage();
          //throw $th;
      }
        
    }

    public function updateUserEmail($email){
      // session_start();
      $conn = $this->connect();
        $this->email = $email;
        // $this->email = $email;
        // $this->picture = $picture;

        try {
          //code...
          $sql = "UPDATE customer
          SET customer.useremail = ? 
          WHERE cid=?";
      
          $stmt = $conn->prepare($sql);
          $stmt->execute([
               $this->email, $_SESSION["NavCustomerId"],
              // ":useremail" => $this->email,    
              // ":contactNumber" => $this->phoneNumber,
              // ":password" => password_hash($this->password,PASSWORD_DEFAULT),
              // ":user_picture"=>'avatar.jpg'
          ]);
      } catch (\PDOException $e) {
          echo $e->getMessage();
          //throw $th;
      }
        
    }

    public function updateUserPicture($picture){
      session_start();
      $conn = $this->connect();
        $this->picture = $picture;
        // $this->email = $email;
        // $this->picture = $picture;

        try {
          //code...
          $sql = "UPDATE customer
          SET customer.user_picture = ? 
          WHERE cid=?";

          $stmt = $conn->prepare($sql);
          $stmt->execute([
               $this->picture, $_SESSION["NavCustomerId"],
              // ":useremail" => $this->email,    
              // ":contactNumber" => $this->phoneNumber,
              // ":password" => password_hash($this->password,PASSWORD_DEFAULT),
              // ":user_picture"=>'avatar.jpg'
          ]);
      } catch (\PDOException $e) {
          echo $e->getMessage();
          //throw $th;
      }
        
    }
public function selectAllCustomers(){

  $conn = $this->connect();

  $sql = "SELECT * FROM `electrobest_project`.customer LIMIT 8";

  try {
    //code...
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  } catch (\PDOException $e) {
    echo $e->getMessage();
  }
}



public function selectProducts(){

  $conn = $this->connect();

  $sql = "SELECT * FROM `electrobest_project`.products LIMIT 8";

  try {
    //code...
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  } catch (\PDOException $e) {
    echo $e->getMessage();
  }
}

public function selectAdmin(){

  @session_start();
 
  $conn = $this->connect();

  $sql = "SELECT * FROM `electrobest_project`.customer WHERE cid=?";

  try {
    //code...
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_SESSION["NavAdminId"]]);
    $result = $stmt->fetch();
    return $result;
  } catch (\PDOException $e) {
    echo $e->getMessage();
  }
}


public function selectProductsDash(){

  $conn = $this->connect();

  $sql = "SELECT * FROM `electrobest_project`.products";

  try {
    //code...
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  } catch (\PDOException $e) {
    echo $e->getMessage();
  }
}

}
   