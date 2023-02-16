<?php
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
    <style>
        
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- ========== STYLESHEET ========== -->
     <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
</head>
<body>
    <div class="">     
        <!-- ========== END OF ASIDE ========== -->
        <main >

            <div class="recent-orders">
                <h2 class="prod_h2">Produits récemment ajoutés</h2>
                <table>
                    <thead>
                        <tr>
                            <th>id_produit</th>
                            <th>Reference</th>
                            <th>Nom produit</th>
                            
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Image</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php                  
                        if(count($all_products) > 0){
                            foreach ($all_products as $key => $value) {
                    ?>
                        <tr class="tr_adminproducts">
                      
                            <td><?= $all_products[$key]["product_id"];?></td>
                            <td><?= $all_products[$key]["product_reference"];?></td>
                            <td><?= $all_products[$key]["product_name"];?></td>
                            <td><?= $all_products[$key]["product_category"];?></td>
                            <td class=""><?= $all_products[$key]["product_price"].'$';?></td>
                            <td class=""><img class="user_picture" src="/media/uploads/<?= $all_products[$key]["product_image"];?>" alt="" ></td>
                           
                        </tr>
                        <?php
                        }
                    }else{
                        echo '<p class="empty">Aucun client pour le moment</p>';
                    }
                    ?>
                    </tbody>
                </table>

                <a href="/AdminControllers/allProductsDash">voir plus</a>
                <a href="/AdminControllers/addProducts">Ajouter un produit</a>
            </div>  
           
        </main>
        <!-- ========== END OF MAIN ========== -->
       
    </div>
    <script src="index.js"></script>
</body>
</html>




        </section>
    </div>
</body>
</html>