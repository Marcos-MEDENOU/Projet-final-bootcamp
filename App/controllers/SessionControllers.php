<?php

namespace App\Controllers;

use \Core\View;
/**
 * Session controller
 * 
 * PHP version 5.4
 */

 /*************************************/
    /*WEB SITE SESSION CONTROLLER*/
 //***********************************//

class SessionControllers  {
  /***
   * Change the session user/Admin
   *
   * @return void
   *
   */
  
 /*************************************/
    /*START SESSION FUNCTION*/
 //***********************************//

  public function startSession() {

    session_start();
  }

  /*************************************/
    /*CLOSE SESSION FUNCTION*/
 //***********************************//
  public function closeSessionAction(){
    session_start();
    session_unset();
    session_destroy();
    session_abort();  
    header("Location:/");
  }

    /*************************************/
    /*FUNCTION CHECK IF USER CONNECT*/
 //***********************************//

    public function checkIfUserConnect(){
        session_start(); // START SESSION
        if(isset($_SESSION["NavCustomerId"]))// if user session active?
        {    
            echo "userconnect";
        }else{
            return false;
        }
    }

     /*************************************/
    /*FUNCTION UPDATE USER CONNECT*/
 //***********************************//

    public function sessionUpdate(){
        session_start();
        if (isset($_SESSION["NavCustomerId"])) {
          
         $user_id =  $_SESSION["NavCustomerId"];

        //  return $user_id;
        }
    }

    
}


