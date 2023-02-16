<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\SessionControllers;


use \Core\View;
/**
 * ComponentsControllers controller
 * 
 * PHP version 5.4
 */
class ComponentsControllers {
 
  //ComponentsControllers constructor
  public function __construct(){
    $this->usersmodel=new UserModel();
    $this->comp_control=new SessionControllers();
  }


  public function headerCollectUserInfos(){
    if(isset($_SESSION["NavCustomerId"])){
      $result= $this->usersmodel->searchUserConnect($_SESSION["NavCustomerId"]);
      return $result;
    }
  }

  /***********header_nav_bar_session***********/
  //=>start session()
  //=> getUserInformation
  public function header_nav_bar_session(){
        return $this->comp_control->sessionUpdate();
        // $this->usersmodel->MatchUserNavBar();
  }
  public function disconnect(){
    $this->comp_control->closeSessionAction();
  }
    
}
