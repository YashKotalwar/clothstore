<?php
session_start();
if (!isset($_SESSION['customer_email'])) {
	echo "<script>window.open('../checkout.php','_self')</script>";
}else{
include("includes/db.php");
include("functions/functions.php");

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce Store</title>

	<link rel="stylesheet" href="styles/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div id="top">

		<div class="container">

			<div class="col-md-6 offer">
				<a href="#" class="btn btn-success btn-sm">
					Welcome Guest
				</a>

				<a href="#">Shopping Cart Total Price:INR 100, Total Items-2</a>
			</div>

			<div class="col-md-6">
				<ul class="menu">
					<li>
						<a href="../customer_registration.php">Register</a>
					</li>
					<li>
						<a href="my_account.php">My Account</a>
					</li>
					<li>
						<a href="../cart.php">Goto Cart</a>
					</li>
					<li>
						<a href="../login.php">Login</a>
					</li>
				</ul>
			</div>
		</div>

	</div>

	<div class="navbar navbar-default" id="navbar">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand home" href="../index.php">
					<img src="images/ML.jpg" alt="teehosting" class="hidden-xs">
				<img src="images/ML-small.jpg" alt="teehosting" class="visible-xs">
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">
						Toggle Navigation
					</span>

					<i class="fa fa-align-justify"></i>
					
				</button>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button>
			</div>

			<div class="navbar-collapse collapse" id="navigation">
				<div class="padding-nav">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="../index.php">Home</a>
						</li>
						<li >
							<a href="../shop.php">Shop</a>
						</li>
						<li class="active">
							<a href="my_account.php">My Account</a>
						</li>
						<li>
							<a href="../cart.php">Shopping Cart</a>
						</li>
						
						<li>
							<a href="../contactus.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span>4 items in Cart</span>

				</a>
				<div class="navbar-collapse collapse right">
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>

					</button>
					
				</div><!-- navbar-collapse collapse-right end -->
				<div class="collapse clearfix " id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
							<button type="submit" value="Search" name="search" class="btn btn-primary"><i class="fa fa-search">
							</i></button>
							</span>
						</div>
					</form>
				</div>
			</div><!-- navbar-collapse end -->
		</div>
		
	</div><!-- navbar navbar-default end -->

	<div id="content"><!--content Start-->
		<div class="container"><!--container Start-->
			<div class="col-md-12"><!--"col-md-12 Start-->
				<ul class="breadcrumb"> 
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						My Account
					</li>
				</ul>
			</div><!--"col-md-12 end-->
			<div class="col-md-3"><!--"col-md-3 start-->
				<?php
				include("includes/sidebar.php");
				?>
			</div><!--"col-md-3 end-->

		<div class="col-md-9"><!--"col-md-9 start-->

		<!--Including myorder.php page start-->
			<?php
			if(isset($_GET['my_order'])){
			include("my_order.php");
			}
			?>
			<!--Including myorder.php page end-->

			<!--Including edit_act.php page start-->
			<?php
			if(isset($_GET['edit_act'])){
			include("edit_act.php");
			}
			?>
			<!--Including edit_act.php page end-->
			

			<!--Including edit_act.php page start-->
			<?php
			if(isset($_GET['change_pass'])){
			include("change_pass.php");
			}
			?>
			<!--Including edit_act.php page end-->

			<!--Including delete_ac.php page start-->
			<?php
			if(isset($_GET['delete_ac'])){
			include("delete_ac.php");
			}
			?>
			<!--Including delete_ac.php page end-->

			<!--Including pay_offline.php page start-->
			<?php
			if(isset($_GET['pay_offline'])){
			include("pay_offline.php");
			}
			?>
			<!--Including pay_offline.php page end-->

			<!--Including pay_offline.php page start-->
			
			
		</div><!--"col-md-9 end-->

		</div><!--container end-->
		
	</div><!--content end-->


<?php 
include("includes/footer.php");
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php } ?>