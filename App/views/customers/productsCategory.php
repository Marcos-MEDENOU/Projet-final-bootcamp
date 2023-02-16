
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
<section class="products_home_block">
                <h1 class="shopp-title">PRODUITS DISPONIBLES POUR LIVRAISON</h1>
                <section class="products_filter">
                    <nav >
                        <ul class="prod_cat">
                            <li><a href="/ProductsControllers/ProductsPageControllersAction">Tous les produits</a></li>
                            <li><a href="/ProductsControllers/ProductsPageCategory?category=Carte électronique">Cartes électronique</a></li>
                            <li><a href="/ProductsControllers/ProductsPageCategory?category=Composants électronique">Composants électronique</a></li>
                            <li><a href="/ProductsControllers/ProductsPageCategory?category=Kit électronique">Outils électronicien</a></li>
                            <li><a href="/ProductsControllers/ProductsPageCategory?category=Appareil de mesure">Appareil de mesure</a></li>
                        </ul>
                    </nav>
                </section>
                <div class="products_home_views">
                    <?php
                        if(count($products) > 0){
                            foreach ($products as $key => $value) {
                    ?>
                     <form action="" class="products_home_forms" method="POST" id="product_form">
                        <div class="prod_img">
                         <img src="/media/uploads/<?= $products[$key]["product_image"]; ?>" alt="" >
                            <div class="qty_price_home">
                            <div class="products_price">$<span><?= $products[$key]['product_price']; ?></span></div>
                            </div>
                        </div>
                        <div class="product_name"><?= $products[$key]['product_name']; ?></div>
                        <input type="hidden" name="pid" value="<?= $products[$key]['product_id']; ?>">
                        <input type="hidden" name="p_name" value="<?= $products[$key]['product_name']; ?>">
                        <input type="hidden" name="p_price" value="<?=$products[$key]['product_price']; ?>">
                        <input type="hidden" name="p_image" value="<?= $products[$key]['product_image']; ?>">
                        <label for="p_quantity" class="">Quantité: </label>
                        <input type="number" name="p_qty" class="p_quantity" value=1 min=1>
                        
                        <a href="view_page.php?pid=<?= $products[$key]['product_id']; ?>" class="view_more">Détails</a>
                        <input type="submit" value="Acheter" class="proceed-mney" name="add_to_cart">
                    </form>
                    <?php
                        }
                    }else{
                        echo '<p class="empty">no products added yet!</p>';
                    }
                    ?>
                </div>
            </section>
            <?php
            require "../App/views/components/footer.php"
        ?>
</body>
</html>