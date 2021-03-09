<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...
?>
<?php

if (isset($_GET['delete_box'])) {
	$delete_box=$_GET['delete_box'];
	$delete_slide="delete from boxes_section where box_id='$delete_box'";
	$run_delete=mysqli_query($con,$delete_slide);

	if ($run_delete) {
		echo "<script>alert('One Box Has Been Deleted')</script>";

		echo "<script>window.open('index.php?view_box','_self')</script>";
	}
}
?>

<?php } ?>