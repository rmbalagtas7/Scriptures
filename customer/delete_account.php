<center> <!-- Center Begin -->
	<h1>Do You Want To Delete Your Account? </h1>

	<form action="" method="post">  <!-- Form Begin -->
		
		<input type="submit" name="Yes" value="Yes, I Want To Delete"class="btn btn-danger">

		<input type="submit" name="No" value="No, I Dont Want To Delete"class="btn btn-primary">
	</form> <!-- Form End -->
</center> <!-- Center End -->

<?php  

$c_email = $_SESSION['customer_email'];

if (isset($_POST['Yes'])) {
	
	$delete_customer = "delete from customers where customer_email='$c_email'";

	$run_delete_customer = mysqli_query($con,$delete_customer);

	if ($run_delete_customer) {
		
		session_destroy();

		echo "<script>alert('Account Deleted')</script>";

		echo "<script>window.open('../index.php','_self')</script>";
	}
}

if (isset($_POST['No'])) {
	echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}

?>