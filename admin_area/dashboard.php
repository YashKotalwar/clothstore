<?php
if (!isset($_SESSION['admin_email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}else {
	# code...
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>Dashboard
			</li>
		</ol>
	</div>

</div>
<div class="row"><!--2 row Start-->
	<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Start-->
		<div class="panel panel-primary"><!--2 row Start-->
			<div class="panel-heading"><!--panel panel-primary Start-->
				<div class="row"><!-- row Start-->
					<div class="col-xs-3"><!--col-xs-3 Start-->
						<i class="fa fa-tasks fa-5x"></i>
					</div><!--col-xs-3 End-->
					<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Start-->
						<div class="huge"><?php echo $count_pro ?></div>
						<div>Products</div>
					</div><!-- col-xs-9 text-right End-->
				</div><!-- row End-->
			</div><!--panel-heading End-->
			<a href="index.php?view_product">
			<div class="panel-footer"><!--panel-footer Start-->
				<span class="pull-left">View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div><!--panel-footer End-->
			</a>
		</div><!--panel panel-primary End-->
	</div><!--col-lg-3 col-md-6 End-->



	



	<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Start-->
		<div class="panel panel-green"><!--2 row Start-->
			<div class="panel-heading"><!--panel panel-primary Start-->
				<div class="row"><!-- row Start-->
					<div class="col-xs-3"><!--col-xs-3 Start-->
						<i class="fa fa-comments fa-5x"></i>
					</div><!--col-xs-3 End-->
					<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Start-->
						<div class="huge"><?php echo $count_cust ?></div>
						<div>Customers</div>
					</div><!-- col-xs-9 text-right End-->
				</div><!-- row End-->
			</div><!--panel-heading End-->
			<a href="index.php?view_customer">
			<div class="panel-footer"><!--panel-footer Start-->
				<span class="pull-left"> View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div><!--panel-footer End-->
			</a>
		</div><!--panel panel-primary End-->
	</div><!--col-lg-3 col-md-6 End-->





	<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Start-->
		<div class="panel panel-yellow"><!--2 row Start-->
			<div class="panel-heading"><!--panel panel-primary Start-->
				<div class="row"><!-- row Start-->
					<div class="col-xs-3"><!--col-xs-3 Start-->
						<i class="fa fa-shopping-cart fa-5x"></i>
					</div><!--col-xs-3 End-->
					<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Start-->
						<div class="huge"><?php echo $count_p_cat ?></div>
						<div></div>
					</div><!-- col-xs-9 text-right End-->
				</div><!-- row End-->
			</div><!--panel-heading End-->
			<a href="index.php?view_product_cat">
			<div class="panel-footer"><!--panel-footer Start-->
				<span class="pull-left">View Details</span>
				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div><!--panel-footer End-->
			</a>
		</div><!--panel panel-primary End-->
	</div><!--col-lg-3 col-md-6 End-->




	<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 Start-->
		<div class="panel panel-red"><!--2 row Start-->
			<div class="panel-heading"><!--panel panel-primary Start-->
				<div class="row"><!-- row Start-->
					<div class="col-xs-3"><!--col-xs-3 Start-->
						
						<i class="fa fa-first-order fa-5x "></i>
					</div><!--col-xs-3 End-->
					<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Start-->
						<div class="huge"><?php echo $count_order ?></div>
						<div>Orders</div>
					</div><!-- col-xs-9 text-right End-->
				</div><!-- row End-->
			</div><!--panel-heading End-->
			<a href="index.php?view_order">
			<div class="panel-footer"><!--panel-footer Start-->
				<span class="pull-left">View Details</span>
				<span class="pull-right">
					<i class="fa fa-arrow-circle-right"></i></span>
				<div class="clearfix"></div>
			</div><!--panel-footer End-->
			</a>
		</div><!--panel panel-primary End-->
	</div><!--col-lg-3 col-md-6 End-->

</div><!--2 row End-->

<div class="row"><!-- 3 row starts -->
	<div class="col-lg-8"><!-- col-lg-8 starts -->
		<div class="panel panel-primary"><!-- panel panel-primarystarts -->
			<div class="panel-heading"><!-- panel-heading starts -->
				<h3 class="panel-title"><!-- panel-title starts --> 
					<i class="fa fa-money fa-fw">
						New Orders
					</i>
				</h3><!-- panel-title ends -->
			</div><!-- panel-heading ends -->
			<div class="panel-body"><!--panel-body starts-->
				<div class="table-responsive"><!--table-responsive starts-->
					<table class="table table-bordered table-hover table-striped"><!--table table-bordered table-hover table-striped starts-->
						<thead><!--thead starts-->
							<tr>
								<th>Order No:</th>
								<th>
									Customer Email:
								</th>
								<th>
									Invoice No:
								</th>
								<th>
									Product Id:
								</th>
								<th>
									Total:
								</th>
								<th>
									Date:
								</th>
								<th>
									Status:
								</th>
							</tr>
						</thead><!--thead ends-->
						<tbody><!--tbody start-->
							<?php 
							$i=0;
							$get_order="select * from customer_order order by 1 DESC LIMIT 0,5";
							$run_order=mysqli_query($con,$get_order);
							while ($row_order=mysqli_fetch_array($run_order)) {
								$order_id=$row_order['order_id'];
								$customer_id=$row_order['customer_id'];

								$product_id=$row_order['product_id'];
								$invoice_no=$row_order['invoice_no'];
								$qty=$row_order['qty'];
								$size=$row_order['size'];
								$status=$row_order['order_status'];
								$i++;
							
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td>
									<?php 
								$get_cust="select * from customers where customer_id='$customer_id'";
								$run_cust=mysqli_query($con,$get_cust);

								$row_customer=mysqli_fetch_array($run_cust);

								$customer_email=$row_customer['customer_email'];

								echo $customer_email;
								 ?>
								 	
								 </td>
								<td><?php echo $invoice_no ?></td>
								<td><?php echo $product_id ?></td>
								<td>
									<?php echo $qty ?>
								</td>
								<td>
									<?php echo $size ?>
								</td>
								<td>
									<?php echo $status ?>
								</td>
							</tr>
							<?php } ?>
						</tbody><!--tbody end-->
					</table><!--table table-bordered table-hover table-striped ends-->
				</div><!--table-responsive ends-->





				<div class="text-right"><!--text-right starts-->
					<a href="index.php?view_order">View All Orders <i class="fa fa-arrow-circle-right"></i></a>
				</div><!--text-right ends-->


			</div><!--panel-body ends-->
		</div><!-- panel panel-primary ends -->
	</div><!-- col-lg-8 ends -->


	<div class="col-md-4"><!--col-md-4 starts-->
		<div class="panel"><!--panel starts-->
			<div class="panel-body"><!--panel-body starts-->
				<div class="thumb-info mb-md"><!--thumb-info mb-md starts-->
					<img src="admin_images/<?php echo $admin_image ?>" class="rounded img-responsive">

					<div class="thumb-info-title"><!--thumb-info-title starts-->
						<span class="thumb-info-inner"><?php echo $admin_name?></span><br><i class="fa fa-user"></i>Job :
						<span class="thumb-info-type"><?php echo $admin_job ?></span>
					</div><!--thumb-info-title ends-->
				</div><!--thumb-info mb-md ends-->
				<div class="mb-md"><!--mb-md starts-->
					<div class="widget-content-expanded"><!--widget-content-expanded starts-->
						<i class="fa fa-user"></i><span>Email :  </span><?php echo $admin_email ?> <br>

						<i class="fa fa-user"></i><span>Country :</span><?php echo $admin_country ?> <br>

						<i class="fa fa-user"></i><span>Contact :</span><?php echo $admin_contact ?> <br>
					</div><!--widget-content-expanded ends-->

					<hr class="dotted short">

					<h5 class="text-muted">About</h5>
						
					<p>
						<?php echo $admin_about ?>
					</p>
				</div><!--mb-md ends-->
			</div><!--panel-body ends-->
		</div><!--panel ends-->
	</div><!--col-md-4 ends-->

</div><!-- 3 row ends -->




<?php } ?>