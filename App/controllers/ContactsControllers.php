<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Models\ContactModel;


class ContactsControllers  {
/**
 * $usermodel
 */

public $username;
public $email;
public $usertext;


public function __construct($username, $email, $usertext) {
    $this->username = $this->sanitaze($username);
    $this->email = $email;
    $this->usertext = $usertext;
    $this->usermodel = new UserModel();
}

public function sanitaze($data) {
    $reg = preg_replace("/\s+/", " ", $data);
    $reg = preg_replace("/^\s*/", "", $reg);
    $data = $reg;
    return $data;
}

public function contactControllers() {
   
    $this->contactsmodel = new ContactModel();
    $resultFetchEmail = $this->usermodel->verifyEmail($this->email);
     $countEmail = count($resultFetchEmail);   
     if($countEmail>0) {
        $this->emptyInputs();
          $this->verifyEmail();
            $insert = $this->contactsmodel->insertContact($this->username, $this->email,$this->usertext);
            } 
      else {
        header("location:/HomeControllers/ContactUs?msg=email non existant");
        exit();			
        }
}

  public function emptyInputs() {
      if(empty($this->username) || empty($this->email)){

        header("location:/HomeControllers/ContactUs?msg=Tous les champs ne sont pas renseignés");
        exit();	 } else{
            return false;
        }
    
  }


  public function verifyEmail() {
      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        header("location:/HomeControllers/ContactUs?msg=email invalid");
           exit();   }
      return false;      
  }
}

