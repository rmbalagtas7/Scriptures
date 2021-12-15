<?php 
		session_start();
		include("includes/db.php");
		include("functions/functions.php");
	
?>

<?php 

if(isset($_GET['pro_id'])){

	$product_id = $_GET['pro_id'];

	$get_product = "select * from products where product_id='$product_id'";

	$run_product = mysqli_query($con,$get_product);

	$row_product = mysqli_fetch_array($run_product);

	$p_cat_id = $row_product['p_cat_id'];

	$product_title = $row_product['product_id'];

	$product_price = $row_product['product_price'];

	$product_desc = $row_product['product_desc'];

	$product_img1 = $row_product['product_img1'];

	$product_img2 = $row_product['product_img2'];

	$product_img3 = $row_product['product_img3'];

	$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

	$run_p_cat = mysqli_query($con,$get_p_cat);

	$row_p_cat = mysqli_fetch_array($run_p_cat);

	$p_cat_title = $row_p_cat['p_cat_title'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel = "icon" href = 
"https://lh3.googleusercontent.com/proxy/TSksV0eHx3V16b2i1zoTH4egb8QHNjHg6TP-hi7It33Diqyal2QWJc576SXccATSKFI6RcLcg5B7Nx9cvhAkBUqKZ0WdBmpNZLZqiFYXxN3ALZ12PfI62KA" 
        type = "image/x-icon">
	<title>Scriptures | Shop</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	
</head>
<body>
<style> 
body{
	
}
.navbar-brand{
    float: left;
    padding: 10px 15px;
    font-size: 18px;
    line-height: 20px;
    height: 70px;
}
.btn-primary{
    color: rgb(255,255, 255);
    background: rgb(00,00, 00);
    border-color: rgb(00,00, 00);
}
#search .navbar-form{
    float: right;
}
#search{
    clear: both;
    border-top: solid 1px #9adacd;
    text-align: right;
}
#search .navbar-form .input-group{
    display: table;
}
#search .navbar-form .input-group .form-control{
    width: 100%;
}

#slider{
    margin-bottom: 40px;
}
#advantages{
    text-align: center;
}
.box{
    background: #ffffff;
    margin: 0 0 30px;
    border: solid 1px #e6e6e6;
    box-sizing: border-box;
    padding: 20px;
    box-shadow: 0px 2px 5px rgba(0,0,0, .3);
}

#advantages .box .icon{
	position: absolute;
    font-size: 120px;
    width: 100%;
    text-align: center;
    top: auto;
    left: 0px;
    height: 100%;
    float: left;
    color: #dadada;
    box-sizing: border-box;
    z-index: 1;

}
#advantages .box h3{
    position: relative;
    margin: 0 0 20px;
    font-weight: 300;
    text-transform: uppercase;
    z-index: 2;
}
#advantages .box h3 a{
    color: #4fbfaB;
}
#advantages .box h3 a:hover{
    text-decoration: none;
}
#advantages .box p{
    position: relative;
    z-index: 2;
    color: #555555;
}
#hot h2{
    font-size: 36px;
    font-weight: 400;
    color: #4fbfa8;
    text-align: center;
	text-transform:uppercase;
}
#content{
    padding-left: 25px;
}
.single{
    width: 290px;
}
@media(max-width: 760px){
    .single{
        width: 60%;
        margin: 0 auto;
    }
}
#content .product{
    background: #ffffff;
    border: solid 1px #e6e6e6;
    margin-bottom: 30px;
    box-sizing: border-box;
}
#content .product .text{
	padding: 10px 10px 0px;
}
#content .product .text p.price{
    font-size: 18px;
    text-align: center;
    font-weight: 400;
}
#content .product .text .button{
    text-align: center;
    clear: both;
}
#content .product .text .button .btn{
    margin-bottom: 10px;
}
#content .product .text h3{
    text-align: center;
    font-size: 20px;
}
#content .product .text h3 a{
    color: rgb(85, 85,85)
}


