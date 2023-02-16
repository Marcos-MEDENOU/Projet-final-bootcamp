<?php
    // if(!isset($_SESSION["NavAdminId"])){
    //     header("location:/HomeControllers/login");
    // }
?>

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
    <div class="container_dash">
    
        <!-- ========== END OF ASIDE ========== -->

        <main>
            <div class="insights">
                <div class="sales">
                    <div class="middle">
                        <div class="left">
                            <h3>Totaal sales</h3>
                            <h1>$25,024</h1>
                        </div><div class="progress">                
                        </div>
                    </div>
                </div>
                <!-- ========== END OF SALES ========== -->

                <div class="expenses">
                    <div class="middle">
                        <div class="left">
                            <h3>Totaal sales</h3>
                            <h1>$14,124</h1>
                        </div><div class="progress">
                           
                            
                        </div>
                    </div>
                </div>
                <!-- ========== END OF EXPENSES ========== -->

                <div class="income">
                    <div class="middle">
                        <div class="left">
                            <h3>Totaal Income</h3>
                            <h1>$10,624</h1>
                        </div><div class="progress">
                            
                        </div>
                    </div>
                </div>
                <!-- ========== END OF INCOME ========== -->
            </div>
                <!-- ========== END OF INSIGHTS ========== -->

            <div class="recent-orders">

                 
            <div class="right">
              
                <!-- ========== END OF TOP ========== -->
       
            </div>
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>2345</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>  
           
        </main>
        <!-- ========== END OF MAIN ========== -->
       
    </div>
    <script src="index.js"></script>
</body>
</html>