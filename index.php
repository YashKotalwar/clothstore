<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce Store</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
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
					<?php 
					if (!isset($_SESSION['customer_email'])) {
						echo "WELCOME GUEST";
					}else {
						echo "WELCOME: ".$_SESSION['customer_email'] ."";
					}
					?>
				</a>

				<a href="#">Shopping Cart Total Price:INR <?php totalPrice();?> , Total Items <?php item();?></a>
			</div>

			<div class="col-md-6">
				<ul class="menu">
					<li>
						<a href="customer_registration.php">Register</a>
					</li>
					<li>
						<?php
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href
							='checkout.php'>My Account</a>";
						}else {
							echo "<a href='customer/my_account.php?my_order.php'>My Account</a>";
						}
						?>
					</li>
					<li>
						<a href="cart.php">Goto Cart</a>
					</li>
					<li>
						<?php
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href='checkout.php'>Login</a>";
						}else{
							echo "<a href='logout.php'>LogOut </a>";
						}
						?>
					</li>
				</ul>
			</div>
		</div>

	</div>

	<div class="navbar navbar-default" id="navbar">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
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
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<?php
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href
							='checkout.php'>My Account</a>";
						}else {
							echo "<a href='customer/my_account.php?my_order.php'>My Account</a>";
						}
						?>
						</li>
						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>
						
						<li>
							<a href="contactus.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span><?php item();?> items in Cart</span>

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

	<div class="container" id="slider"><!-- container start-->
		<div class="col-md-12"><!-- col-md-12 start-->
			<div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide start-->
				<ol class="carousel-indicators">
					<li data-target="myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="myCarousel" data-slide-to="1" ></li>
					<li data-target="myCarousel" data-slide-to="2"></li>		
					<li data-target="myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner"><!-- carousel inner start-->
					<?php 
					$get_slider="select * from slider LIMIT 0,1";
					$run_slider=mysqli_query($con,$get_slider);

					while ($row=mysqli_fetch_array($run_slider)) {
						$slider_name=$row['slider_name'];
						$slider_image=$row['slider_image'];
						$slider_url=$row['slider_url'];
						echo "<div class='item active'>
						<a href='$slider_url'><img src='admin_area/slider_images/$slider_image'>
						</a></div>
						";
					}

					?>

					<?php
					$get_slider="select * from slider LIMIT 1,3";
					$run_slider=mysqli_query($con,$get_slider);
					while ($row=mysqli_fetch_array($run_slider)) {
						$slider_name=$row['slider_name'];
						$slider_image=$row['slider_image'];
						$slider_url=$row['slider_url'];
						echo "<div class='item'>
						<a href='$slider_url'><img src='admin_area/slider_images/$slider_image'>
						</a></div>
						";
						# code...
					}
					?>
				</div><!-- carousel inner end-->
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- carousel slide end-->
		</div><!-- col-md-12 start-->

	</div><!-- container end-->

	<div id="advantage"><!-- advantage start-->
		<div class="container"><!-- container start-->
			<div class="same-height-row"><!-- same-height-row start-->

					<?php
					$get_boxes="select * from boxes_section";
					$run_box=mysqli_query($con,$get_boxes);
					while($row=mysqli_fetch_array($run_box)){
						$box_id=$row['box_id'];
						$box_title=$row['box_title'];
						$box_desc=$row['box_desc'];

					
					?>

				<div class="col-sm-4"><!-- col-sm-4 start-->
					<div class="box same-height"><!-- box same-height start-->
						<div class="icon"><!-- icon start-->
							<i class="fa fa-heart"></i>
						</div><!-- icon end-->
						<h3><a href="#"><?php echo $box_title; ?></a></h3>
						<p><?php echo $box_desc; ?></p>
					</div><!-- box same-height end-->
				</div><!-- col-sm-4 end-->

				<?php } ?>

			</div><!-- same-height-row end-->
		</div><!-- container end-->
		
	</div><!-- advantage end-->


<div id="hot"><!-- hotbox start-->
		<div class="box"><!-- box start-->
			<div class="container"><!-- container start-->
				<div class="col-md-12"><!-- col-md-12 start-->
					<h2>Latest This Week</h2>
				</div><!-- col-md-12 end-->
				
			</div><!-- container end-->
			
		</div><!-- box end-->
	
</div><!-- hotbox end-->

<div id="content" class="container">
	<div class="row">
		<?php
		getPro();
		?>
		


	</div>
</div>


<!--Footer-->
<?php 
include("includes/footer.php");
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>