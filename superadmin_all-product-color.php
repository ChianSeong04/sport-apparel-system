<!DOCTYPE html>
<html>

<head>
	<title>Product Color Details</title>
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

				<li class="submenu">
					<a href="#"><i class="fas fa-user-plus"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-customer.php"> All customers </a></li>
						<li><a href="superadmin_all-customer.php"> Add customers </a></li>
						<li><a href="superadmin_all-customer.php"> Edit customers </a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-admin.php">All Admin</a></li>
						<li><a href="superadmin_add-admin.php">Add Admin</a></li>
						<li><a href="superadmin_edit-admin.php">Edit Admin</a></li>
					</ul>
				</li>

				<li class="submenu" > 
					<a href="#"><i class="fas fa-file-invoice"></i><span> Orders </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-order.php">All Orders </a></li>
						<li><a href="superadmin_edit-order.php"> Edit Orders </a></li>
					</ul>
				</li>
				
				<li class="submenu" style="background-color:grey;">
					<a href="#"><i class="fas fa-key"></i> <span> Product Colour</span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product-color.php">All Product Colour</a></li>
						<li><a href="superadmin_add-product-color.php">Add Product Colour</a></li>
						<li><a href="superadmin_edit-product-color.php">Edit Product Colour</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-key"></i> <span> Product Type</span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product-type.php">All Product Type</a></li>
						<li><a href="superadmin_add-product-type.php">Add Product Type</a></li>
						<li><a href="superadmin_edit-product-type.php">Edit Product Type</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fas fa-key"></i> <span> Product Brand</span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product-brand.php">All Product Brand</a></li>
						<li><a href="superadmin_add-product-brand.php">Add Product Brand</a></li>
						<li><a href="superadmin_edit-product-brand.php">Edit Product Brand</a></li>
					</ul>
				</li>

				<li class="submenu" >
					<a href="#"><i class="fas fa-key"></i> <span> Product </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="superadmin_all-product.php">All Product </a></li>
						<li><a href="superadmin_add-product.php">Add Product</a></li>
						<li><a href="superadmin_edit-product.php">Edit Product</a></li>
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
								<h3 class="card-title float-left">All Product Color</h3> <a href="superadmin_add-product-color.php" class="btn btn-primary float-right veiwbutton">Add Product Color</a> 
							</div>
						</div>
					</div>
				</div>
				<div>
				<table id="product_color_table" class="table table-striped table-bordered table-hover">
						<thead>
							<th>Product Color ID</th>
							<th>Product Color Name</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php
								$result = mysqli_query($connect, "SELECT * from product_color WHERE product_color_status!=0");

								while($row = mysqli_fetch_assoc($result))
								{
							?>
							<tr>
								<td style="text-align:center;"><?php echo $row['product_color_id'] ?></td>
								<td style="text-align:center;"><?php echo $row['product_color'] ?></td>
								<td>
									<div class="actions"> <a href="superadmin_edit-product-color.php?edit&id=<?php echo $row['product_color_id']; ?>" class="btn btn-info">Edit</a> <a href="superadmin_all-product-color.php?delete&id=<?php echo $row['product_color_id']; ?>" class="btn btn-danger" onclick="return confirmation()">Delete</a> </div>
								</td>
							</tr>
								<?php
								}
									if (isset($_GET['delete'])) 
								{
									$pid=$_GET['id'];
									mysqli_query($connect,"UPDATE product_color SET product_color_status='0' WHERE product_color_id='$pid'");
								?>
									<script>
										window.location.href="superadmin_all-product-color.php";
									</script>
								<?php
								}
								?>
								<script type="text/javascript">
											function confirmation()
											{
												var choice;
												choice=confirm("The related product will be unable to perform action.\nDo you want to delete?");
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
			$('#product_color_table').DataTable();
		});
	</script>
</body>
</html>