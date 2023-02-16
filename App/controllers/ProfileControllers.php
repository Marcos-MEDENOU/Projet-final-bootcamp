<?php

namespace App\Controllers;
use App\Models\UserModel;


class ProfileControllers  {
  /**
   * $usermodel
   */
    public $usermodel;
    public $email;
    public $username;
    public $picture;

    //class constructor 
  public function __construct($email, $username, $picture) {
    $this->email = $email;
    $this->username = $username; 
    $this->picture = $picture;
    //usermodel instanciation
    $this->usermodel = new UserModel();
  }


  public function updateUserInfos() {

    $usernameCheck=$this->usermodel->checkUserNameBeforeChange($this->username);

    if(count($usernameCheck)==0){

      $this->usermodel->updateUserName( $this->username);
    }
    $useremailCheck=$this->usermodel->checkUserEmailBeforeChange($this->email);

    if(count($useremailCheck)==0){

      $this->usermodel->updateUserEmail($this->email);
    }
    
    
    $pic=$this->verifyUserPicture();

    if($pic){
      $this->usermodel->updateUserPicture( $pic);
    }
   

  }


  public function verifyUserPicture(){

    $imgArr = array();
    
      // Configure upload directory and allowed file types

      $upload_dir ='media\uploads'.DIRECTORY_SEPARATOR;

      $allowed_types = array('jpg', 'png', 'jpeg', 'gif');     

      // Define maxsize for files i.e 2MB

      $maxsize = 2 * 1024 * 1024;
       
      // Checks if user sent an empty form

      if(!empty( $this->picture['name'])) { 

      //  files uploading 	

        $file_tmpname = $this->picture['tmp_name'];
        $file_name = $this->picture['name'];
        $file_size = $this->picture['size'];

        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        // Set upload file path
        $filepath = $upload_dir.$file_name;
        // Check file type is allowed or not

        if(in_array(strtolower($file_ext), $allowed_types)) {
 
          // Verify file size - 2MB max

          if ($file_size > $maxsize){		
            echo "Error: File size is larger than the allowed limit 2MB.";   
            header("location: /HomeControllers/profileUpdateAction?msg=Error: File size is larger than the allowed limit 2MB.");        
            exit();}
          // If file with name already exist then append time in
          // front of name of the file to avoid overwriting of file

          if(file_exists($filepath)) {
            $name_used = time().$file_name;
            $filepath = $upload_dir.$name_used;
            if( move_uploaded_file($file_tmpname, $filepath)) {
              $file_name = $name_used;

              array_push($imgArr, $file_name);
               
              return $file_name;
              echo "products Successfully uploaded";
              exit();
            }else {
              echo "Error uploading products";
              header("location: /HomeControllers/profileUpdateAction?msg=Error uploading products");
              exit();				
            }

          }else {
          
            if(move_uploaded_file($file_tmpname, $filepath)) {

              array_push($imgArr, $file_name);

            }
            else {					
              echo "Error uploading products";
              header("location: /HomeControllers/profileUpdateAction?msg=Error uploading products");
              exit();				
            }
          }
        }
        else {
          echo "product file type is not allowed";
          header("location: /HomeControllers/profileUpdateAction?msg=product file type is not allowed");
          exit();
        }
      
    }
    else {
      
      echo "No files selected";
      header("location: /HomeControllers/profileUpdateAction?msg=Aucun fichier sélectionner");

    }
    
  }
  

  public function emptyInputs() {
      if(empty($this->email) || empty($this->username)){
        echo "Tous les champs ne sont pas renseignés";
   exit(); } 
      return false;
  }

  public function verifyEmail() {
      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        echo "Votre addresse mail n'est pas valid";
           exit();   }
      return false;      
  }
  
}