<?php
	 if (!isset($_SESSION['admin_email'])) {
 	
		echo "<script>window.open('login.php','_self')</script>";
	}else{


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title> Insert Product </title>
	
</head>
<body>
	
	<div class="row">  <!-- row Begin -->
		
		<div class="col-lg-12"> <!-- col-lg-12 Begin -->

			<ol class="breadcrumb">  <!-- breadcrumb Begin -->
				
				<li class="active"> <!-- active Begin -->
					
					<i class="fa fa-dashboard"></i> Dashboard / Insert Products
				</li> <!-- active End -->
			</ol> <!-- breadcrumb End -->
		</div> <!-- col-lg-12 End -->

	</div> <!-- row End -->

	<div class="row"><!-- row Begin -->

		<div class="col-lg-12"> <!-- col-lg-12 Begin -->
			
			<div class="panel panel-default"> <!-- panel panel-default Begin -->
				
				<div class="panel-heading"> <!--panel-heading Begin -->
					
					<h3 class="panel-title"> <!--panel-title Begin -->
						 
						 <i class="fa fa-money fa-fw"></i> Insert Product
					</h3> <!--panel-title End -->

				</div> <!--panel-heading End -->

				<div class="panel-body"> <!--panel-body Begin -->
					
					<form method="post" class="form-horizontal " enctype="multipart/form-data"> <!--panel-body Begin -->
						
						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Title: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="text" name="product_title" class="form-control" required="">
									
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->

						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Category: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<select name="product_cat" class="form-control"> <!--product_cat Begin -->
									
									<option> Select a Category Product </option>

									<?php 

									$get_p_cats = "select * from product_categories";
									$run_p_cats = mysqli_query($con,$get_p_cats);

									while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
										
										$p_cat_id = $row_p_cats['p_cat_id'];
										$p_cat_title = $row_p_cats['p_cat_title'];

										echo"

										<option value='$p_cat_id'>$p_cat_title</option>



										";
									}
									?>

								</select> <!--product_cat End -->
								


							</div> <!--col-md-6 End -->

							</div> <!--form group End -->
							<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Image 1: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="file" name="product_img1" class="form-control" required="">
									
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->

						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Image 2: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="file" name="product_img2" class="form-control" required="">
									
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->

						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Image 3: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="file" name="product_img3" class="form-control" required="">
									
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->

						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Price: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="text" name="product_price" class="form-control" required="">
									
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->

						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Keywords: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="text" name="product_keywords" class="form-control" required="">
									
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->

						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label"> Product Description: </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<textarea class="form-control" name="product_desc" cols="19" rows="6"></textarea>
								
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->


						<div class="form-group"> <!--form-group Begin -->

							<label class="col-md-3 control-label">  </label>

							<div class="col-md-6"> <!--col-md-6 Begin -->

								<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
								
								

							</div> <!--col-md-6 End -->
							
						</div> <!--form-group End -->
		

					</form> <!--panel-body End -->

				</div> <!--panel-body End -->
			</div> <!-- panel panel-default End -->

		</div> <!-- col-lg-12 End -->
		
	</div> <!-- row End -->

	
</body>
</html>

<?php

if(isset($_POST['submit'])){

	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_price = $_POST['product_price'];
	$product_keywords = $_POST['product_keywords'];
	$product_desc = $_POST['product_desc'];

	$product_img1 = $_FILES['product_img1']['name'];
	$product_img2 = $_FILES['product_img2']['name'];
	$product_img3 = $_FILES['product_img3']['name'];

	$temp_name1 = $_FILES['product_img1']['tmp_name'];
	$temp_name2 = $_FILES['product_img2']['tmp_name'];
	$temp_name3 = $_FILES['product_img3']['tmp_name'];

	move_uploaded_file($temp_name1, "product_images/$product_img1");
	move_uploaded_file($temp_name2, "product_images/$product_img2");
	move_uploaded_file($temp_name3, "product_images/$product_img3");

	$insert_product = "insert into products (p_cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) 
	values ('$product_cat',NOW(),'$product_title', '$product_img1','$product_img2','$product_img3','$product_price','$product_keywords', '$product_desc')";

	$run_product = mysqli_query($con,$insert_product);

	if($run_product){

		echo "<script>alert('Product has been inserted successfully')</script>";
		echo "<script>window.open('index.php?view_products','_self')</script>";
	}
}



?>

<?php } ?>