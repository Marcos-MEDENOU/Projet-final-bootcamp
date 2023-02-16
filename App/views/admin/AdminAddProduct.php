
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
<body >    
<?php  require_once("../App/views/admin/headerAdmin.php"); ?>

<div class="">
   			<div class="product_add">
				<div class="main_register_form"> 
                        
						<form  action="/HomeControllers/SendAction" method="post" style="text-align: center;" enctype="multipart/form-data" id="add_product_admin">
						 <!-- header-top-navigation -->
                         <div class="shop-name-header-form">
                        <?php
                            require "../App/views/components/shop-name.php";
                        ?>
                        </div>
                          
                         <!-- end header-top-navigation -->
                        <!-- <label for="chk" aria-hidden="true">Customer Login</label> -->
						<h1>Ajout de produitts
						</h1>
						<div class="rows Signup">
						<input type="text" maxlength="24" name="product_reference" placeholder="Reference du produit.." id="product_reference" required="required">
						</div>
                        <div class="rows Signup">
						<input type="text" maxlength="24" name="product_category" placeholder="Categorie du produit.." id="product_category" required="required">
						</div>
						<div class="rows Signup">
						<input type="text" maxlength="24" name="product_name" placeholder="Nom du produit.." id="product_name" required="required">
						</div>
						<div class="rows Signup">
                        <textarea name="description_product" placeholder="Description de produit.." id="description_product" cols="30" rows="10"></textarea>
						</div>
						<div class="rows Signup">
						<input type="number"  maxlength="24" name="product_price" placeholder="Prix du produit.." id="product_price" required="required">
						</div>
                        <!-- <div class="rows Signup">
                        <input type="file" name="product_file[]" id="product-file" multiple>
						</div> -->
						<div class="rows Signup">
                        <input type="file" name="product_file" id="product_file">
						</div>
					
						<input id="submit" type="submit" name="submit" value="Ajouter le produit"  class="button">					

						</form>
						
				</div>  <!-- main -->

			</div>
			
		</div> <!-- site content -->
</body>
</html>

<?php

// if(isset($_POST["submit"])){

	

//     // Configure upload directory and allowed file types
	
// 	$upload_dir ='media\uploads'.DIRECTORY_SEPARATOR;
// 	$allowed_types = array('jpg', 'png', 'jpeg', 'gif');
	
// 	// Define maxsize for files i.e 2MB
// 	$maxsize = 2 * 1024 * 1024;

// 	// Checks if user sent an empty form
// 	if(!empty(array_filter($_FILES['product_file']['name']))) {

// 		// Loop through each file in files[] array
// 		foreach ($_FILES['product_file']['tmp_name'] as $key => $value) {
			
// 			$file_tmpname = $_FILES['product_file']['tmp_name'][$key];
// 			$file_name = $_FILES['product_file']['name'][$key];
// 			$file_size = $_FILES['product_file']['size'][$key];
// 			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
// 			// Set upload file path
// 			$filepath = $upload_dir.$file_name;

// 			// Check file type is allowed or not
// 			if(in_array(strtolower($file_ext), $allowed_types)) {

// 				// Verify file size - 2MB max
// 				if ($file_size > $maxsize)		
// 					echo "Error: File size is larger than the allowed limit 2MB.";

// 				// If file with name already exist then append time in
// 				// front of name of the file to avoid overwriting of file
// 				if(file_exists($filepath)) {
// 					$name_used = time().$file_name;
// 					$filepath = $upload_dir.$name_used;
					
// 					if( move_uploaded_file($file_tmpname, $filepath)) {
						
// 						// echo "{$file_name} successfully uploaded <br />";
// 						// myAlert("$file_name Successfully uploaded");
// 						$file_name = $name_used;
// 						array_push($imgArr, $file_name);
// 					//	header("refresh:1; url= addshopimage.html");
// 					}
// 					else {
// 						myAlert("Error uploading {$file_name}");
// 						header("refresh:1; url= addProduct.php");	
// 						exit();				
// 						//echo "Error uploading {$file_name} <br />";
// 					}
// 				}
// 				else {
				
// 					if( move_uploaded_file($file_tmpname, $filepath)) {
// 						// myAlert("$file_name Successfully uploaded");
// 						array_push($imgArr, $file_name);
// 					//	header("refresh:1; url= addshopimage.html");
// 					}
// 					else {					
// 						myAlert("Error uploading {$file_name}");
// 						header("refresh:1; url= addProduct.php");	
// 						exit();				
// 						//echo "Error uploading {$file_name} <br />";
// 					}
// 				}
// 			}
// 			else {
				
// 				// If file extension not valid
// 			//	echo "Error uploading {$file_name} ";
// 				myAlert("{$file_ext} file type is not allowed");
// 				header("refresh:1; url= addProduct.php");
// 				exit();
// 				// echo "({$file_ext} file type is not allowed)<br / >";
// 			}
// 		}
// 	}
// 	else {
		
// 		// If no files selected
// 		myAlert("No files selected");
// 		header("refresh:1; url= addProduct.php");
// 		exit();
// 		// echo "No files selected.";
// 	}
	
// //

// }


?>




<?php

	function myAlert($msg){
		echo "<script>alert('$msg');</script>";
	}
	// if(isset($_POST['submit'])){
	// if(!isset($imgArr[1])){
	// 	$imgArr[1] = "";
	// }	
	// if(!isset($imgArr[2])){
	// 	$imgArr[2] = "";
	// }
	// $connn=new Connexions();
	// $conn=$connn->connect();
	// $sql = "INSERT INTO electrobest_project.products(product_reference,product_name, product_category,product_price, product_description , product_image) 
	// 		VALUES(:s,:n,:c,:p,:info,:images)";
	// $stmt = $conn->prepare($sql);
		// try {
		// 	//code...
		// 	print_r  ($imgArr);

		// 	foreach ($imgArr as $key => $value) {
		// 		# code...
		// 		ECHO $value ."<br>";			
		// 	}
		// 	foreach ($imgArr as $key => $value) {
		// 		# code...
		// 		// ECHO $value;
		// 		$sql2="INSERT INTO electrobest_project.pictures(picture_image)
		// 				VALUES(:v)";
		// 		$stmt2=$conn->prepare($sql2);
		
		// 		$stmt2->execute([':v'=>$value]);
		// 	}
			
		// } catch (PDOException $e) {
		// 	//throw $th;
		// 	$e->getMessage();
		// }
	
	// print_r( $imgArr);
// 	try{	

// 		echo "<pre>";
//      	$stmt->execute(
// 		[
// 			':s' =>$_POST['product_reference'],
// 			':n' => $_POST['product_name'],
// 			':c' => $_POST['product_category'],
// 			':p' => $_POST['product_price'],
// 			// ':i1' => $imgArr[0],
// 			// ':i2' => $imgArr[1],
// 			// ':i3' => $imgArr[2],
// 			// ':i4' => $imgArr[3],
// 			':info' => $_POST['description_product'],
// 			':images' => $_FILES['product_file']['name']
// 		]
// 	);
// 	myAlert("Product Added Successfully");
// 	// header("refresh:1; url= shopDash.php");
//     exit();
// }catch(PDOException $e){
// 	echo $e->getMessage();
// 	myAlert("Some Internal Error Occured");
// 	// header("refresh:1; url= addProduct.php");
// }

?>