</style> <!-- STYLE END -->

	<div id ="top">	<!-- Top Begin -->

		<div class="container"><!-- Container Begin -->
			
			<div class ="col-md-6 offer"> <!-- col-md-6 offer Begin -->

				<a href ="#" class = "btn btn-success btn-sm">
					


					<?php 
						if (!isset($_SESSION['customer_email'])) {
							
							echo "Welcome: Guest";
						}else{

							echo"Welcome: " .$_SESSION['customer_email'] ."";
						}

					 ?>
				</a>
				<a href="checkout.php">  <?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?>.00</a>

			</div><!-- col-md-6 offer End -->

			<div class = "col-md-6"> <!-- col-md-6 Begin-->

				<ul class="menu"> <!-- Menu Begin-->

					<li>
						<a href= "customer_register.php">Register</a>
					</li>
					<li>
						<?php 

							if (!isset($_SESSION['customer_email'])) {
								
								echo "<a href= 'checkout.php'>My Account</a>";
							}else{
								echo "<a href= 'customer/my_account.php?my_orders'>My Account</a>";
							}

						?>
					</li>
					<li>
						<a href= "cart.php">Go to Cart</a>
					</li>
					<li>
						<a href= "checkout.php">
							
							<?php  

							if (!isset($_SESSION['customer_email'])) {
							
								echo "<a href='checkout.php'> Login </a>";
							}else{

								echo"<a href='logout.php'> Logout </a>";
							}

							?>
						</a>
					</li>

				</ul> <!-- Menu End-->

			</div> <!-- col-md-6 End -->

		</div><!-- End Container -->

	</div><!-- End Begin -->

	<div id = "navbar" class="navbar navbar-default"><!-- Navbar Begin -->

		<div class="container"><!-- Container Begin -->
			<div class="navbar-header"><!-- Navbar Header Begin -->
				<a href = "index.php" class="navbar-brand home">

					<img src="images/scriplogo.png" alt="Scriptures" class="hidden-xs">
					<img src="images/logo-mobile.jpg" alt="Scriptures" class="visible-xs">

