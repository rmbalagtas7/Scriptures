<?php 
		session_start();
		include("includes/db.php");
		include("functions/functions.php");
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel = "icon" href = 
"https://lh3.googleusercontent.com/proxy/TSksV0eHx3V16b2i1zoTH4egb8QHNjHg6TP-hi7It33Diqyal2QWJc576SXccATSKFI6RcLcg5B7Nx9cvhAkBUqKZ0WdBmpNZLZqiFYXxN3ALZ12PfI62KA" 
        type = "image/x-icon">
	<title>Scriptures | Shop Cart</title>
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
#content #cart .table tbody tr td input{
    width: 40px;
    text-align: right;
}

#content #cart .table tbody tr td{
    vertical-align: middle;
}
#content #cart .table tfoot{
    font-size: 18px;

}
.box .box-footer{
	background-color: #f7f7f7;
	margin: 30px -20px 30px;
	padding: 20px;
	border: 1px solid #eeeeee;
}
.box .box-footer: before
.box .box-footer: after{
	content: "";
	display: table;
}
.box .box-footer: after{
	clear: both;
}
.box .box-header{
	background-color: #f7f7f7;
	margin: -20px -20px 20px;
	padding: 20px;
	border: 1px solid #eeeeee;
}
#content #order-summary table{
    margin-top: 20px;
}
#content #order-summary table td{
    color: #999999;
}
#content #order-summary table tr.total td,
#content #order-summary table tr.total th{
	font-size: 18px;
	color: #555555;
	font-weight: 700;
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
						<a href= "checkout.php">My Account</a>
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
					<li>
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
					<li class="active">
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
					<li>My Shopping Cart</li>
				</ul>
			</div><!-- col-md-12 End -->

			<div id="cart" class="col-md-9">  <!-- col-md-9 Begin -->
				
				<div class="box"> <!-- box Begin -->
					
					<form action="cart.php" method="post" enctype="multipart/form-data"><!-- Form Begin -->

						<h1>Shopping Cart</h1> 

						<?php 

						$ip_add = getRealIpUser();

						$select_cart = "select * from cart where ip_add='$ip_add'";

						$run_cart = mysqli_query($con,$select_cart);

						$count = mysqli_num_rows($run_cart);



						 ?>
						<p class="text-muted">You Currently have <?php echo $count; ?> item(s)  in your cart</p>

						<div class="table-responsive">  <!-- table-responsive Begin -->

							<table class="table">
									<thead>  <!-- thead Begin -->
								
								<tr>  <!-- tr Begin -->
									
									<th colspan="2">Product</th>
									<th>quantity</th>
									<th>Unit Price</th>
									<th>Size</th>
									<th colspan="1">Delete</th>
									<th colspan="2">Sub-Total</th>
								</tr> <!-- tr End -->

							</thead> <!-- thead End -->

							<tbody> <!-- tbody Begin -->

								<?php

								$total = 0;

								while($row_cart = mysqli_fetch_array($run_cart)){

									$pro_id = $row_cart['p_id'];

									$pro_size = $row_cart['size'];

									$pro_qty = $row_cart['qty'];
								
										$get_products = "select * from products where product_id='$pro_id'";

										$run_products = mysqli_query($con,$get_products);

										while($row_products=mysqli_fetch_array($run_products)){

											$product_title = $row_products ['product_title'];

											$product_img1 = $row_products ['product_img1'];

											$only_price = $row_products ['product_price'];

											$sub_total = $row_products ['product_price']*$pro_qty;

											$total += $sub_total;



								 ?>
								<tr>
									<td>
										<img class = "img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 4">
									</td>

									<td>
										<a href="datails.php?pro_id= <?php echo $pro_id; ?>"><?php echo $product_title; ?></a>
									</td>

									<td>

										<?php echo  $pro_qty; ?>

									</td>

									<td>
										<?php echo $only_price; ?>
									</td>

									<td>
										<?php  echo $pro_size; ?>
									</td>

									<td>
										<input type="checkbox" name="remove[]" value="<?php  echo $pro_id; ?>">
									</td>

									<td>
										₱<?php echo $sub_total ?>.00
									</td>

								</tr>


								<?php 
									}
								}
								?>
							</tbody> <!-- tbody End -->
							<tbody> <!-- tbody Begin -->
								
							</tbody> <!-- tbody End -->

								<tfoot> <!-- tfoot Begin -->
									
									<th colspan="5">Total</th>
									<th colspan="2">₱<?php echo $total ?>.00</th>
								</tfoot> <!-- tfoot End -->

							</table>

							
							
						</div> <!-- table-responsive End -->

							<div class="box-footer">  <!-- box-footer Begin -->

								<div class="pull-left"> <!-- pull-left Begin -->
									
									<a href="index.php" class="btn btn-default"><!-- btn btn-defaultBegin -->
										
										<i class ="fa fa-chevron-left"></i> Continue Shopping

									</a> <!-- btn btn-default End -->
								</div> <!-- pull-left End -->

								<div class="pull-right"> <!-- pull-right Begin -->
									
									<button  type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-defaultBegin -->
										
										<i class ="fa fa-refresh"></i> Update Cart

									</button> <!-- btn btn-default End -->

									<a href="checkout.php" class="btn btn-primary">
										Proceed To Checkout <i class="fa fa-chevron-right"></i>
									</a>
								</div> <!-- pull-right End -->
								
							</div> <!-- box-footer End -->
					</form> <!-- Form Begin -->
				</div> <!-- box End -->

				<?php 
					function update_cart(){

						global $con;

						if (isset($_POST['update'])) {
							foreach ($_POST['remove'] as $remove_id) {
								
								$delete_product = "delete from cart where p_id='$remove_id'";

								$run_delete = mysqli_query($con,$delete_product);

								if ($run_delete) {
									echo"<script>window.open('cart.php','_self')</script>";
								}
							}
						}
					}

					echo @$up_cart = update_cart();




				 ?>



						<div id="row same-height-row"> <!-- row same-height-row Begin -->
							<div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 Begin -->
								<div class="box same-height headline"> <!-- box same-height headline Begin -->
									<h3 class="text-center">Products You Maybe Like</h3>
								</div> <!-- box same-height headline End -->
							</div> <!-- col-md-3 col-sm-6 End -->

							<?php 

								$get_products = "select * from products order by rand() LIMIT 0,1";

								$run_products = mysqli_query($con,$get_products);

								while($row_products=mysqli_fetch_array($run_products)){

									$pro_id = $row_products['product_id'];

									$pro_title = $row_products['product_title'];

									$pro_price = $row_products['product_price'];

									$pro_img1 = $row_products['product_img1'];

									echo "






							<div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6  center-responsive Begin -->
								<div class='product same-height'> <!-- product same-height Begin -->
									<a href='datails.php?pro_id=$pro_id'>
										<img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 6'>
									</a>
									<div class='text'>

										<h3><a href='datails.php?pro_id=$pro_id'> $pro_title </a></h3>

											<p class='price'>₱$pro_price.00</p>
										
									</div>
								</div> <!-- product same-height End -->

							</div> <!-- col-md-3 col-sm-6  center-responsive End -->


							";


								}

							 ?>
							<div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6  center-responsive Begin -->
								<div class="product same-height"> <!-- product same-height Begin -->
									<a href="datails.php">
										<img class="img-responsive" src="admin_area/product_images/product-shop-5.jpg" alt="Product 5">
									</a>
									<div class="text">

										<h3><a href="datails.php">Scriptures Black Tshirt</a></h3>

											<p class="price">₱800.00</p>
										
									</div>
								</div> <!-- product same-height End -->

							</div> <!-- col-md-3 col-sm-6  center-responsive End -->
							<div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6  center-responsive Begin -->
								<div class="product same-height"> <!-- product same-height Begin -->
									<a href="datails.php">
										<img class="img-responsive" src="admin_area/product_images/product-shop-4.jpg" alt="Product 4">
									</a>
									<div class="text">

										<h3><a href="datails.php">Scriptures White Tshirt</a></h3>

											<p class="price">₱800.00</p>
										
									</div>
								</div> <!-- product same-height End -->

							</div> <!-- col-md-3 col-sm-6  center-responsive End -->
								
						</div> <!-- row same-height-row End -->
			</div>  <!-- col-md-9 End -->

			<div class="col-md-3"> <!-- col-md-3 Begin -->

				<div id="order-summary" class="box">  <!--box Begin -->
					 
					 <div class="box-header"> <!--box-header Begin -->

					 	<h3>Order Summary</h3>
					 	
					 </div> <!--box-header End -->
 
					 <p class="text-muted">  <!--text-muted Begin -->
					 	
					 	Shipping and additional costs are calculated based on value you have enetered

					 </p> <!--text-muted End -->

					 <div class="table-responsive"> <!--table-responsive Begin -->

					 	<table class="table">  <!--table- Begin -->
					 		
					 		<tbody>  <!--tbody- Begin -->
					 			<tr> <!--tr- Begin -->

					 				<td>Order All Sub-Total</td>
					 				<th> ₱<?php echo $sub_total; ?>.00</th>

					 			</tr> <!--tr- End -->

					 			<tr><!--tr- Begin -->
					 				
					 				<td>Tax</td>
					 				<th> ₱00.00</th>
					 			</tr> <!--tr- End -->

					 			<tr class="total"><!--tr- Begin -->
					 				
					 				<td>Total</td>
					 				<th> ₱<?php echo $total; ?>.00</th>
					 			</tr> <!--tr- End -->
					 		</tbody> <!--tbody- End -->

					 	</table> <!--table- End -->
					 	
					 </div> <!--table-responsive End -->

				</div> <!--box End -->
				
			</div> <!-- col-md-3 End -->

	</div> <!-- container End -->
	</div><!-- Content End -->

	<?php 
	
		include("includes/footer.php");
	
	?>

	<script src = "js/jquery-331.min.js"></script>
	<script src = "js/bootstrap-337.min.js"></script> 

</body>
</html>