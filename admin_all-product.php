<!DOCTYPE html>
<html>

<head>
<style>
#myInput {
  background-image: url('images/search.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

.button {
  background-color: rgb(255, 106, 89);
  border: none;
  color: white;
  padding: 13px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 1px 1px;
  cursor: pointer;
	border-radius:10px;
}
		</style>
	<title>Product Details</title>

	<link rel="stylesheet" href="assets/admin_styles/bootstrap.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/admin_styles/style.css"> </head>
<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="admin_index.php" class="logo"> <img src="assets/img/index_logo.png"alt="logo"> <span class="logoclass">Sparta Sport Apparel</span> </a>
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
			header("refresh:0.2; url=admin_login.php");
			exit();
		}

?>	

<?php
$search_validation="";

	if(isset($_GET['search-button']))
	{
		$search_check=0;

		$search_product=$_GET['search'];
		$product_name_check=mysqli_query($connect,"SELECT * FROM product_detail");
		
		
		while($product_table_row = mysqli_fetch_assoc($product_name_check))
		{
			if(strtolower($product_table_row['product_name'])==strtolower($search_product) )
			{
				
				$search_validation="";
				$search_name=$product_table_row['product_detail_id'];
				?>
						<script>
						window.location.href="admin_all-product.php?product_name=<?php echo $search_name ?>";
						</script>
				<?php
			}
	
			else
			{
				
				$search_validation="*Product does not exist.";
				
			}
		}
	
	}
?>
		</div>
<div class="sidebar" id="sidebar">

<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li >
<a href="admin_index.php"><i class="fas fa-tachometer-alt"></i> <span>Admin Dashboard</span></a>
</li>
<li class="list-divider"></li>
<li class="submenu" >
<a href="#"><i class="fas fa-user"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-customer.php"> All customers </a></li>
</ul>
</li>

<li class="submenu">
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
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All Product</h4> <a href="admin_add-product.php" class="btn btn-primary float-right veiwbutton">Add Product</a> </div>
						</div>
					</div>
				</div>
				
				<form method="GET" autocomplete="off">
				<input type="text" id="myInput"  name="search" placeholder="Enter Product Name" >
				
				<button type="submit" class="button" name="search-button">Search</button>
				<br>
				<span style="color:red; margin-top:10px;"><?php echo $search_validation; ?></span>
				</form>

				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0" style="text-align:center;">
										<thead style="text-align:center;">
											<tr>
												<th>Product ID</th>
												<th>Product Name</th>
												<th>Product Price</th>
												<th>Product Type</th>
												<th>Product Brand</th>
												<th>Action</th>
											</tr>
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
											<td style="text-align:center;"><?php echo $row['product_detail_id'] ?></td>
											<td style="text-align:center;"><?php echo $row['product_name'] ?></td>
											<td style="text-align:center;">RM <?php echo $row['product_price'] ?></td>
											<td style="text-align:center;"><?php echo $row['product_type_name'] ?></td>
											<td style="text-align:center;"><?php echo $row['product_brand_name'] ?></td>
												<td>
													<div class="actions"><a href="admin_all-product-detail.php?view&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-info">View</a> <a href="admin_edit-product.php?edit&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-info">Edit</a> <a href="admin_all-product.php?delete&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-danger" onclick="return confirmation()">Delete</a> </div>
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
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class"></h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
			
								<button type="button" class="btn btn-danger" name="delete"></button>
				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/admin_styles/jquery-3.5.1.min.js"></script>
	<script src="assets/admin_styles/raphael/raphael.min.js"></script>
	<script src="assets/admin_styles/morris/morris.min.js"></script>
	<script src="assets/admin_styles/chart.morris.js"></script>
	<script src="assets/admin_styles/script.js"></script>
</body>

</html>