<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...


?>

<br><br>
<div class="row"><!--1 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<ol class="breadcrumb"> <!--breadcrumb starts-->
			<li class="active">
				<i class="fa fa-dashboard">	
				</i>Dashboard / View Slides
			</li>
		</ol><!--breadcrumb ends-->
	</div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--Row 2 Start-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i>View Slides
				</h3>
			</div>

			<div class="panel-body">
				<?php
				$get_slides="select * from slider";
				$run_slides=mysqli_query($con,$get_slides);
				while ($row_slides=mysqli_fetch_array($run_slides)) {
					# code...
					$slide_id=$row_slides['slider_id'];
					$slide_name=$row_slides['slider_name'];
					$slide_image=$row_slides['slider_image'];
				
				?>
				<div class="col-lg-3 col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title" align="center">
								<?php echo $slide_name; ?>
							</h3>
						</div>
						<div class="panel-body">
							<img src="slider_images/<?php echo $slide_image; ?>" class="img-responsive">
						</div>
						<div class="panel-footer">
							<center>
								<a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-left">
									<i class="fa fa-trash-o">	
									</i>Delete
								</a>
								<a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-right">
									<i class="fa fa-pencil">	
									</i>Edit
								</a>
								<div class="clearfix">
									
								</div>
							</center>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
</div>

<?php } ?>