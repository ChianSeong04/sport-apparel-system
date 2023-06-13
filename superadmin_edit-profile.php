<!DOCTYPE html>
<html>

<head>
	<title>Edit Superadmin Profile</title>

	<link rel="stylesheet" href="assets/admin_styles/bootstrap.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/admin_styles/style.css"> </head>
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
		
		if(!isset($_SESSION['id']) )
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


<?php 
$phone_check="";
$email_check="";
					if(isset($_POST["save_product"]))
{
							$checking=0;
							$check=0;
							$name=$_POST["admin_name"];
							$phone=$_POST["admin_phone"];
							$email=$_POST["admin_email"];
							$address=$_POST["admin_address"];
							$id=$_POST["admin_id"];
						
							$phone_number=strlen($phone);
							if($phone_number<10) //phone number
							{
								$phone_check="*Phone number must be at least 10 numbers.";
								$checking=1;
							}
						
	
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //email format
						{
							$email_check = "*Invalid email format";
							$checking=1;
						}
	

						if($checking==0)
						{
							$check=mysqli_query($connect,"UPDATE superadmin SET superadmin_name='$name',superadmin_phone='$phone',superadmin_email='$email',superadmin_address='$address' WHERE superadmin_id='$id'");			
						}
							if($check) 
					{
				?>
							<script>
							alert("Edit Successfully.");
							</script>
				<?php
							header("refresh:0.2; url=superadmin_profile.php");
					}
}
			
			?>



		</div>
<div class="sidebar" id="sidebar">

<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li >
<a href="superadmin_index.php"><i class="fas fa-tachometer-alt"></i> <span>Superadmin Dashboard</span></a>
</li>
<li class="list-divider"></li>
<li class="submenu" >
<a href="#"><i class="fas fa-user-plus"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="superadmin_all-customer.php"> All customers </a></li>
<li><a href="superadmin_add-customer.php"> Add customers </a></li>
</ul>
</li>

<li class="submenu" >
<a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="superadmin_all-admin.php">All Admin</a></li>
<li><a href="superadmin_add-admin.php">Add Admin</a></li>

</ul>
</li>
<li class="submenu" >
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

<li class="submenu" >
<a href="#"><i class="fas fa-key"></i> <span> Product Type</span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="superadmin_all-product-type.php">All Product Type</a></li>
<li><a href="superadmin_add-product-type.php">Add Product Type</a></li>
</ul>
</li>

<li class="submenu" >
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

<li class="submenu" style="background-color:grey;">
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
							<h3 class="page-title mt-5">Edit Profile</h3> </div>
					</div>
				</div>
				<?php
		$pid=$_SESSION['id'];		
		$result =mysqli_query($connect,"SELECT * FROM superadmin WHERE superadmin_id='$pid' ");
							
				while($row = mysqli_fetch_assoc($result))
				{
		?>
				<div class="row">
					<div class="col-lg-12">
						<form method="post" enctype="multipart/form-data" autocomplete="off">
							<div class="row formtype">
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Admin ID</label>
										<input type="text" class="form-control" id="usr" value="<?php echo $row["superadmin_id"]; ?>" readonly name="admin_id" required></div>
								</div>
								
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Admin Name</label>
										<input type="text" class="form-control" id="usr1" value="<?php echo $row["superadmin_name"]; ?>" name="admin_name" required> </div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Admin Phone Number</label>
										<input type="text" class="form-control" id="usr1" value="<?php echo $row["superadmin_phone"]; ?>" pattern="0.+" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" name="admin_phone" required> 
										<span style="color:red;"><?php echo $phone_check;?></span>
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label>Admin Email</label>
										<input type="email" class="form-control" id="usr1" value="<?php echo $row["superadmin_email"]; ?>" name="admin_email"required> 
										<span style="color:red;"><?php echo $email_check;?></span> 
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Admin Position</label>
										<input type="text" class="form-control" id="usr1" value="<?php echo $row["superadmin_position"]; ?>" name="admin_position" readonly> </div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Admin Address</label>
										<textarea class="form-control" rows="8" id="comment" name="admin_address"><?php echo $row["superadmin_address"]; ?></textarea>
									</div>
								</div>
							</div>

				<input  type="submit" class="btn btn-primary buttonedit ml-2" name="save_product" value="Save">
				<a href="superadmin_profile.php" class="btn btn-secondary">Back</a>
						</form>
						<?php
				}
						?>
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