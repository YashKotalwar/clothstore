<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...
?>
<?php
if (isset($_GET['edit_slide'])) {
	$edit_id=$_GET['edit_slide'];
	$edit_slide="select * from slider where slider_id='$edit_id'";
	$run_edit=mysqli_query($con,$edit_slide);
	$row_edit=mysqli_fetch_array($run_edit);
	$slide_id=$row_edit['slider_id'];
	$slide_name=$row_edit['slider_name'];
	$slide_image=$row_edit['slider_image'];
	$slide_url=$row_edit['slider_url'];

}
?>

<div class="row"><!--1 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<ol class="breadcrumb"> <!--breadcrumb starts-->
			<li>
				<i class="fa fa-dashboard">	
				</i>Dashboard / Edit Slide
			</li>
		</ol><!--breadcrumb ends-->
	</div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--1 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<div class="panel panel-default"><!--panel panel-default starts-->
			<div class="panel-heading"><!--panel-heading starts-->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw">
					</i>Edit Slide
				</h3>
			</div><!--panel-heading ends-->

			<div class="panel-body"><!--panel-body starts-->
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!--form-horizontal starts-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">Slide Name:</label>
						<div class="col-md-6">
							<input type="text" name="slider_name" class="form-control" value="<?php echo $slide_name; ?>">
						</div>
					</div><!--form-group ends-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">Slide Url:</label>
						<div class="col-md-6">
							<input type="text" name="slider_url" class="form-control" value="<?php echo $slide_url; ?>">
						</div>
					</div><!--form-group ends-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">Slide Image:</label>
						<div class="col-md-6">
							<input type="file" name="slider_image" class="form-control">
							<br>
							<img src="slider_images/<?php echo $slide_image; ?>" width="70" height="70">
						</div>
					</div><!--form-group ends-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label"></label>
						<div class="col-md-6">
							<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">
						</div>
					</div><!--form-group ends-->
				</form><!--form-horizontal ends-->
			</div><!--panel-body ends-->
		</div><!--panel panel-default ends-->
	</div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<?php
if (isset($_POST['update'])) {
	# code...
	$slide_name=$_POST['slider_name'];
	$slide_url=$_POST['slider_url'];
	$slide_image=$_FILES['slider_image']['name'];
	$temp_name=$_FILES['slider_image']['tmp_name'];
	move_uploaded_file($temp_name,"slider_images/$slide_image");
	$update_slide="update slider set  slider_name ='$slide_name',slider_url='$slide_url',slider_image='$slide_image' where slider_id='$slide_id'";
	$run_slide=mysqli_query($con,$update_slide);
	if ($run_slide) {
	echo "<script> alert('One Slide Has Been Updated') </script>";

	echo "<script>window.open('index.php?view_slider','_self')</script>";
}
}
?> 

<?php } ?>
