
<div id="footer"><!-- Footer Begin -->
    <div class="container"><!-- Container Begin -->
        <div class="row"><!-- Row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Pages</h4>

                <ul><!-- UL Begin -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul><!-- UL End -->

                <hr>

                <h4>User Section</h4>

                <ul><!-- UL Begin -->
                    <li>  
                        <?php 
                            if (!isset($_SESSION['customer_email'])) {
                                
                                echo "<a href='checkout.php'>Login</a>";
                            }else{

                                echo "<a href='customer/my_account.php'>My Account</a>";
                            }

                         ?>

                    </li>
                    <li>
                         <?php 
                            if (!isset($_SESSION['customer_email'])) {
                                
                                echo "<a href='checkout.php'>Login</a>";
                            }else{

                                echo "<a href='customer/edit_account.php'>Edit Account</a>";
                            }

                         ?>

                    </li>
                </ul><!-- UL End -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 End -->

            <div class="con-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

            <h4>Top Products Category</h4>

            <ul><!-- UL Begin -->
                <?php

                    $get_p_cats = "select * from product_categories";

                    $run_p_cats = mysqli_query($con,$get_p_cats);

                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                        $p_cat_id = $row_p_cats['p_cat_id'];

                        $p_cat_title = $row_p_cats['p_cat_title'];

                        echo "

                            <li>


                                <a href='shop.php?p_cat=$p_cat_id'>
                                    $p_cat_title
                                </a>

                                

                            </li>




                        ";

                    }

                ?>
            </ul><!-- UL End -->

            <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 End -->

            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                <h4>Find Us: </h4>

                <p><!-- paragraph Start -->
                    <strong>Scriptures Inc.</strong>
                    <br/>Contact Us: 09050749276
                    <br/>Contact Us: info.scriptures@gmail.com
                    <br/><strong>MrRoland</strong>

                </p><!-- paragraph End -->

                <a href="contact.php">Check Our Contact Page</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 End -->

            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                <h4>Get The News</h4>

                <p class = "text-muted">
                    Dont miss our lastest update products.

                </p>

                <form action="" method="post"> <!-- Form Begin -->

                    <div class="input-group"><!-- Input-Group Begin -->

                        <input type="text" class="form class-control" name="email">

                        <span class="input-group-btn"><!-- Input-Group-Btn Begin -->

                        <input type="submit" value="subscirbe" class="btn btn-default">

                        </span><!-- Input-Group-Btn BegEndin -->
                    </div><!-- Input-Group End -->

                </form><!-- Form End -->

                <hr>

                    <h4>Keep in Touch</h4>

                    <p class="social">
                        <a href="https://www.facebook.com/scripturesco" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/scripturesco_/?fbclid=IwAR0UvMcRuf50hg3JdbonBrk2T6Ib_zHSVHcBzdu_cE-6l7pegnFuWQNtQUQ" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-envelope"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                    </p>
                   
            </div><!-- col-sm-6 col-md-3 End -->
        </div> <!-- Row End -->
    </div><!-- Container End -->
</div> <!-- Footer End -->

<div id="copyright"><!-- CopyRight Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            <p class="pull-left">&copy; 2013 Scriptures All Right Reserve</p>
        </div><!-- col-md-6 End -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            <p class="pull-right"> Develop by: <a href="https://www.facebook.com/rmbalagtas18/">MrRoland</a></p>
        </div><!-- col-md-6 End -->
    </div><!-- container End -->
</div><!-- CopyRight End -->