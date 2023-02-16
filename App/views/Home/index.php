
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
</head>
<body>
        <!-- header-hero-zone -->
        <div class="hero-zone">
            <div class="hero-zone-container">
                <div class="opac">
                </div>
            </div>

            <div class="hero-header-content">
                    <h1>
                        <span class="hero-header-content-block1">Electronique </span><span class="hero-header-content-block2">en un clic!</span>
                    </h1>
                    <div class="link_header_hero">
                        <div>
                            <p class="para_hero">ElectroBest vous accompagne dans la conception et la réalisation de vos projets électronique</p>
                        </div>
                        <div>
                            <a class="header_top_btn" href="products">Visiter nos produits high-Tech</a>
                        </div>
                    </div>
                </div>
            
        </div>
        <!-- end header-hero-zone -->



        <main>
            <section class="Category-home-category">

                <h1 class="Category-title">Categorie de produits</h1>

                <div class="Category-box-container">

                    <div class="box">
                        <img src="/media/images/piece.jpg" alt="">
                        <h3>Pieces électronique</h3>
                        <!-- <a href="" class="btn">Boutique pieces électronque</a> -->
                    </div>

                    <div class="box">
                        <img src="/media/images/arduino.jpg" alt="">
                        <h3>Cartes électronique</h3>
                        <!-- <a href="" class="btn">Boutiques cartes électronique</a> -->
                    </div>

                    <div class="box">
                        <img src="/media/images/multimetre.webp" alt="">
                        <h3>Appareils de mesure</h3>
                        <!-- <a href="" class="btn">Boutique appareils de mesure</a> -->
                    </div>
                    <div class="box">
                        <img src="/media/images/pince electronique.png" alt="">
                        <h3>Outils électroniciens</h3>
                        <!-- <a href="" class="btn">Boutique appareils de mesure</a> -->
                    </div>



            

            </section>

            <section class="products_home_block">
                <h1 class="shopp-title">Notre meilleures sélections pour vous</h1>
                <div class="products_home_views">
                    <?php
                        if(count($products_home) > 0){
                           foreach ($products_home as $key => $value) {
                    ?>
                    <form action="" class="products_home_forms" method="POST" id="product_form">
                        <div class="prod_img">
                         <img src="/media/uploads/<?= $products_home[$key]["product_image"]; ?>" alt="" >
                            <div class="qty_price_home">
                            <div class="products_price">$<span><?= $products_home[$key]['product_price']; ?></span></div>
                            </div>
                           
                        </div>
                        <div class="product_name"><?= $products_home[$key]['product_name']; ?></div>
                        <div class=""><?= $products_home[$key]['product_reference']; ?></div>
                        <!-- <div class="details_ours_prod">
                            <svg width="50px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg><br><span>Découvir les autres produits</span>
                        </div> -->
                        
                        <input type="hidden" name="pid" value="<?= $products_home[$key]['product_id']; ?>">
                        <input type="hidden" name="p_name" value="<?= $products_home[$key]['product_name']; ?>">
                        <input type="hidden" name="p_price" value="<?=$products_home[$key]['product_price']; ?>">
                        <input type="hidden" name="p_image" value="<?= $products_home[$key]['product_image']; ?>">
                        <!-- <label for="p_quantity">Quantité: </label> -->
                        <input type="hidden" name="p_qty" class="p_quantity" value=1 min=0>               
                        <a href="view_page.php?pid=<?= $products_home[$key]['product_id']; ?>" class="view_more">Détails</a>
                        <input type="submit" value="AJOUTER AU PANIER" class="proceed-mney" name="add_to_cart">
                        
                        
                    </form>
                    <?php
                        }
                    }else{
                        echo '<p class="empty">no products added yet!</p>';
                    }
                    ?>
                </div>
            </section>

            <!---page temoignage-->
            <section class="temoignage" id="temoignage">
                <div class="titre blanc">
                    <p class="title_temoign">Que Disent Nos Clients</p>
                </div>
                <div class="contenu">
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/profile1.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>J'ai choisi Electrobest pour mon projet de soutenance de fin d'année. Les composants qui m'ont été vendus sont de tres bonne qualité.  Un personnel technique compétant et disponible. Rapport qualité prix excellent..</p>
                            <h3>Elon musk</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/profile2.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>Cliente depuis plus de 5 ans, j'ai été bien servis et j'ai recu également de nombreux conseils. Les prix mis sur les étiquettes des produits sont honnêtes et on peut profiter de remise en ouvrant un compte client. A recommander dans la région !
                            </p>
                            <h3>Merveille WINSAVI</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/profile3.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>Fournisseur en gros de composant électronique.
                                Personnel très sympa. Prix compétitif
                                Dommage qu'il n ouvre pas le dimanche.</p>
                            <h3>Yomi DENZEL</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="imbox">
                            <img src="/media/images/profile4.jpg" alt="">
                        </div>
                        <div class="text">
                            <p>J'ai trouvé ce dont j'ai besoin pour mon projet en électronique. Il s'agissait d'un systeme électronique 
                            qui facilte la surveillance des patients au sein d'un hopital.
                            </p>
                            <h3>MEDENOU Moise</h3>
                        </div>
                    </div>
                </div>
            </section>
   
        </main>

        <script src="../ressources/js/count_up_homepage.js"></script>

        <?php
            require "../App/views/components/footer.php"
        ?>

      
</body>
</html>