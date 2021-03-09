<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...


?>
<br><br>
<div class="row"><!-- 1 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<ol class="breadcrumb"><!--breadcrumb starts-->
			<li>
				<i class="fa fa-dashboard"></i>Dashboard / Insert Products Category
			</li>
		</ol><!--breadcrumb ends-->
	</div><!--col-lg-12 ends-->
</div><!-- 1 row ends-->

<div class="row"><!-- 2 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<div class="panel panel-default"><!--panel panel-default starts-->
			<div class="panel-heading"><!--panel-heading starts-->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw">
					</i>Insert Product Category
				</h3>
			</div><!--panel-heading ends-->


			<div class="panel-body"><!--panel-body starts-->
				<form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">
							Product Category Title
						</label>

						<div class="col-md-6">
							<input type="text" name="p_cat_title" class="form-control">
						</div>
					</div><!--form-group ends-->

					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">
							Product Category Description
						</label>
						<div class="col-md-6">
							<textarea type="text" name="p_cat_desc" class="form-control">	
							</textarea>
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
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];
	$insert_p_cat="insert into product_category (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc') ";
	$run_p_cat=mysqli_query($con,$insert_p_cat);
	if ($run_p_cat) {
	echo "<script> alert('New product category has been inserted successfully') </script>";

	echo "<script>window.open('index.php?view_p_cat','_self')</script>";
}
}
?>

<?php } ?>