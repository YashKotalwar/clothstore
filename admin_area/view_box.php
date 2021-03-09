<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...


?>

<br><br>
<div class="row"><!--Row 1 Start-->
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>Dashboard / View Box
			</li>
		</ol>
	</div>
</div><!--Row 1 End-->

<div class="row"><!--Row 2 Start-->
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i>View Box
				</h3>
			</div>

			<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			
			<tbody>
				<?php
				
				$get_boxes="select * from boxes_section";
				$run=mysqli_query($con,$get_boxes);
				while ($row_cats=mysqli_fetch_array($run)) {
					$box_id=$row_cats['box_id'];
					$box_title=$row_cats['box_title'];
					$box_desc=$row_cats['box_desc'];
					
					?>
				
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center">
                                <?php echo $box_title;  ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $box_desc; ?>
                        </div>
                        <div class="panel-footer">
                        <a href="index.php?delete_box=<?php echo $box_id ?>" class="pull-left"><i class="fa fa-trash-o"></i>Delete</a>
                        <a href="index.php?edit_box=<?php echo $box_id ?>" class="pull-right"><i class="fa fa-pencil"></i>Edit</a>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
				
				<?php } ?>
			</tbody>
		</div>
	</div>
</div><!--Row 2 End-->

<?php } ?>