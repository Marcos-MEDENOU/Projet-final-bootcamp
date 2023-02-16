<?php

namespace App\Controllers;

use App\Controllers\ProductsControllers;

use App\Controllers\ComponentsControllers;

use App\Models\CartModel;

use App\Models\UserModel;


use \Core\View;
/*
 * Home controller
 * 
 * PHP version 5.4
 */
class AdminControllers extends \Core\Controller {
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

     $this->usermodel=new UserModel();

   }





   /***************function select all customers in dashboard limit 8**********/

   public function getAllCustomers(){

    $profiles=$this->usermodel->selectAdmin();

    $fetch_profiles= $profiles;

    $clients= $this->usermodel->selectAllCustomers();

    $all_customers= $clients;

    require_once("../App/views/admin/headerAdmin.php");
 
    require_once("../App/views/admin/CustomersInDashboardAdmin.php");

   }

   /***************end function select all customers in dashboard**********/


  /***********select all products in dashboard limit 8***/
   
   public function getAllProducts(){

    $profiles=$this->usermodel->selectAdmin();

    $fetch_profiles= $profiles;

    $clients= $this->usermodel->selectProducts();

    $all_products= $clients;

    
    require_once("../App/views/admin/headerAdmin.php");

    require_once("../App/views/admin/ProductsDashboard.php");
   }

  /***********end select all products in dashboard***/



   public function allProductsDash(){

    $profiles=$this->usermodel->selectAdmin();

    $fetch_profiles= $profiles;

    $clients= $this->usermodel->selectProductsDash();

    $all_products= $clients;

    
    require_once("../App/views/admin/headerAdmin.php");

    require_once("../App/views/admin/ProductsDashboard.php");
    
   }

   //get all customers to dashboard admin

   public function allCustomersDash(){

    $profiles=$this->usermodel->selectAdmin();

    $fetch_profiles= $profiles;

    $clients= $this->usermodel->selectallCustomers();

    $all_customers= $clients;

    require_once("../App/views/admin/headerAdmin.php");
 
    require_once("../App/views/admin/CustomersInDashboardAdmin.php");
    
   }

      //products add function  to dashboard admin


   public function addProducts(){
    $profiles=$this->usermodel->selectAdmin();

    $fetch_profiles= $profiles;
    require_once("../App/views/admin/AdminAddProduct.php");
   }
  

}
