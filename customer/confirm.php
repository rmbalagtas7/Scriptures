<?php 
	session_start();

	if (!isset($_SESSION['customer_email'])) {

		echo "<script>window.open('../checkout.php','_self')</script>";
		
	}else{


	include("includes/db.php");
	include("functions/function.php")

	



 ?>
 <?php if (isset($_GET['order_id'])){
		
		$order_id = $_GET['order_id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title>Scriptures | Confirm </title>
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
    background: rgb(79,191, 168);
    border-color: rgb(65,179, 156);
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
				<a href="checkout.php"> <?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?>.00</a>

			</div><!-- col-md-6 offer End -->

			<div class = "col-md-6"> <!-- col-md-6 Begin-->

				<ul class="menu"> <!-- Menu Begin-->

					<li>
						<a href= "../customer_register.php">Register</a>
					</li>
					<li>
						<a href= "../customer/my_account.php">My Account</a>
					</li>
					<li>
						<a href= "../cart.php">Go to Cart</a>
					</li>
					<li>
						<a href= "../checkout.php">
							
							<?php  

							if (!isset($_SESSION['customer_email'])) {
							
								echo "<a href='../checkout.php'> Login </a>";
							}else{

								echo"<a href='../logout.php'> Logout </a>";
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

					<li class="active">
						<a href = "../index.php">Home</a>
					</li>
					<li>
						<a href = "../shop.php">Shop</a>
					</li>
					<li>
						<?php 
							if (!isset($_SESSION['customer_email'])) {
								
								echo "<a href='../checkout.php'>My Account</a>";
							}else{

								echo "<a href='../customer/my_account.php'>My Account</a>";
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

			<a href ="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin -->

				<i class="fa fa-shopping-cart"></i>
				<span><?php items(); ?> Items In Your Cart</span>

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
					<li>My Account</li>
				</ul>
			</div><!-- col-md-12 End -->

			
			<div class="col-md-3"> <!-- col-md-3 Begin -->

				<div class="panel panel-default sidebar-menu">  <!-- panel panel-default sidebar-menu Begin -->
	<div class="panel-heading">
        <?php 

				$customer_session = $_SESSION['customer_email'];

				$get_customer = "select * from customers where customer_email='$customer_session'";

				$run_customer = mysqli_query($con,$get_customer);

				$row_customer = mysqli_fetch_array($run_customer);

				$customer_image = $row_customer['customer_image'];

				$customer_name = $row_customer['customer_name'];

				if (!isset($_SESSION['customer_email'])) {
					

				}else{

					echo "

						<center>

							<img src='customer_images/$customer_image' class='img-responsive'>


						</center>

						<br/>

						<h3 class='panel-title' align='center'>

							Name: $customer_name

						</h3>

					";

				}



				?>
	</div>

	 <div class="panel-body"> <!-- panel-body Begin -->
	 	<ul class="nav-pills nav-stacked nav"> <!-- nav-pills nav-stacked nav Begin -->
	 		 	

	 		 		<li class="<?php if(isset($_GET['my_orders'])){echo"active";}?>">
	 		 		<a href="my_account.php?my_orders">
	 		 			<i class="fa fa-list"></i> My Orders
	 		 		</a>
	 		 	</li>


	 		 		<li class="<?php if(isset($_GET['pay_offline'])){echo"active";}?>">
	 		 		<a href="my_account.php?pay_offline">
	 		 			<i class="fa fa-bolt"></i> Pay Offline
	 		 		</a>
	 		 	</li>

	 		 	<li class="<?php if(isset($_GET['edit_account'])){echo"active";}?>">
	 		 		<a href="my_account.php?edit_account">
	 		 			<i class="fa fa-pencil"></i> Edit Account
	 		 		</a>
	 		 	</li>

	 		 	<li class="<?php if(isset($_GET['change_pass'])){echo"active";}?>">
	 		 		<a href="my_account.php?change_pass">
	 		 			<i class="fa fa-user"></i> Change Password
	 		 		</a>
	 		 	</li>



	 		 	<li >
	 		 		<a href="logout.php">
	 		 			<i class="fa fa-user"></i> Log Out
	 		 		</a>
	 		 	</li>


	 	</ul> <!-- nav-pills nav-stacked nav End -->
	 </div>  <!-- panel-body End -->
</div>	 <!-- panel panel-defaul t sidebar-menu end -->



				
			</div>  <!-- col-md-3 End -->

			<div class="col-md-9">  <!-- col-md-9 Begin -->
				<div class="box">  <!-- box Begin -->
					
					<h1 align="center">Please confirm your payment</h1>
					<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"> <!-- Form Begin -->

						<div class="form-group"> <!-- form-group Begin -->
							
							<label >Invoice No: </label>

							<input type="text"class="form-control" name="invoice_no" required></input>

						</div>  <!-- form-group End -->
						
						<div class="form-group"> <!-- form-group Begin -->
							
							<label >Amount Sent: </label>

							<input type="text"class="form-control" name="amount_sent" required></input>

						</div>  <!-- form-group End -->

						<div class="form-group"> <!-- form-group Begin -->
							
							<label >Select Payment Mode: </label>

							<select class="form-control" name="payment_mode"> <!-- fselect_payment_mode Begin -->
								
								<option> Select Payment Mode </option>
								<option> PayPal </option>
								<option> Bank Transfer </option>
								<option> Cash On Delivery </option>
								<option> Online Payment </option>

							</select> <!-- fselect_payment_mode End -->
 
						</div>  <!-- form-group End -->
						<div class="form-group"> <!-- form-group Begin -->
							
							<label >Transaction / Reference ID: </label>

							<input type="text"class="form-control" name="ref_no" required></input>

						</div>  <!-- form-group End -->
						<div class="form-group"> <!-- form-group Begin -->
							
							<label >Payment Date: </label>

							<input type="text"class="form-control" name="date" required></input>

						</div>  <!-- form-group End -->
						<div class="text-center"> <!-- text-center Begin -->
							
							<button class="btn btn-primary btn-lg" name="confirm_payment"> <!-- btn btn-primary btn-lg Begin -->
								
								<i class="fa fa-user-md"></i> Confirm Payment

							</button> <!-- btn btn-primary btn-lg End -->
						</div> <!-- text-center End -->
					</form> <!-- Form End -->

					<?php 

						if (isset($_POST['confirm_payment'])) {
							
							$update_id =$_GET['update_id'];

							$invoice_no = $_POST['invoice_no'];

							$amount = $_POST['amount_sent'];

							$payment_mode = $_POST['payment_mode'];

							$ref_no = $_POST['ref_no'];

							$payment_date = $_POST['date'];

							$complete = "Complete";

							$insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,payment_date) values 
							('$invoice_no','$amount','$payment_mode','$ref_no','$payment_date')";

							$run_payment = mysqli_query($con,$insert_payment);

							$update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

							$run_customer_order = mysqli_query($con,$update_customer_order);

							$update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

							$run_pending_order = mysqli_query($con,$update_pending_order);

							if($run_pending_order){

								echo "<script>alert('Thank You For Purchasing, Your Orders Will Completed Within 24 Hours Work')</script>";

								echo "<script>window.open('my_account.php?my_orders','_self')</script>";
							}
						}
					?>
				</div> <!-- box End -->

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
<?php 
	}

?>