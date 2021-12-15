<style>
.box{
	width: 500px;

}
input[type=text], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;

}
input[type=password], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;

}
</style>
<div class="box">  <!-- Box Begin -->
	
	<div class="box-header"> <!-- box-header Begin -->
		
		<center> <!-- center Begin -->
			
			<h1> Login </h1>

			<p class="text-muted"></p>

		</center> <!-- center End -->

	</div> <!-- box-header End -->

	<form method="post" action="checkout.php"> <!-- Form Begin -->
		

		<div class="form-group">  <!-- form-group Begin -->
			
			<label> Email </label>

			<input type="text" name="c_email" class="form-control" required>

		</div> <!-- form-group End -->

		<div class="form-group">  <!-- form-group Begin -->
			
			<label> Password </label>

			<input type="password" name="c_pass" class="form-control" required>

		</div> <!-- form-group End -->
		<div class="text-left"> <!-- text-center Begin -->

		<a href="customer_register.php">
			
			<p>Dont have account? Register Here</p>

		</a>
		</div> <!-- form-group End -->

		<div class="text-right"> <!-- text-center Begin -->

			<button name = "login" value="Login" class="btn btn-primary">
				
				<i class="fa fa-sign-in"></i>Login

			</button>
		</div> <!-- form-group End -->
		</div> <!-- text-center End -->

		


	</form> <!-- Form End -->
			
</div> <!-- Box End -->



<?php 


if(isset($_POST['login'])){

	$customer_email = $_POST['c_email'];

	$customer_pass = $_POST['c_pass'];

	$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

	$run_customer = mysqli_query($con,$select_customer);

	$get_ip = getRealIpUser();

	$check_customer = mysqli_num_rows($run_customer); 

	$select_cart = "select * from cart where ip_add='$get_ip'";

	$run_cart = mysqli_query($con,$select_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if ($check_customer==0) {
		
		echo "<script>alert('Your Email or Password is Wrong')</script>";
		exit();
	}

	if ($check_customer==1 AND $check_cart==0) {

		$_SESSION['customer_email']=$customer_email;


		echo "<script>alert('You are logged in')</script>";
		echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
		
		
	}else{

		$_SESSION['customer_email']=$customer_email;
		
		echo "<script>alert('You are logged in')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";
		
	}

}

?>
