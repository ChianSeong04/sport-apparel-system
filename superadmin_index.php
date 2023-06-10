<!DOCTYPE html>
<html>

<head>
	<title>Superadmin Dashboard</title>
	<link rel="stylesheet" href="assets/admin_styles/bootstrap.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/admin_styles/style.css"> 
	<link rel="stylesheet" href="assets/admin_styles/datatables/datatables.min.css" />
</head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="superadmin_index.php" class="logo"> <img src="images/logo4.png" alt="logo"> <span class="logoclass">Sparta Sport Apparel</span> </a>
			</div>
			
			<a href="superadmin_logout.php" class="logout" >Log Out</a>
<?php
		session_start();
		include("session_connect.php");
		
		if(!isset($_SESSION['id']))
		{
			?>
				<script>
				alert("Please Log In!");
				</script>
		<?php
			header("refresh:0.2; url=admin_superadmin-login.php");
			exit();
		}

?>
		</div>

	<div class="sidebar" id="sidebar">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li style="background-color:grey;">
					<a href="superadmin_index.php"><i class="fas fa-tachometer-alt"></i> <span>Superadmin Dashboard</span></a>
				</li>
				<li class="list-divider"></li>

				<li class="submenu" >
					<a href="#"><i class="fas fa-user-plus"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-customer.php"> All customers </a></li>
						<li><a href="superadmin_all-customer.php"> Add customers </a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-admin.php">All Admin</a></li>
						<li><a href="superadmin_add-admin.php">Add Admin</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-file-invoice"></i><span> Orders </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-order.php">All Orders </a></li>
					</ul>
				</li>
				
				<li class="submenu">
					<a href="#"><i class="fas fa-key"></i> <span> Product Colour</span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product-color.php">All Product Colour</a></li>
						<li><a href="superadmin_add-product-color.php">Add Product Colour</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-key"></i> <span> Product Type</span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product-type.php">All Product Type</a></li>
						<li><a href="superadmin_add-product-type.php">Add Product Type</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-key"></i> <span> Product Brand</span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product-brand.php">All Product Brand</a></li>
						<li><a href="superadmin_add-product-brand.php">Add Product Brand</a></li>
					</ul>
				</li>

				<li class="submenu" >
					<a href="#"><i class="fas fa-key"></i> <span> Product </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product.php">All Product </a></li>
						<li><a href="superadmin_add-product.php">Add Product</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="far fa-money-bill-alt"></i> <span> Product Sales </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_invoice-reports.php">Sales Report </a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-cog"></i><span> Profile </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_profile.php">Profile Setting </a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<h3 class="mt-5">Superadmin Dashboard</h3>
				</div>
				<div class="row">
					<div class="col-3">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">
											<?php
											$result = mysqli_query($connect, "SELECT * FROM customer");	
											$count = mysqli_num_rows($result);//used to count number of rows
											echo "$count";
										?>
										</h3>
										<h5 class="text-muted">Total Customer</h5> 
									</div>
									
									<div class="ml-auto mt-md-3 mt-lg-0">
									<i class="fas fa-user-plus fa-2x"></i>
									 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">
										<?php
											$result = mysqli_query($connect, "SELECT * FROM customer_order");	
											$count = mysqli_num_rows($result);//used to count number of rows
											echo "$count";
										?>
										</h3>
										<h5 class="text-muted">Total Orders</h5> </div>
									
									<div class="ml-auto mt-md-3 mt-lg-0"> <i class="fas fa-shopping-basket fa-2x"></i></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-3">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">
										<?php
											$result = mysqli_query($connect, "SELECT * FROM product_detail");	
											$count = mysqli_num_rows($result);//used to count number of rows
											echo "$count";
										?>
										</h3>
										<h5 class="text-muted">Total Product</h5> 
									</div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <i class="fas fa-globe fa-2x"></i> </div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-3">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">

										<?php
											$result = mysqli_query($connect, "SELECT * FROM admin");	
											$count = mysqli_num_rows($result);//used to count number of rows
											echo "$count";
										?>
										</h3>
										<h5 class="text-muted">Total Admin</h5> 
									</div>
									
									<div class="ml-auto mt-md-3 mt-lg-0">
									<i class="fas fa-user fa-2x"></i>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h3 class="">Order</h3>
					<div>
						<table id="index_table" class="table table-striped table-bordered table-hover">
							<thead>
								<th>Order ID</th>
								<th>Customer ID</th>
								<th>Product ID</th>
								<th>Quantity</th>
								<th>Order Subtotal</th>
								<th>Payment Method</th>
								<th>Grandtotal</th>
								<th>Order Date</th>
								<th>Status</th>
							</thead>

							<tbody>
							<?php 
								$result = mysqli_query($connect, "SELECT * from cart 
								JOIN customer_order ON customer_order.order_id = cart.payment_status
								JOIN payment ON customer_order.payment_id=payment.payment_id WHERE cart.payment_status!=0");
								while($row = mysqli_fetch_assoc($result))
									{
							?>
								<tr>
									<td><?php echo $row['order_id'] ?></td>
									<td><?php echo $row['customer_id'] ?></td>
									<td><?php echo $row['product_id'] ?></td>
									<td><?php echo $row['product_quantity'] ?></td>
									<td>RM <?php echo $row['cart_subtotal'] ?></td>
									<td><?php echo $row['payment_type'] ?></td>
									<td>RM <?php echo $row['grandtotal'] ?></td>
									<td><?php echo $row['order_date'] ?></td>
									<td><?php echo $row['order_status'] ?></td>
								</tr>
							<?php
									}
							?>
							</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
<!--elective choosen navigate bar-->
	<script src="assets/admin_styles/jquery-3.5.1.min.js"></script>
	<script src="assets/admin_styles/script.js"></script>
	<script src="assets/admin_styles/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#index_table').DataTable();
		});
	</script>
</body>

</html>