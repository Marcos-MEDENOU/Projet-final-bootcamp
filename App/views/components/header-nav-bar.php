<?php
    @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_container">
            <!-- header-top-navigation -->
            <div class="header-top-navigation">
                <!-- shopname-zone -->
                    <div class="shopname_zone">
                        <div class="shopname">
                        <a href="/"><span class="shopname_block1">Electro</span ><span class="shopname_block2">Best</span></a>              
                        </div>
                        <div class="slog">
                            <span>MAGIC COMPONENTS</span>
                        </div>
                    </div>
                    <!-- end shopname zone -->

                    <!-- navigation -->
                    <div class="header-navigation">
                        <nav>
                            <ul>
                                <li><a href="/">Accueil</a> </li>
                                <li><a href="/ProductsControllers/ProductsPageControllersAction">Produits</a></li>
                                <!-- <li><a href="">About Us</a></li> -->
                                <li><a href="/contacts">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="hamb">
                        <svg width="60px" xmlns="http://www.w3.org/2000/svg" fill="#00000" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>

                    <div class="header_nav_right0">
                            <div class="header-navigation">
                                <nav>
                                    <ul>
                                   
                                         <?php
                                            if (!isset($_SESSION["NavCustomerId"])) {
                                                // session_start();
                                                session_destroy();
                                                ?>
                                                 <li><a href="/HomeControllers/register">Inscription</a></li>
                                    <li><a href="/HomeControllers/login">Connexion</a></li>
                                      
                                        <?php
                                             }else{   
 
                                                if(count($userConnect) > 0)
                                            ?>
                                                <div id="user_connect">
                                                    <div class="user_connect_container">
                                                        <div class="user_connect_image">
                                                            <img width="50px" height="50px" style="border-radius:50%"  src="/media/uploads/<?= $userConnect[0]["user_picture"]; ?>" alt="Photo de profil">                                                      
                                                        </div>
                                                        <div class="user_connect_name">
                                                            <span class="hi_user"><span class="name_user"> <?= $userConnect[0]["username"]?></span></span>
                                                        </div>  
                                                    </div>    
                                                <div>
                                                                                                                         
                                             </div>
                                                            
                                             </div>                  
                                              <?php
                                            }
                                            ?>
                                    </ul>
                                </nav>

                                <div class="show" id="user_connect_navbar">
                                    <!-- <nav class="user_connect_navbar"> -->
                                        <ul class="header__profile__name--nav--list">
                                            <li class="header__profile__name--nav--item">
                                                <a class="header__profile__name--nav--link" href="/HomeControllers/profileUpdate">Profile</a>
                                            </li>
                                            <li class="header__profile__name--nav--item">
                                                <a class="header__profile__name--nav--link" href="/HomeControllers/disconnect">Logout</a>
                                            </li>
                                        </ul>
                                                                            
                                </div>
                        </div>
                        
                            <div class="paner_icon" id="toogle_panner">
                                            <!-- <a href="/ProductsControllers/cart">
                                                <svg width="50px" opacity="0.7"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                </svg>  
                                            </a> -->
                                            <svg width="50px" opacity="0.7"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                </svg> 
                                         
                                   <div class="panner_count">
                                       <span class="panner_count_value" id="panner_value">
                                           <?php
                                               if (isset($_SESSION["NavCustomerId"])) {
                                                    echo $panner_value;
                                               }else{
                                                 echo "0";
                                               }
                                           ?>
                                        </span>
                                    </div>                                
                            
                            </div>

                    <div class=show id="openMod">
                            <div id="openModal2" class="modalDialog2">
                        <div>
                        <!-- <a title="Close" class="close" id="close2">X</a> -->
                        <h2>Mon panier</h2>
                        <?php
                            if(isset($cart)){

                                ?>
                                <form action="/RequestHandler/deleteCart" method="post">

                                <div class="product_name"></div>
                                   
                                   
                                    <table class="panner">
                                            <thead>
                                                <th>Nom produit</th>
                                                <th>Image Produit</th>
                                                <th>Prix produit</th>
                                                <th> Quantité</th>
                                                <th>Opérations</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                              
                                                foreach ($cart as $key => $value) {
                                                    # code...
                                                    
                                                ?>

                                                <tr>
                                                    <td> <?= $cart[$key]["product_name"]?></td>
                                                    <td><img width="60px" src="/media/uploads/<?= $cart[$key]["product_image"]; ?>" alt="" ></td>
                                                    <td>$<?= $cart[$key]["product_price"]?></td>
                                                    <td>
                                                    <input type="number" name="p_qty" class="p_quantity" value=<?= $cart[$key]["product_quantity"]?> min=1>
                                                    
                                                    </td>
                                                    <td>
                                                        <button type="submit" value="<?= $cart[$key]["cid"]?>" name="deleteCart">Supprimer</button>
                                                    </td>
                                                   
                                                </tr>
        
                                                <?php

                                                } ?>

                                                    <hr>
                                            </tbody>
                                        </table>
                                </form>
                               

                                <a class="valid_command" href="/HomeControllers/orders">Valider la commande</a>
                                  

                                   
                                <?php
                                
                            }else{
                                echo "votre panier est vide";
                            }
                        ?>

                           
    
                    </div>


                </div>

               
                
                </div>
                
            </div>
            
        </div>
    </div>
    </header>
</body>
</html>