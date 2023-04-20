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
	<title>Customer Details</title>

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

		$search_email=$_GET['search'];
		$customer_email_check=mysqli_query($connect,"SELECT * FROM customer");
		
		
		while($customer_table_row = mysqli_fetch_assoc($customer_email_check))
		{
			if(strtolower($customer_table_row['customer_email'])==strtolower($search_email) )
			{
				
				$search_validation="";
				$search_customer_email=$customer_table_row['customer_id'];

				?>
						<script>
						window.location.href="admin_all-customer.php?customer_email=<?php echo $search_customer_email ?>";
						</script>
				<?php
			}
	
			else
			{
				
				$search_validation="*Email does not exist.";
				
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
<li class="submenu" style="background-color:rgb(255, 106, 89);">
<a href="#"><i class="fas fa-user"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-customer.php"> All customer </a></li>
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

<li class="submenu" >
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
								<h4 class="card-title float-left mt-2">Customer Details</h4></div>
						</div>
					</div>
				</div>

				<form method="GET" autocomplete="off">
				<input type="text" id="myInput"  name="search" placeholder="Enter Customer Email" >
				
				<button type="submit" class="button" name="search-button">Search</button>
				<br>
				<span style="color:red; margin-top:10px;"><?php echo $search_validation; ?></span>
				</form>

			<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0" >
										<thead style="text-align:center;">
											<tr>
												<th>Customer ID</th>
												<th>First  Name</th>
												<th>Last Name</th>
												<th>Ph.Number</th>
												<th>Email</th>
												<th>State</th>
												<th>City</th>
												<th>Poscode</th>
												<th>Delivery Address Line 1</th>
												<th>Delivery Address Line 2</th>
											</tr>
										</thead>
										<tbody>
						<?php
							
							
							
							
							
							if(!isset($_GET['customer_email']))
							{
							
							$result = mysqli_query($connect, "SELECT * FROM customer, customer_address WHERE customer_address.customer_id = customer.customer_id");
							}
							else
							{
								$searching_email=$_GET['customer_email'];
								$result = mysqli_query($connect, "SELECT * FROM customer, customer_address WHERE customer_address.customer_id = customer.customer_id AND customer.customer_id='$searching_email'");

							}
							while($row = mysqli_fetch_assoc($result))
							{
						?>
											<tr>
												<td style="text-align:center;"><?php echo $row['customer_id'] ?></td>
												<td style="text-align:center;"><?php echo $row['customer_first_name'] ?></td>
												<td style="text-align:center;"><?php echo $row['customer_last_name'] ?></td>
												<td style="text-align:center;"><?php echo $row['customer_phone_num'] ?></td>
												<td style="text-align:center;"><?php echo $row['customer_email'] ?></td>
												<td style="text-align:center;"><?php echo $row['state'] ?></td>
												<td style="text-align:center;"><?php echo $row['city'] ?></td>
												<td style="text-align:center;"><?php echo $row['postcode'] ?></td>
												<td style="text-align:center;"><?php echo $row['delivery_address_line1'] ?></td>
												<td style="text-align:center;"><?php echo $row['delivery_address_line2'] ?></td>
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
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>