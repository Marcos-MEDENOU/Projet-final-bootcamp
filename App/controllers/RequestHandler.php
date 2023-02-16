<?php

namespace App\Controllers;

use App\Controllers\RegisterControllers;

use App\Controllers\ProductsControllers;

use App\Controllers\ContactsControllers;

use \Core\View;


// class RequestHandler { }
class RequestHandler extends \Core\Controller{ 

//register 

public function validationRegisterAction(){
    if( isset($_POST["email"])) {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $confirm = $_POST["confirm"];
      $contactNo = $_POST["contactNo"];
    }
    $controller = new RegisterControllers ($username, $email, $password, $confirm, $contactNo);
    $controller->verifyControl();
    echo "Inscription réussi";
}

//GET INPUT VALUES AFTER INPUT FORM

public function validationLoginAction() {
      if( $_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $controller = new LoginControllers ( $email, $password);
        $controller->verifyControl();

        echo "Connexion réussi";
    }
  }

  //This function update profile customers

  public function profileCustomerUpdate() {
    if( $_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["profileCustomerUpdate"])) {
      $email = $_POST["email"];
      $username = $_POST["username"];
      $picture=$_FILES["picture"];
      $controller = new ProfileControllers( $email, $username , $picture);
      $controller->updateUserInfos();
      header("location: /HomeControllers/profileUpdateAction");
      // echo "Connexion réussi";
  }
}
  public function profilePassCustomerUpdate() {
    if( $_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["profileCustomerUpdate"])) {
      $email = $_POST["email"];
      $username = $_POST["username"];
      $picture=$_FILES["picture"];
      $controller = new ProfileControllers( $email, $username , $picture);
      $controller->updateUserInfos();
      header("location: /HomeControllers/profileUpdateAction");
      // echo "Connexion réussi";
  }
}

  public function deleteCart(){
    if( $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["deleteCart"])) {
      $cartdelete= new ProductsControllers();
      $cartdelete->cartDelete($_POST["deleteCart"]);
      header("location: /HomeControllers/profileUpdateAction");
    }
  }

  public function contactUs(){
    if( $_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["envoyer"])) {
      //Get all inputs values
      $username=$_POST["user_name"];
      $email=$_POST["user_email"];
      $text=$_POST["user_text"];
      $cartdelete= new ContactsControllers($username,$email,$text);
      $cartdelete->contactControllers();
      header("location:/HomeControllers/Contacts");
    }
  }

}