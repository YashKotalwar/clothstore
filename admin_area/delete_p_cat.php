<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...


?>

<?php
if (isset($_GET['delete_p_cat'])) {
	# code...
	$delete_p_cat_id=$_GET['delete_p_cat'];
	$delete_p_cat="delete from product_category where p_cat_id='$delete_p_cat_id'";
	$run_delete=mysqli_query($con,$delete_p_cat);
	if ($run_delete) {
		# code...
		echo "<script>alert('One Product Category Has Been Deleted')</script>";
		echo "<script>window.open('index.php?view_product_cat','_self')</script>";
	}
}
?>

<?php } ?>