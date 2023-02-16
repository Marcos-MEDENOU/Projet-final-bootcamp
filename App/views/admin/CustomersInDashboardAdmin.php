<?php
    if(!isset($_SESSION["NavAdminId"])){
        header("location:/HomeControllers/login");
    }
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

<?php  require_once("../App/views/admin/headerAdmin.php"); ?>

    <div class="container">
        <main>  
            <div class="recent-orders">

                <h2 class="Customers">Customers</h2>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom d'utilisateur</th>
                            <th>Contact</th>
                            <th><Address> électronique</Address></th>
                            <th>Status</th>                       
                            <th>photo profil</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php                  
                        if(count($all_customers) > 0){
                            foreach ($all_customers as $key => $value) {
                    ?>
                        <tr>
                      
                            <td><?= $all_customers[$key]["cid"];?></td>
                            <td><?= $all_customers[$key]["username"];?></td>
                            <td><?= $all_customers[$key]["contactNumber"];?></td>
                            <td><?= $all_customers[$key]["useremail"];?></td>
                            <td class=""><?= $all_customers[$key]["user_role"];?></td>
                            <td class=""><img class="user_picture" src="/media/uploads/<?= $all_customers[$key]["user_picture"];?>" alt="" ></td>
                        </tr>
                        <?php
                        }
                    }else{
                        echo '<p class="empty">Aucun client pour le moment</p>';
                    }
                    ?>
                    </tbody>
                </table>
                <a href="/AdminControllers/allCustomersDash">Show All</a>
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