﻿<!DOCTYPE html>
<html>

<head>

	<title>Customer Details</title>
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
				<li>
					<a href="superadmin_index.php"><i class="fas fa-tachometer-alt"></i> <span>Superadmin Dashboard</span></a>
				</li>
				<li class="list-divider"></li>

				<li class="submenu" style="background-color:grey;">
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
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h3 class="card-title float-left">Customer Details</h3> <a href="superadmin_add-customer.php" class="btn btn-primary float-right veiwbutton">Add Customer</a> 
							</div>
						</div>
					</div>
				</div>
				<div>
				<table id="customer_table" class="table table-striped table-bordered table-hover">
					<thead>
						<th>Customer ID</th>
						<th>First  Name</th>
						<th>Last Name</th>
						<th>Ph.Number</th>
						<th>Email</th>
						<th>State</th>
						<th>City</th>
						<th>Postcode</th>
						<th>Delivery Address Line 1</th>
						<th>Delivery Address Line 2</th>
						<th>Action</th>
					</thead>

					<tbody>
						<?php
							$result = mysqli_query($connect, "SELECT * FROM customer, customer_address WHERE customer_address.customer_id = customer.customer_id");
							while($row = mysqli_fetch_assoc($result))
							{
						?>
							<tr>
								<td><?php echo $row['customer_id'] ?></td>
								<td><?php echo $row['customer_first_name'] ?></td>
								<td><?php echo $row['customer_last_name'] ?></td>
								<td><?php echo $row['customer_phone_num'] ?></td>
								<td><?php echo $row['customer_email'] ?></td>
								<td><?php echo $row['state'] ?></td>
								<td><?php echo $row['city'] ?></td>
								<td><?php echo $row['postcode'] ?></td>
								<td><?php echo $row['delivery_address_line1'] ?></td>
								<td><?php echo $row['delivery_address_line2'] ?></td>
								<td>
									<div class="actions"><a href="superadmin_edit-customer.php?edit&id=<?php echo $row['customer_id']; ?>" class="btn btn-info">Edit</a> <a href="superadmin_all-customer.php?delete&id=<?php echo $row['customer_id']; ?>" class="btn btn-danger" onclick="return confirmation()">Delete</a> </div>
								</td>
							</tr>
						<?php
							}
							if (isset($_GET['delete'])) 
							{
								$pid=$_GET['id'];
								mysqli_query($connect,"DELETE from customer WHERE customer_id='$pid'");												
								mysqli_query($connect,"DELETE from customer_address WHERE customer_id='$pid'");
						?>
							<script>
							alert("Delete Successfully.");
							window.location="superadmin_all-customer.php";
							</script>
						<?php
							}
						?>		
							<script type="text/javascript">
							function confirmation()
							{
								var choice;
								choice=confirm("Do you want to delete?");
								return choice;
							}
							</script>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/admin_styles/jquery-3.5.1.min.js"></script>
	<script src="assets/admin_styles/script.js"></script>
	<script src="assets/admin_styles/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#customer_table').DataTable();
		});
	</script>
</body>

</html>