<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...


?>
<br><br><br><br><br>
<div class="row"><!--1 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<ol class="breadcrumb"> <!--breadcrumb starts-->
			<li>
				<i class="fa fa-dashboard">	
				</i>Dashboard / Insert Category
			</li>
		</ol><!--breadcrumb ends-->
	</div><!--col-lg-12 ends-->
</div><!--1 row ends-->

<div class="row"><!--2 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<div class="panel panel-default"><!--panel panel-default starts-->
			<div class="panel-heading"><!--panel-heading starts-->
				<h3 class="panel-title">
					<i class="fa fa-money fa-f">
					</i> Insert Category
				</h3>
			</div><!--panel-heading ends-->

			<div class="panel-body"><!--panel-body starts-->
				<form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label"> Category Title</label>
						<div class="col-md-6">
							<input type="text" name="cat_title" class="form-control">
						</div>
					</div><!--form-group ends-->

					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label"> Category Description</label>
						<div class="col-md-6">
							<textarea type="text" name="cat_desc" class="form-control">	
							</textarea>
						</div>
					</div><!--form-group ends-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label"></label>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Insert Category" class="btn btn-primary form-control">
						</div>
					</div><!--form-group ends-->
				</form><!--form-horizontal ends-->
			</div><!--panel-body ends-->
		</div><!--panel panel-default ends-->
	</div><!--col-lg-12 ends-->
</div><!--2 row ends-->
<?php
if (isset($_POST['submit'])) {
	# code...
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$insert_cat="insert into categories (cat_title,cat_desc) values ('$cat_title','$cat_desc') ";
	$run_cat=mysqli_query($con,$insert_cat);
	if ($run_cat) {
	echo "<script> alert('New product category has been inserted successfully') </script>";

	echo "<script>window.open('index.php?view_categories','_self')</script>";
}
}
?>

<?php } ?>

