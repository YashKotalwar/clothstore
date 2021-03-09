<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...


?>

<?php
if (isset($_GET['edit_p_cat'])) {
	$edit_p_cat_id=$_GET['edit_p_cat'];
	$edit_p_cat_query="select * from product_category where p_cat_id='$edit_p_cat_id'";
	$run_edit=mysqli_query($con,$edit_p_cat_query);
	$row_edit=mysqli_fetch_array($run_edit);
	$p_cat_id=$row_edit['p_cat_id'];
	$p_cat_title=$row_edit['p_cat_title'];
	$p_cat_desc=$row_edit['p_cat_desc'];

}
?>
<div class="row"><!--1 row starts-->
	<div class="col-lg-12"><!--col-lg-12 starts-->
		<ol class="breadcrumb"> <!--breadcrumb starts-->
			<li>
				<i class="fa fa-dashboard">	
				</i>Dashboard / Edit Product Category
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
					</i>Edit Product Category
				</h3>
			</div><!--panel-heading ends-->

			<div class="panel-body"><!--panel-body starts-->
				<form class="form-horizontal" action="" method="post"><!--form-horizontal starts-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">Product Category Title</label>
						<div class="col-md-6">
							<input type="text" name="p_cat_title" class="form-control" value="<?php echo $p_cat_title; ?>">
						</div>
					</div><!--form-group ends-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label">Product Category Description</label>
						<div class="col-md-6">
							<textarea type="text" name="p_cat_desc" class="form-control">
								<?php echo $p_cat_desc; ?>
							</textarea>
						</div>
					</div><!--form-group ends-->
					<div class="form-group"><!--form-group starts-->
						<label class="col-md-3 control-label"></label>
						<div class="col-md-6">
							<input type="submit" name="update" class="btn btn-primary form-control">
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
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];
	$update_p_cat="update product_category set  p_cat_title ='$p_cat_title',p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
	$run_p_cat=mysqli_query($con,$update_p_cat);
	if ($run_p_cat) {
	echo "<script> alert('Product category has been updated successfully') </script>";

	echo "<script>window.open('index.php?view_product_cat','_self')</script>";
}
}
?> 

<?php } ?>
