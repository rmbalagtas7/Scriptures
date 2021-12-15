<?php 
		session_start();
		include("includes/db.php");
		include("functions/functions.php");
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<link rel = "icon" href = 
"https://lh3.googleusercontent.com/proxy/TSksV0eHx3V16b2i1zoTH4egb8QHNjHg6TP-hi7It33Diqyal2QWJc576SXccATSKFI6RcLcg5B7Nx9cvhAkBUqKZ0WdBmpNZLZqiFYXxN3ALZ12PfI62KA" 
        type = "image/x-icon">
	<title>Scriptures | Home</title>
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
				<a href="checkout.php"> <?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?>.00</a>

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

					<li class="active">
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

	<div class="container" id="slider"> <!-- Container Begin -->
	
		<div class="col-md-12"> <!-- col-md-12 Begin -->

			<div class="carousel slider" id="myCarousel" data-ride="carousel"> <!-- carousel slider Begin -->

				<ol class="carousel-indicators"><!-- carousel-indicators Begin -->
				
						<li class = "active" data-target="#myCarousel" data-slide-to="0"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>

				</ol><!-- carousel-indicators End -->

				<div class="carousel-inner"> <!-- carousel-inner Begin -->
					<?php

						$get_slides = "select * from slider LIMIT 0,1";

						$run_slides = mysqli_query($con,$get_slides);

						while($row_slides=mysqli_fetch_array($run_slides)){

							$slider_name = $row_slides['slider_name'];
							$slider_image = $row_slides['slider_image'];
							$slide_url = $row_slides['slide_url'];


							echo "

								<div class= 'item active'>

								<a href = '$slide_url'>

								<img src='admin_area/slides_images/$slider_image'>

								</a>
								</div>

							";

						}
						$get_slides = "select * from slider LIMIT 1,3";

						$run_slides = mysqli_query($con,$get_slides);

						while($row_slides=mysqli_fetch_array($run_slides)){

							$slider_name = $row_slides['slider_name'];
							$slider_image = $row_slides['slider_image'];
							$slide_url = $row_slides['slide_url'];


							echo "

								<div class= 'item'>

								<a href = '$slide_url'>

								<img src='admin_area/slides_images/$slider_image'>

								</a>
								</div>

							";

						}
					?>
					
				</div><!-- carousel-inner End -->

				<a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control Begin -->
				
					<span class="glyphicon glyphicon-cevron-left"></span>
					<span class="sr-only">Previous</span>

				</a> <!-- left carousel-control End -->

				<a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- left carousel-control Begin -->
				
					<span class="glyphicon glyphicon-cevron-right"></span>
					<span class="sr-only">Next</span>

				</a> <!-- left carousel-control End -->

			</div> <!-- carousel slider End -->

		</div> <!-- col-md-12 End -->
	
	</div><!-- container End -->


	<div id="advantages"><!-- advantages Begin -->
	
		<div class="container"><!-- container Begin -->

			<div class="same-height-row"> <!-- same-height-row Begin -->
			
			<?php 
           
           $get_boxes = "select * from box_section";
           $run_boxes = mysqli_query($con,$get_boxes);

           while($run_boxes_section=mysqli_fetch_array($run_boxes)){

            $box_id = $run_boxes_section['box_id'];
            $box_title = $run_boxes_section['box_title'];
            $box_desc = $run_boxes_section['box_desc'];
           
           ?>
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#"><?php echo $box_title; ?></a></h3>
                       
                       <p> <?php echo $box_desc; ?> </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->

            <?php    } ?>
					
				
			
			</div> <!-- same-height-row End -->
		
		</div><!-- container End -->
	
	</div><!-- advantages End -->

	<div id="hot"><!-- hot Begin -->

		<div class="box"><!-- box Begin -->

			<div class="container"><!-- container Begin -->

				<div class="col-md-12"><!-- col-md-12 Begin -->

					<h2>
						Our Lastest Products
					</h2>
				</div><!-- col-md-12 End -->

			</div><!-- container End -->


		</div><!-- box End -->

	</div><!-- hot end -->

	<div id="content" class="container"><!-- container Begin -->

		<div class="row"><!-- row Begin -->
				<?php 

					getPro();

				?>

		</div><!-- row End -->

	</div><!-- container end -->

	</div> <!-- container End -->
	</div><!-- Content End -->

	<?php 
	
		include("includes/footer.php");
	
	?>

	<script src = "js/jquery-331.min.js"></script>
	<script src = "js/bootstrap-337.min.js"></script> 

</body>
</html>