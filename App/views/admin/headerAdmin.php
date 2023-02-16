<?php
   
?>
<header class="header">

<div class="flex">

   <a href="" class=""><span class="hero-admin-part1">Electro</span> <span class="hero-admin-part2">Best</span></a>

   <nav class="navbar">
      <!-- <a href="">Tableau de bord</a> -->
      <a href="/AdminControllers/getAllProducts">Produits</a>
      <a href="/AdminControllers/addProducts">Ajouter Produits</a>
      <!-- <a href="">Commandes</a> -->
      <a href="/AdminControllers/getAllCustomers">Clients</a>
   </nav>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="user-btn" class="fas fa-user"></div>
   </div>

   <div class="">
    <?php
        if($fetch_profiles)
    ?>
      <img src="/media/uploads/<?= $fetch_profiles['user_picture']; ?>" alt="">
      <p><?= $fetch_profiles['username']; ?></p>
      <a href="/HomeControllers/disconnect" class="delete-btn">Deconnexion</a>
      <div class="flex-btn">
            <a href="/" class="option-btn">Visualiser</a>
        </div>
    </div>

  

</div>

</header>
