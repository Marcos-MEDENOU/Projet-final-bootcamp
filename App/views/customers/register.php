
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
					
				<form  action="" method="post" class="form" style="text-align: center;" enctype="multipart/form-data" id="register_form">
					<!-- header-top-navigation -->
					<div class="shop-name-header-form">
				<?php
					require "../App/views/components/shop-name.php";
				?>	
			</div>
				<h1>Inscription | Acheteurs</h1>
					
				<div class="rows Signup">
						<input type="text" maxlength="24" name="username" placeholder="Nom d'utilisateur.." id="utilisateur" required="required">
						<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
						<span class="message-alerte">Choisissez un pseudo entre 3 et 24 caractères</span>
				</div>

				<div class="rows Signup">
					<input type="email" name="email" id="email" placeholder="Email.."  required="required">	
					<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
					<span class="message-alerte">Email invalid </span>
				</div>

				<div class="rows Signup"> 		
					<input type="password" id="password"  name="password" placeholder="Mot de passe.." required="required" >
					<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
					<span class="message-alerte">1 minuscule, 1 chiffre et symbole sont requis</span>
				</div>

				<div class="rows Signup">
					<input type='text' id="passwordconf" name="confirm" placeholder="Confirmation mot de passe.." required="required"  >	
					<img src="../ressources/svg/check.svg" alt="icone de validation" class="icone-verif">
					<span class="message-alerte">Mot de passe non identique</span>
				</div>

				<div class="rows Signup">
					<input type="number" name="contactNo" id="numInput" placeholder="Numero de téléphone...ex: 96103161" minlength="10" maxlength="10" required="required" >
					<span class="message-alerte">Numéro de télephone invalid</span>
				</div>

				<div class="resultt">
						<div class="result">
						<img src="../ressources/svg/error.svg" alt="icone de validation" class="icone-verify">
						<p id="res" class="res"></p>
				</div>
						
			</div>
					<input id="submit" type="submit" name="submit" value="Register"  class="button">
					<p style="color: black; margin-top: 6%;">Already Registered?
					<a href="/HomeControllers/login" class="sign">Login Here</a>
					
					</p>
					</form>
					
			</div>  <!-- main -->

		</div>
		
	</div> <!-- site content -->
<script src="../ressources/js/form_customers_registration_validation_check.js"></script>

</body>
</html>