<!DOCTYPE html>
<html>

<head>
	<title>Product Details</title>
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
				<a href="admin_index.php" class="logo"> <img src="images/logo4.png"alt="logo"> <span class="logoclass">Sparta Sport Apparel</span> </a>
			</div>
			
			<a href="admin_logout.php" class="logout" >Log Out</a>
			
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
						<a href="admin_index.php"><i class="fas fa-tachometer-alt"></i> <span>Admin Dashboard</span></a>
					</li>

					<li class="list-divider"></li>
					<li class="submenu">
						<a href="#"><i class="fas fa-user"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_all-customer.php"> All customer </a></li>
						</ul>
					</li>

					<li class="submenu" >
						<a href="#"><i class="fas fa-file-invoice"></i><span> Orders </span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_all-order.php">All Orders </a></li>
							<li><a href="admin_edit-order.php"> Edit Orders </a></li>
						</ul>
					</li>
				
					<li class="submenu">
						<a href="#"><i class="fas fa-key"></i> <span> Product Colour</span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_all-product-color.php">All Product Colour</a></li>
							<li><a href="admin_add-product-color.php">Add Product Colour</a></li>
							<li><a href="admin_edit-product-color.php">Edit Product Colour</a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#"><i class="fas fa-key"></i> <span> Product Type</span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_all-product-type.php">All Product Type</a></li>
							<li><a href="admin_add-product-type.php">Add Product Type</a></li>
							<li><a href="admin_edit-product-type.php">Edit Product Type</a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#"><i class="fas fa-key"></i> <span> Product Brand</span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_all-product-brand.php">All Product Brand</a></li>
							<li><a href="admin_add-product-brand.php">Add Product Brand</a></li>
							<li><a href="admin_edit-product-brand.php">Edit Product Brand</a></li>
						</ul>
					</li>

					<li class="submenu" style="background-color:grey;">
						<a href="#"><i class="fas fa-key"></i> <span> Product </span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_all-product.php">All Product </a></li>
							<li><a href="admin_add-product.php">Add Product</a></li>
							<li><a href="admin_edit-product.php">Edit Product</a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#"><i class="far fa-money-bill-alt"></i> <span> Product Sales </span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_invoice-reports.php">Sales Report </a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#"><i class="fas fa-cog"></i><span> Profile </span> <span class="menu-arrow"></span></a>
						<ul class="submenu_class" style="display: none;">
							<li><a href="admin_profile.php">Profile Setting </a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col">
							<div class="mt-5">
								<h3 class="card-title float-left">All Product</h3> <a href="admin_add-product.php" class="btn btn-primary float-right veiwbutton">Add Product</a> 
							</div>
						</div>
					</div>
				</div>
				<div>
					<table id="product_table" class="table table-striped table-bordered table-hover">
						<thead>
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Product Price</th>
							<th>Product Type</th>
							<th>Product Brand</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php		
								if(!isset($_GET['product_name']))
								{
									$result = mysqli_query($connect, "SELECT * from product_detail
									JOIN product_type ON product_detail.product_type_id = product_type.product_type_id 
									JOIN product_brand ON product_detail.product_brand_id = product_brand.product_brand_id WHERE product_detail.product_status=1 AND product_status!=0 ORDER BY product_detail_id");
								}
								else
								{
									$searching_product=$_GET['product_name'];
									$result = mysqli_query($connect, "SELECT * from product_detail
									JOIN product_type ON product_detail.product_type_id = product_type.product_type_id 
									JOIN product_brand ON product_detail.product_brand_id = product_brand.product_brand_id 
									WHERE product_detail.product_status=1 AND product_status!=0 
									AND product_detail_id=$searching_product");
								}
									while($row = mysqli_fetch_assoc($result))
								{
							?>
								<tr>
									<td><?php echo $row['product_detail_id'] ?></td>
									<td><?php echo $row['product_name'] ?></td>
									<td>RM <?php echo $row['product_price'] ?></td>
									<td><?php echo $row['product_type_name'] ?></td>
									<td><?php echo $row['product_brand_name'] ?></td>
									<td>
										<div class="actions"><a href="admin_all-product-detail.php?view&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-success">View</a> <a href="admin_edit-product.php?edit&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-info">Edit</a> <a href="admin_all-product.php?delete&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-danger" onclick="return confirmation()">Delete</a> </div>
									</td>
								</tr>
							<?php
								}
								if (isset($_GET['delete'])) 
								{
									$pid=$_GET['id'];
									mysqli_query($connect,"UPDATE product_detail SET product_status='0' WHERE product_detail_id='$pid'");
							?>
								<script>
									window.location.href="admin_all-product.php";
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
			$('#product_table').DataTable();
		});
	</script>	
</body>

</html>