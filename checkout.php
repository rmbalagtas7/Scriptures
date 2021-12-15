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
	<title>Scriptures | Login</title>
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

					 ?></a>
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
					<li >
						<a href = "shop.php">Shop</a>
					</li>
					<li class="active">
						<a href = "checkout.php">My Account</a>
					</li>
					<li>
						<a href = "cart.php">Shopping Cart</a>
					</li>
					<li >
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
					<li>Login</li>
				</ul>
			</div><!-- col-md-12 End -->

			<div class="col-md-3"> <!-- col-md-3 Begin -->

		<?php 
	
			include("includes/sidebar.php");
	
		?>

				
			</div>  <!-- col-md-3 End -->

			<div class="col-md-9"> <!-- col-md-9 Begin -->


			<?php 

				if (!isset($_SESSION['customer_email'])) {
					
					include("customer/customer_login.php");

				}else{
					include("payment_options.php");
				}


			 ?>

			</div> <!-- col-md-9End -->

	</div> <!-- container End -->
	</div><!-- Content End -->

	<?php 
	
		include("includes/footer.php");
	
	?>

	<script src = "js/jquery-331.min.js"></script>
	<script src = "js/bootstrap-337.min.js"></script> 

</body>
</html>

<?php 

if (isset($_POST['register'])) {
	
	$c_name = $_POST['c_name'];

	$c_email = $_POST['c_email'];

	$c_pass = $_POST['c_pass'];

	$c_city = $_POST['c_city'];

	$c_contact = $_POST['c_contact'];

	$c_address = $_POST['c_address'];

	$c_image = $_FILES['c_image']['name'];

	$c_image_tmp = $_FILES['c_image']['tmp_name'];

	$c_ip = getRealIpUser();

	move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

	$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_city,customer_contact,customer_address,customer_image,customer_ip) 
	values ('$c_name','$c_email','$c_pass','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

	$run_customer = mysqli_query($con,$insert_customer);

	$sel_cart = "select * from cart where ip_add='$c_ip'";

	$run_cart = mysqli_query($con,$sel_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if ($check_cart>0) {
		
		$_SESSION['customer_email']=$c_email;

		echo "<script>alert('You have been Registered Sucessfully')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";


	}else{


		$_SESSION['customer_email']=$c_email;

		echo "<script>alert('You have been Registered Sucessfully')</script>";

		echo "<script>window.open('index.php','_self')</script>";
	}


}


 ?>