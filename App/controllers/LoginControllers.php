<?php

namespace App\Controllers;
use App\Models\UserModel;


class LoginControllers  {
  /**
   * $usermodel
   */
  public $usermodel;
  public $email;
  public $password;

  public function __construct($email, $password) {
    $this->email = $email;
    $this->password = $password;
    $this->usermodel = new UserModel();
  }

  public function verifyControl() {
      $this->usermodel = new UserModel();
      $resultFetchEmail = $this->usermodel->verifyEmailConnexion($this->email);
        if($resultFetchEmail) {
          $pwd = password_verify($this->password, $resultFetchEmail[0]["password"]);
            if($pwd === true && $resultFetchEmail[0]["user_role"] === "admin") {
              echo "Connexion admin réussi";
              session_start();
              $_SESSION["NavAdminId"]=$resultFetchEmail[0]["cid"];
              exit();
              } elseif($pwd === true && $resultFetchEmail[0]["user_role"] !== "admin") {
                $this->usermodell = new UserModel();
                $re=$this->usermodell->verifyEmailConn($this->email);  
                echo "Connexion client réussi";
                  session_start();
                  $_SESSION["NavCustomerId"]=$re["cid"];
                  exit();
                }else {
                  echo "Mot de passe incorrect";
                  exit();
                }        
      }else {
        echo "Address non existant";
        exit();
      }
  }


  public function emptyInputs() {
      if(empty($this->email) || empty($this->password)){
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