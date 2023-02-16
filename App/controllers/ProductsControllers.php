<?php

namespace App\Controllers;

use App\Models\ProductsModel;

use App\Models\UserModel;

use App\Models\CartModel;

use App\Controllers\ComponentsControllers;

class ProductsControllers extends \Core\Controller {
/**
 * PRODUCTS_CONTROLLERS class
 */
    public $productsmodel;
    public $category;
    public $cid;
    public  $pid;

    public function __construct(){
        //Model instanciation in constructor
        $this->productsmodel=new ProductsModel();
        $this->usersmodel=new UserModel();
        $this->header_components= new ComponentsControllers();
        $this->cartmodel=new CartModel();
    }

    public function homeProductsControllers(){
        $result= $this->productsmodel->insertProductsHomePage();
        return $result;
    }

    public function ProductsPageControllersAction(){

        $all_products= $this->productsmodel->insertProductsPage(); 

        $header=$this->header_components->header_nav_bar_session();

        $searchUser=$this->header_components-> headerCollectUserInfos();

        $cid= $header;

        $products=$all_products;


        $userConnect= $searchUser;

        $updateUserProducts= $this->countCart();

        $panner_value= $updateUserProducts;

        $getAllUserProducts= $this->cartmodel->getAllUserProducts();

        $cart=$getAllUserProducts;

        require_once("../App/views/components/header-nav-bar.php");

        require_once("../App/views/customers/productsPage.php");
    }

    public function ProductsPageCategoryAction(){
        
        $productByCategory= $this->productsmodel->ProductsCategory();

        $products=$productByCategory;

        $header=$this->header_components->header_nav_bar_session();

        $cid= $header;

        $searchUser=$this->header_components-> headerCollectUserInfos();

        $userConnect= $searchUser;

        $updateUserProducts= $this->countCart();

        $panner_value= $updateUserProducts;

        $cart_zone=$this->shopCart();

        $getAllUserProducts= $this->cartmodel->getAllUserProducts();

        $cart=$getAllUserProducts;

        require_once("../App/views/components/header-nav-bar.php");

        require_once("../App/views/customers/productsCategory.php");
    }

    public function shopCart(){

        if(isset($_SESSION["NavCustomerId"])){   

            $results= $this->cartmodel->countUserCart($_SESSION["NavCustomerId"]);

                return $results;
            }
    }

    
    public function updateUserProducts(){

        session_start(); // start session before function work 

        if(isset($_SESSION["NavCustomerId"])){//Check if user add to panner

            $SearchIfUserAddCart= $this->cartmodel->SearchIfUserAddCart();
            //verify if user add products in carts 

            if(count($SearchIfUserAddCart)>0){

                //select all products user add to our carts
                $pannerProductNameDB= $this->cartmodel->pannerProductNameDB();

                $array=[]; //this array that contains all products of customer

                foreach ($pannerProductNameDB as $key => $value) {
                    # stock product price in one array
                    array_push($array, $value[0]);
                }
                
                //check if new product user select is present in array
                if(in_array($_POST['p_name'] , $array)){
                    // update user cart if products exists
                    //INFORMATION: Before command validation of customers, the products are selected can modified all time
                    $update= $this->cartmodel->updateUserCart();
                }else {
                    //else, add products in your carts
                    $result= $this->cartmodel->insertCarts();
                }

            }else{
                $result= $this->cartmodel->insertCarts();
            }

        }else{
            //user have not connected 
            echo "déconnecté";  
        }
        
        $panner_update=$this->countCart();
        echo $panner_update;
    }

    

    public function countCart(){

        if(isset($_SESSION["NavCustomerId"])){   

            $results= $this->cartmodel->countUserCart($_SESSION["NavCustomerId"]);

            $panner=[];

            foreach ($results as $key => $value) {
            
                array_push($panner, $results[$key]["product_quantity"]);  
            }
            return  array_sum($panner);
            }
    }
    
    public function cart(){

       
        $header=$this->header_components->header_nav_bar_session();

        $cid= $header;

        $searchUser=$this->header_components-> headerCollectUserInfos();

        $userConnect= $searchUser;

        $updateUserProducts= $this->countCart();

        $panner_value= $updateUserProducts;

        $cart_zone=$this->shopCart();

        $getAllUserProducts= $this->cartmodel->getAllUserProducts();

        $cart=$getAllUserProducts;

        require_once("../App/views/components/header-nav-bar.php");
        
        require_once("../App/views/customers/cart.php");
    }

    public function cartDelete($pid){

        $this->pid=$pid;

        $delete_cart=  $this->cartmodel->deleteCart($pid);

    }
}

