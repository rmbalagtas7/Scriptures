
<?php


 if (!isset($_SESSION['admin_email'])) {
 	
 	echo "<script>window.open('login.php','_self')</script>";
 }else{
 	

?>
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- nav begin -->
	
	<div class="navbar-header"> <!-- navbar-header begin -->
		
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exi-collapse"> <!-- button begin -->
			
			<span class="sr-only">Toggle Navigation</span>

			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>

		</button> <!-- button end -->

		<a href="index.php?dashboard" class="navbar-brand">Scriptures | Admin</a>

	</div> <!-- navbar-header begin -->

	<ul class="nav navbar-right top-nav"> <!-- nav navbar-right top-nav begin -->

		<li class="dropdown">  <!-- dropdown begin -->
			
			<a href = "#" class="dropdown-toggle" data-toggle="dropdown"> <!-- dropdown-toggle begin -->

				<i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"> </b>

				<ul class="dropdown-menu">  <!-- dropdown-menu begin -->
					
					<li> <!-- list begin -->
						<a href="index.php?user_profile= <?php echo $admin_id; ?>"> <!-- index.php?user_profile begin -->
							
							<i class="fa fa-fw fa-user"></i> Profile

						</a> <!-- index.php?user_profile end -->
					</li> <!-- list end -->

					<li> <!-- list begin -->
						<a href="index.php?view_products"> <!-- index.php?user_profile begin -->
							
							<i class="fa fa-fw fa-envelope"></i> Products

							<span class="badge"> <?php echo $count_products; ?> </span>

						</a> <!-- index.php?user_profile end -->
					</li> <!-- list end -->

					<li> <!-- list begin -->
						<a href="index.php?view_customers"> <!-- index.php?user_profile begin -->
							
							<i class="fa fa-fw fa-user"></i> Customers

							<span class="badge"> <?php echo $count_customers; ?> </span>

						</a> <!-- index.php?user_profile end -->
					</li> <!-- list end -->


					<li> <!-- list begin -->
						<a href="index.php?view_cats"> <!-- index.php?user_profile begin -->
							
							<i class="fa fa-fw fa-gear"></i> Product Categories

							<span class="badge"><?php echo $count_p_categories; ?></span>

						</a> <!-- index.php?user_profile end -->
					</li> <!-- list end -->

					<li class="divider"></li>

					<li> <!-- list begin -->
						<a href="logout.php">  <!-- index.php?user_profile begin -->
							
							<i class="fa fa-fw fa-power-off"></i> Log Out

						</a> <!-- index.php?user_profile end -->
					</li> <!-- list end -->



				</ul> <!-- dropdown-menu end -->
				
			</a> <!-- dropdown-toggle end -->

		</li> <!-- dropdown end -->
		
	</ul> <!-- nav navbar-right top-nav end -->

	<div class="collapse navbar-collapse navbar-exi-collapse"> <!-- collapse navbar-collpase navbar-exi-collapsee begin -->
		<ul class="nav navbar-nav side-nav"> <!-- nav navbar-nav side-nav begin -->
			<li> <!-- list begin -->
				
				<li> <!-- list begin -->
						<a href="index.php?dashboard">  <!-- index.php?user_profile begin -->
							
							<i class="fa fa-fw fa-dashboard"></i> Dashboard

						</a> <!-- index.php?user_profile end -->
				</li> <!-- list end -->

			</li> <!-- list end -->

				<li> <!-- list begin -->
				
				<li> <!-- list begin -->
						<a href="#" data-toggle="collapse" data-target="#products">  <!-- a href begin -->
							
							<i class="fa fa-fw fa-tag"></i> Products
							<i class="fa fa-fw fa-caret-down"></i>

						</a>  <!-- a href end -->

						<ul id="products" class="collapse"> <!-- collapse begin -->
							
							<li> <!-- list begin -->
								<a href="index.php?insert_product"> Insert Product </a>
							</li> <!-- list end -->
							<li>  <!-- list begin -->
								<a href="index.php?view_product"> View Product </a>
							</li> <!-- list end -->

						</ul> <!-- collapse end -->
				</li> <!-- list end -->

			</li> <!-- list end -->

			<li> <!-- list begin -->
				
				<li> <!-- list begin -->
						<a href="#" data-toggle="collapse" data-target="#p_cat">  <!-- a href begin -->
							
							<i class="fa fa-fw fa-edit"></i> Product Categories
							<i class="fa fa-fw fa-caret-down"></i>

						</a>  <!-- a href end -->

						<ul id="p_cat" class="collapse"> <!-- collapse begin -->
							
							<li> <!-- list begin -->
								<a href="index.php?insert_p_cat"> Insert Product Category </a>
							</li> <!-- list end -->
							<li>  <!-- list begin -->
								<a href="index.php?view_p_cat"> View Product Category </a>
							</li> <!-- list end -->

						</ul> <!-- collapse end -->
				</li> <!-- list end -->

			</li> <!-- list end -->

			<li> <!-- list begin -->
				
				<li> <!-- list begin -->
						<a href="#" data-toggle="collapse" data-target="#slides">  <!-- a href begin -->
							
							<i class="fa fa-fw fa-gear"></i> Slides
							<i class="fa fa-fw fa-caret-down"></i>

						</a>  <!-- a href end -->

						<ul id="slides" class="collapse"> <!-- collapse begin -->
							
							<li> <!-- list begin -->
								<a href="index.php?insert_slide"> Insert Slide </a>
							</li> <!-- list end -->
							<li>  <!-- list begin -->
								<a href="index.php?view_slides"> View Slides </a>
							</li> <!-- list end -->

						</ul> <!-- collapse end -->
				</li> <!-- list end -->
				<li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#boxes"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dropbox"></i> Boxes
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="boxes" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_box"> Insert Box </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_boxes"> View Boxes </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

			</li> <!-- list end -->

			<li> <!-- list begin -->
				<a href="index.php?view_customers"> <!-- a href begin -->
				<i class="fa fa-fw fa-users"> </i> View Customers
				</a> <!-- a href end -->
			</li> <!-- list end -->

			<li> <!-- list begin -->
				<a href="index.php?view_orders"> <!-- a href begin -->
				<i class="fa fa-fw fa-book"> </i> View Orders
				</a> <!-- a href end -->
			</li> <!-- list end -->

			<li> <!-- list begin -->
				<a href="index.php?view_payments"> <!-- a href begin -->
				<i class="fa fa-fw fa-money"> </i> View Payments
				</a> <!-- a href end -->
			</li> <!-- list end -->

			<li> <!-- list begin -->
				
				<li> <!-- list begin -->
						<a href="#" data-toggle="collapse" data-target="#users">  <!-- a href begin -->
							
							<i class="fa fa-fw fa-users"></i> Users
							<i class="fa fa-fw fa-caret-down"></i>

						</a>  <!-- a href end -->

						<ul id="users" class="collapse"> <!-- collapse begin -->
							
							<li> <!-- list begin -->
								<a href="index.php?insert_user"> Insert User </a>
							</li> <!-- list end -->
							<li>  <!-- list begin -->
								<a href="index.php?view_users"> View Users </a>
							</li> <!-- list end -->
							<li>  <!-- list begin -->
								<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit User Profile </a>
							</li> <!-- list end -->

						</ul> <!-- collapse end -->
				</li> <!-- list end -->

			</li> <!-- list end -->

			<li> <!-- list begin -->
				<a href="logout.php"> <!-- a href begin -->
				<i class="fa fa-fw fa-power-off"> </i> Log Out
				</a> <!-- a href end -->
			</li> <!-- list end -->

		</ul> <!-- nav navbar-nav side-nav end -->
	</div> <!-- collapse navbar-collpase navbar-exi-collapsee end -->

</nav> <!-- nav end -->

<?php } ?>