</a>

		
		<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

			<span class ="sr-only">Toggle Navigation</span>

			<i class = "fa fa-align-justify"></i>

		</button>

		<button class="navbar-toggle" data-toggle="collapse" data-target="#search">

			<span class ="sr-only">Toggle Search</span>

			<i class = "fa fa-search"></i>

		</button>

		</div><!-- Navbar Header End -->

		<div class="navbar-collapse collapse" id="navigation"> <!-- Navbar Collapse Begin -->

			<div class="padding-nav"><!-- Padding Nav Begin -->

				<ul class="nav navbar-nav left"> <!-- nav navbar-nav left Begin -->

					<li >
						<a href = "index.php">Home</a>
					</li>
					<li class="active">
						<a href = "shop.php">Shop</a>
					</li>
					<li>
						<?php 
							if (!isset($_SESSION['customer_email'])) {
								
								echo "<a href='checkout.php'>My Account</a>";
							}else{

								echo "<a href='customer/my_account.php'>My Account</a>";
							}

						 ?>
					</li>
					<li>
						<a href = "cart.php">Shopping Cart</a>
					</li>
					<li>
						<a href = "contact.php">Contact Us</a>
					</li>

				</ul> <!-- nav navbar-nav left End -->

			</div><!-- Padding Nav End -->

			<a href ="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin -->

				<i class="fa fa-shopping-cart"></i>
				<span>  <?php items(); ?> Items In Your Cart</span>

			</a> <!-- btn navbar-btn btn-primary right End -->

			<div class = "navbar-collapse collapse right"> <!-- navbar-collapse collapse right Begin -->

				<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!-- btn btn-primary navbar-btn Begin -->

					<span class ="sr-only">Toggle Search</span>

					<i class= "fa fa-search"></i>

				</button> <!-- btn btn-primary navbar-btn End -->
 
			</div><!-- navbar-collapse collapse right End -->

			<div class="collapse clearfix" id= "search"> <!-- collapse clearfix Begin -->

				<form method="get" action="results.php" class="navbar-form"> <!-- Form Begin -->

					<div class="input-group"><!-- input-group Begin -->

						<input type="text" class="form-control" placeholder="Search" name="user_query" required>
						
						<span class="input-group-btn"> <!-- Span Begin -->

						<button type="submit" name="search" value="Search" class="btn btn-primary"> <!-- tn btn-primary Begin -->
							<i class="fa fa-search"></i>
						</button> <!-- tn btn-primary End -->

						</span><!-- Span End -->

					</div><!-- input-group End -->

				</form><!-- Form End -->

			</div> <!-- collapse clearfix End -->

		</div><!-- Navbar Collapse End -->

		</div><!-- Container End -->
		

	</div><!-- End Navbar -->

	<div id="content"> <!-- Content Begin -->
		<div class = "container"> <!-- container Begin -->
			<div class = "col-md-12"> <!-- col-md-12 Begin -->

				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>Shop</li>
				</ul>
			</div><!-- col-md-12 End -->

			<div class="col-md-3"> <!-- col-md-3 Begin -->

		<?php 
	
			include("includes/sidebar.php");
	
		?>

				
			</div> <!-- col-md-3 End -->

			<div class="col-md-9">  <!-- col-md-9 Begin -->

				<?php

					if(!isset($_GET['p_cat'])){
					echo "
					<div class='box'>  <!-- box Begin -->
						<h1>Shop</h1>
						<p>
							One of the best ways to write a successful college essay for your college application is by learning from real college essay examples that worked.
						</p>
					</div> <!-- box End -->

					";

					}
				?>


				<div class="row"> <!-- row Begin -->


				<?php

					if(!isset($_GET['p_cat'])){

						$per_page=6;

						if(isset($_GET['page'])){

							$page = $_GET['page'];

							}else{

								$page = 1;
							}
							
							$start_from = ($page-1) * $per_page;

							$get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

							$run_products = mysqli_query($con,$get_products);

							while($row_products=mysqli_fetch_array($run_products)){

								$pro_id = $row_products['product_id'];

								$pro_title = $row_products['product_title'];

								$pro_price = $row_products['product_price'];

								$pro_img1= $row_products['product_img1'];

								echo"

									<div class='col-md-4 col-sm-6 center-responsive'> 

									<div class='product'>

									<a href='datails.php?pro_id=$pro_id'>

										<img class='img-responsive' src ='admin_area/product_images/$pro_img1'>

										</a>


									<div class='text'>

										<h3>

										<a href='datails.php?pro_id=$pro_id'>

									
										$pro_title

									</a>


										</h3>

										<p class='price'>

											₱ $pro_price.00

										</p>

										<p class='buttons'>

											<a class ='btn btn-default' href='datails.php?pro_id=$pro_id'>

									
											View Details

											</a>


											<a class ='btn btn-primary' href='datails.php?pro_id=$pro_id'>

									
												<i class='fa fa-shopping-cart'></i> Add to Cart

											</a>


										</p>
									</div>

										</div>

									</div>
								";

							}

				?>
				
																			
				</div> <!-- row End -->
				<center>
					<ul class="pagination"> <!-- pagination Begin -->
						
					<?php 

						$query = "select * from products";

						$result = mysqli_query($con,$query);

						$total_records = mysqli_num_rows($result);

						$total_pages = ceil($total_records / $per_page);

						echo"
							<li>

								<a href='shop.php?page=1'>".'First Page'."</a>
							</li>

						";

						for($i=1; $i<$total_pages; $i++){

							echo"
							<li>

								<a href='shop.php?page=".$i."'>".$i."</a>
							</li>

						";

						}
						echo"
							<li>

								<a href='shop.php?page=$total_pages'>".'Last Page'."</a>
							</li>

						";

					}
					?>
					</ul> <!-- pagination End -->
				</center>

					<?php getpcatpro(); ?>

				</div><!-- row End -->
			</div><!-- col-md-9 End -->

		</div> <!-- container End -->
	</div><!-- Content End -->

	<?php 
	
		include("includes/footer.php");
	
	?>

	<script src = "js/jquery-331.min.js"></script>
	<script src = "js/bootstrap-337.min.js"></script> 

</body>
</html>