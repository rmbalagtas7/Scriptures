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

	$product_title = $row_product['product_title'];

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
	<title>Scriptures | Product Details</title>
	<link rel="stylesheet" href="design.css">
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
    border-color: rgb(00,00, 00)
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
#content #productMain{
    margin-bottom: 30px;

}
#content #productMain .price{
    font-size: 30px;
    font-weight: 300;
    text-align: center;
    margin-top: 30px;

}
#content #mainImage{
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.7);
}
#content #thumbs a{
    display: block;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.5);
    border: 2px solid transparent;
}
#content .headline{
    height: 255px;
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
				<a href="checkout.php">  <?php items(); ?> Items In Your Cart | Total Price: ₱300</a>

			</div><!-- col-md-6 offer End -->

			<div class = "col-md-6"> <!-- col-md-6 Begin-->

				<ul class="menu"> <!-- Menu Begin-->

					<li>
						<a href= "customer_register.php">Register</a>
					</li>
					<li>
						<a href= "customer/my_account.php">My Account</a>
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
				<span> <?php items(); ?> Items In Your Cart</span>

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

					<li> 
						<a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
					</li>
					<li>
						<?php echo $product_title; ?>
					</li>
				</ul>
			</div><!-- col-md-12 End -->

			<div class="col-md-3"> <!-- col-md-3 Begin -->

		<?php 
	
			include("includes/sidebar.php");
	
		?>

				
			</div> <!-- col-md-3 End -->

			<div class="col-md-9"> <!-- col-md-9 Begin -->
				<div id="productMain" class="row">  <!-- row Begin -->
					<div class="col-sm-6"> <!-- col-sm-6 Begin -->
						<div id="mainImage"> <!-- mainImage Begin -->
							<div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide Begin -->
								<ol class="carousel-indicators"> <!-- carousel-indicators Begin -->
									<li  data-targer="#myCarousel" data-slide-to="0" class ="active"></li>
									<li data-targer="#myCarousel" data-slide-to="1"></li>
									<li data-targer="#myCarousel" data-slide-to="2"></li>
								</ol> <!-- carousel-indicators End -->

								<div class="carousel-inner">
									<div class="item active">
										<center><img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 1-a"></center>
									</div>
									<div class="item">
										<center><img  class="img-responsive" src="admin_area/product_images/<?php echo $product_img2; ?>" alt="Product 2-b"></center>
									</div>
									<div class="item">
										<center><<img  class="img-responsive"  src="admin_area/product_images/<?php echo $product_img3; ?>" alt="Product 3-c"></center>
									</div>
								</div>

								<a href="#myCarousel" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-cevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>

								<a href="#myCarousel" class="right carousel-control" data-slide="next">
									<span class="glyphicon glyphicon-cevron-right"></span>
									<span class="sr-only">Next</span>
								</a> 
							</div> <!-- carousel slide End -->
						</div>  <!-- mainImage End -->
					</div> <!-- col-sm-6 End -->

					<div class="col-sm-6">
						<div class="box">
							<h1 class="text-center"><?php echo $product_title; ?></h1>


							<?php add_cart(); ?>

							<form action="datails.php?add_cart=<?php echo $product_id; ?>" class="form-horizantal" method="post"> <!-- Form Begin -->
								<div class="form-group"> <!-- form-group Begin -->
									<label for="" class="col-md-5 control-label">Products Quanity</label>

									<div class="col-md-7"> <!-- col-md-7 Begin -->
										<select name="product_qty" id="" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
									</div> <!-- col-md-7 End -->
								</div> <!-- form-group End -->

								<div class="form-group"> <!-- form-group Begin -->
									<label class="col-md-5 control-label"> Product Size </label> 

									<div class="col-md-7">
										
										<select name="product_size" class="form-control" required oninput="setCustomValidity('')"
										oninvalid="setCustomValidity('Must Pick 1 size for the product')">
											
											<option disabled selected="">Select a Size</option>
											<option>Small</option>
											<option>Medium</option>
											<option>Large</option>

										</select>

									</div>
								</div> <!-- form-group End -->
								<p class="price">₱<?php echo $product_price; ?>.00</p>
							<p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button></p>

							</form>  <!-- Form End -->

							
						</div> <!-- Box End -->

							<div class="row" id="thumbs"> <!-- row Begin -->
								
								<div class="col-xs-4"> <!-- col-xs-4 Begin -->
									<a data-target="#myCarousel" data-slide-to="0" href="" class="thumb"> <!-- thumbBegin -->
										<img src="admin_area/product_images/<?php echo $product_img1 ?>" alt="product 1-a" class="img-responsive">
									</a>  <!-- thumb End -->
								</div>  <!-- col-xs-4 End -->

								<div class="col-xs-4"> <!-- col-xs-4 Begin -->
									<a data-target="#myCarousel" data-slide-to="1" href="" class="thumb"> <!-- thumbBegin -->
										<img src="admin_area/product_images/<?php echo $product_img2 ?>" alt="product 1-a" class="img-responsive">
									</a>  <!-- thumb End -->
								</div>  <!-- col-xs-4 End -->


								<div class="col-xs-4"> <!-- col-xs-4 Begin -->
									<a data-target="#myCarousel" data-slide-to="2" href="" class="thumb"> <!-- thumbBegin -->
										<img src="admin_area/product_images/<?php echo $product_img3 ?>" alt="product 1-a" class="img-responsive">
									</a>  <!-- thumb End -->
								</div>  <!-- col-xs-4 End -->

							</div> <!-- row End -->
					</div> <!-- col-md-6 End -->
				</div> <!-- row End -->

						<div class="box" id="details"> <!-- box Begin -->

								<h4>Product Details</h4>
							<p>
								<?php echo $product_desc; ?>

							</p>
							 	<h4>Size</h4>

							 	<ul>
							 		<li>Small</li>
							 		<li>Medium</li>
							 		<li>Large</li>
							 	</ul>

							 	<hr>

						</div> <!-- box End -->


						<div id="row same-height-row"> <!-- row same-height-row Begin -->
							<div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 Begin -->
								<div class="box same-height headline"> <!-- box same-height headline Begin -->
									<h3 class="text-center">Products You Maybe Like</h3>
								</div> <!-- box same-height headline End -->
							</div> <!-- col-md-3 col-sm-6 End -->

								<?php 

									$get_products = "select * from products order by rand() LIMIT 0,2";

									$run_products = mysqli_query($con,$get_products);

									while ($row_products=mysqli_fetch_array($run_products)) {
										
										$product_id = $row_products['product_id'];

										$product_title = $row_products['product_title'];

										$product_img1 = $row_products['product_img1'];

										$product_price = $row_products['product_price'];


										echo "

											<div class='col-md-4 col-sm-6 center-responsive'>

												<div class='product same-height'>

													<a href= 'datails.php?product_id=$product_id'>

														<img class='img-responsive' src='admin_area/product_images/$product_img1'>

													</a>

													<div class='text'>
														<h3> <a href='datails.php?product_id=$product_id'>$product_title </a> </h3>

														<p class='price'> ₱$product_price.00</p>

													</div>

												</div>


											</div>


										";
									}


								 ?>
								
						</div> <!-- row same-height-row End -->
			</div> <!-- col-md-9 End -->

			

		</div> <!-- container End -->
	</div><!-- Content End -->

	<?php 
	
		include("includes/footer.php");
	
	?>

	<script src = "js/jquery-331.min.js"></script>
	<script src = "js/bootstrap-337.min.js"></script> 

</body>
</html>