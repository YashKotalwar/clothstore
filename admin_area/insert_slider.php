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
				</i>Dashboard / Insert Slider
			</li>
		</ol><!--breadcrumb ends-->
	</div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!-- 2 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<div class="panel panel-default"><!--panel panel-default starts-->
			<div class="panel-heading"><!--panel-heading starts-->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw">
					</i>Insert Slider 
				</h3>
			</div><!--panel-heading ends-->


			<div class="panel-body"><!--panel-body starts-->
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!--form-horizontal starts-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">
							Slide Name:
						</label>

						<div class="col-md-6">
							<input type="text" name="slide_name" class="form-control">
						</div>
					</div><!--form-group ends-->

					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">
							Slide Url:
						</label>
						<div class="col-md-6">
							<input type="text" name="slide_url" class="form-control">	
						</div>
					</div><!--form-group ends-->

					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">
							Slide Image:
						</label>
						<div class="col-md-6">
							<input type="file" name="slide_image" class="form-control">	
						</div>
					</div><!--form-group ends-->


					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">
							
						</label>

						<div class="col-md-6">
							<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
						</div>
					</div><!--form-group ends-->

				</form><!--form-horizontal ends-->
			</div><!--panel-body ends-->


		</div><!--panel panel-default ends-->
	</div><!--col-lg-12 ends-->
</div><!-- 2 row ends-->

<?php
if (isset($_POST['submit'])) {
	# code...
	$slide_name=$_POST['slide_name'];
	$slide_url=$_POST['slide_url'];
	$slide_image=$_FILES['slide_image']['name'];
	$temp_name=$_FILES['slide_image']['tmp_name'];
	
	$view_slides="select * from slider";

	$view_run_slides=mysqli_query($con,$view_slides);
	$count=mysqli_num_rows($view_run_slides);
	if ($count<4) {
		move_uploaded_file($temp_name, "slider_images/$slide_image");
		$insert_slide="insert into slider (slider_name,slider_image,slider_url) values ('$slide_name','$slide_image','$slide_url')";
		$run_slide=mysqli_query($con,$insert_slide);

	echo "<script> alert('New Slide Has Been Inserted ') </script>";

	echo "<script>window.open('index.php?view_slider','_self')</script>";
}
else {
	# code...
	echo "<script>alert('You Have Already Inserted 4 Slides')</script>";
}
}
?>

<?php } ?>
