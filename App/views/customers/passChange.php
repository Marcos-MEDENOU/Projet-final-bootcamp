
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
</head>
<body class="register_form">     
<div class="site-content">
   			<div class="container">
				<div class="main_register_form">                
						<form  action="" method="post" class="forms" style="text-align: center;" enctype="multipart/form-data" id="passChange">
						 <!-- header-top-navigation -->
                         <div class="shop-name-header-form">
                        <?php
                            require "../App/views/components/shop-name.php";
                        ?>
                        </div>
                          
                         <!-- end header-top-navigation -->
                         <div class="user_images">
							<div><img width="200px" height="200px" style="border-radius:50%" src="/media/uploads/<?= $searchUser[0]["user_picture"]; ?>" alt="Photo de profil">
							</div>
							<div class="user_pic">
								<p class="name_users">Nom d'utilisateur: <span class="name_user"><?= $searchUser[0]["username"]; ?></span> </p>
								<!-- <p  class="name_users"></p> -->
							</div>
                           
                         </div>
                        
                        <h2 class="pass_modify">Modifier mot de passe
						<div class="rows Signup"> 		
							<label for="password">Taper l'ancien mot de passe</label>
						<input type="password" id="password"  name="password" placeholder="Ancien mot de passe" required="required" >
						<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
                        <span class="message-alerte">1 minuscule, 1 chiffre et symbole sont requis</span>

						</div>
						<div class="rows Signup">
						<label for="password">Taper le nouveau mot de passe</label>
						<input type='text' id="passwordconf" name="confirm" placeholder="Nouveau mot de passe" required="required"  >	
						<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
                        <span class="message-alerte">Mot de passe non identique</span>
						</div>
						<div class="rows Signup">
						<label for="password">Taper a nouveau mot de passe</label>
						<input type='text' id="passwordconf" name="confirm" placeholder="Confirmation nouveau mot de passe" required="required"  >	
						<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
                        <span class="message-alerte">Mot de passe non identique</span>
						</div>
						<div class="resultt">
							<div class="result">
							<img src="../ressources/svg/error.svg" alt="icone de validation" class="icone-verify">
							<p id="res" class="res"></p>
							</div>
							
						</div>
						<input id="submit" type="submit" name="submit" value="ENREGISTRER"  class="button">
						<a href="/HomeControllers/profileUpdateAction">Modifier informations personnelles</a>
								
						</p>
						</form>
						
				</div>  <!-- main -->

			</div>
			
		</div> <!-- site content -->

	<script src="../ressources/js/form_customers_registration_validation_check.js"></script>
	<script src="../ressources/js/navbar.js"></script>


</body>
</html>