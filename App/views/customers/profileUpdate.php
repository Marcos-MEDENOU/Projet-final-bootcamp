<?php 
// echo "<pre>";
// print_r($searchUser);
 ?>

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
                        
			<form  action="/RequestHandler/profileCustomerUpdate" method="post" class="forms" style="text-align: center;" enctype="multipart/form-data" id="profil_change">
				<!-- header-top-navigation -->
				<div class="shop-name-header-form">
					<?php
						require "../App/views/components/shop-name.php";
					?>
				</div>

				<!-- end header-top-navigation -->
				<div class="user_image">
					<img width="250px" height="250px" style="border-radius:50%" src="/media/uploads/
					<?= $searchUser[0]["user_picture"]; ?>" alt="Photo de profil">
				</div>
				<div class="user_pic">
					<p class="name_users"  >Nom d'utilisateur: <span class="name_user"><?= $searchUser[0]["username"]; ?></span> </p>
					<!-- <p  class="name_users"></p> -->
					<label for="picture">Changer la photo de profil</label>
					<input height="10px" type="file" name="picture" id="picture">
				</div>
		
				<h1>Modifier votre nom d'utilisateur ici</h1>
				<div class="rows Signup">
					<label for="username">Nom d'utilisateur</label>
					<input type="text" maxlength="24" name="username" placeholder="Nom d'utilisateur.." id="utilisateur" required="required" value="<?= $searchUser[0]["username"]; ?>">
					<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
					<span class="message-alerte">Choisissez un pseudo entre 3 et 24 caractères</span>
				</div>
				<div class="rows Signup">
					<label for="email">Addresse électronique</label>
					<input type="email" name="email" id="email" placeholder="Email.."  required="required" value="<?= $searchUser[0]["useremail"]; ?>">	
					<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
					<span class="message-alerte">Email invalid </span>
				</div>
				<div class="">
					<span class="response_update_profile" >
						
						<?php
							if(isset($_GET["msg"])){
								echo($_GET["msg"]); 
							}
								?>
					</span>	
				</div>
			<input id="submit" type="submit" name="profileCustomerUpdate" value="ENREGISTRER"  class="button">
			<!-- <a href="/HomeControllers/passwordChange">Changer mot de passe</a> -->
					
			</p>
			</form>
						
				</div>  <!-- main -->

			</div>
			
		</div> <!-- site content -->

	<script src="../ressources/js/form_customers_registration_validation_check.js"></script>
	<script src="../ressources/js/navbar.js"></script>


</body>
</html>