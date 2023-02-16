<?php

namespace App\Controllers;

use App\Controllers\ProductsControllers;

use App\Controllers\ComponentsControllers;

use App\Controllers\AdminControllers;

use App\Models\CartModel;

use \Core\View;


/*
 * Home controller
 * 
 * PHP version 5.4
 */
class HomeControllers extends \Core\Controller {
  /***
   * 
   * Show the index page
   * 
   * @return void
   *
   */

   public function __construct(){

     $this->products_selects=new ProductsControllers();

     $this->header_components= new ComponentsControllers();

     $this->comp_control=new SessionControllers();

     $this->cartmodel=new CartModel();

     $this->admincontrol= new AdminControllers();

   }
   
  public function indexAction() {

    $products=$this->products_selects->homeProductsControllers();
    
    $header=$this->header_components->header_nav_bar_session();
    
    $searchUser=$this->header_components-> headerCollectUserInfos();

    $products_home=$products;

    $cid=$header;

    $userConnect= $searchUser;

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    $cart_zone=$this->products_selects->shopCart();

    $getAllUserProducts= $this->cartmodel->getAllUserProducts();

    $cart=$getAllUserProducts;

    require_once("../App/views/components/header-nav-bar.php");

    require_once("../App/views/Home/index.php");

  }

  public function ContactsAction() {

    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    $getAllUserProducts= $this->cartmodel->getAllUserProducts();

    $cart=$getAllUserProducts;

    require_once("../App/views/components/header-nav-bar.php");

    require_once("../App/views/customers/contact_us.php");
  }

  public function disconnect(){

    $this->comp_control->closeSessionAction();
  }
  

  public function loginAction() {
    // echo "Hello from the index action in the Home controller";
    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    require_once("../App/views/components/header-nav-bar.php");

    View::render("customers/login.php");
  }

  public function contactUs(){

    View::render("customers/contact_us.php");
    
  }

  /**
   * Show the add new page
   * 
   * @return void
   */
  public function registerAction() {

    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    require_once("../App/views/components/header-nav-bar.php");
    
    View::render("customers/register.php");
    
  }

  public function profileUpdateAction() {
    
    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;
 

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    // echo "<pre>";

    // print_r($userConnect);

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    // print_r($panner_value);

    $getAllUserProducts= $this->cartmodel->getAllUserProducts();

    $cart=$getAllUserProducts;


    require_once("../App/views/components/header-nav-bar.php");
    
    require_once("../App/views/customers/profileUpdate.php");
  }

  public function passwordChange() {
    
    $header=$this->header_components-> header_nav_bar_session();

    $cid= $header;
 

    $searchUser=$this->header_components-> headerCollectUserInfos();

    $userConnect= $searchUser;

    // print_r($userConnect);

    $updateUserProducts= $this->products_selects->countCart();

    $panner_value= $updateUserProducts;

    // print_r($panner_value);

    $getAllUserProducts= $this->cartmodel->getAllUserProducts();

    $cart=$getAllUserProducts;

    require_once("../App/views/components/header-nav-bar.php");
    
    require_once("../App/views/customers/passChange.php");
  }

  public function adminHomeAction(){

    $fetch_profile= $this->admincontrol->Adminfunction();

    require_once("../App/views/admin/dashboardAdmin.php");
  }

  public function orders(){

    @session_start();

    require_once("../App/views/customers/order.php");
  }

}
