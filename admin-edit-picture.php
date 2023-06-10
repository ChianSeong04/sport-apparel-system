<!DOCTYPE html>
<html>

<head>
	<title>Admin Profile</title>
	<link rel="stylesheet" href="assets/admin_styles/bootstrap.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/admin_styles/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/admin_styles/style.css"> </head>
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
        $pid=$_SESSION['id'];	
        $id=$_SESSION['id'];	
                        if(isset($_FILES["p_image"]) )
                        {  
                            $checking=0;
							$check=0;
                                    $img_name = $_FILES['p_image']['name'];
                                    $img_size = $_FILES['p_image']['size'];
                                    $tmp_name = $_FILES['p_image']['tmp_name'];
                                    $error = $_FILES['p_image']['error'];
        
                                
                                if($checking==0)
                                {
                                    if ($error === 0) 
                                    {
                                        if ($img_size > 900000) {
                                            $em = "Sorry, your file is too large.";
                                        }else 
                                        {
                                            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                            $img_ex_lc = strtolower($img_ex);
                                
                                            $allowed_exs = array("jpg", "jpeg", "png"); 
                                
                                            if (in_array($img_ex_lc, $allowed_exs)) {
                                                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                                                $img_upload_path = 'images/admin/'.$new_img_name;
                                                move_uploaded_file($tmp_name, $img_upload_path);
                                
                                                // Insert into Database
                                                
                                            }else
                                             {
                                                
                                                ?>
                                     <script>
                                    alert("You can't upload files of this type");
                                    </script>
                            
                            <?php
                            $checking=1;
                                            }
                                        }
                                    }else 
                                    {
                            ?>
                                     <script>
                                    alert("unknown error occurred!");
                                    </script>
                        <?php
                        $checking=1;
                                    }
                                }
        
                            if($checking==0)
                            {
                            $check=mysqli_query($connect,"UPDATE admin SET admin_image='$new_img_name' WHERE admin_id='$id'");
                            }
        
                            if($check) 
                            {
                        ?>
                                    <script>
                                    alert("Edit Successfully.");
                                    </script>
                        <?php
                                    header("refresh:0.2; url=admin_profile.php");
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
<li><a href="admin_all-customer.php"> All customer </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-file-invoice"></i><span> Orders </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-order.php">All Orders </a></li>
</ul>
</li>
 
<li class="submenu">
<a href="#"><i class="fas fa-key"></i> <span> Product Colour</span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-product-color.php">All Product Colour</a></li>
<li><a href="admin_add-product-color.php">Add Product Colour</a></li>
</ul>
</li>

<li class="submenu">
<a href="#"><i class="fas fa-key"></i> <span> Product Type</span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-product-type.php">All Product Type</a></li>
<li><a href="admin_add-product-type.php">Add Product Type</a></li>
</ul>
</li>
<li class="submenu" >
<a href="#"><i class="fas fa-key"></i> <span> Product Brand</span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-product-brand.php">All Product Brand</a></li>
<li><a href="admin_add-product-brand.php">Add Product Brand</a></li>
</ul>
</li>

<li class="submenu" >
<a href="#"><i class="fas fa-key"></i> <span> Product </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_all-product.php">All Product </a></li>
<li><a href="admin_add-product.php">Add Product</a></li>
</ul>
</li>

<li class="submenu">
<a href="#"><i class="far fa-money-bill-alt"></i> <span> Product Sales </span> <span class="menu-arrow"></span></a>
<ul class="submenu_class" style="display: none;">
<li><a href="admin_invoice-reports.php">Sales Report </a></li>
</ul>
</li>
<li class="submenu" style="background-color:grey;">
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
				<div class="page-header mt-5">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Profile Picture</h3>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="profile-header">
							<div class="row align-items-center">
			<?php
				
					$picture=0;	
				$result =mysqli_query($connect,"SELECT * FROM admin WHERE admin_id='$pid' ");
							
				while($row = mysqli_fetch_assoc($result))
				{
					if($row['admin_image']==NULL)
					{
						$picture="unknow.jpg";
					}
					else{
						$picture=$row['admin_image'];					
					}
			?>
								<div class="col-auto profile-image">
																											
									<a href="#"> <img class="rounded-circle" alt="User Image" <?php echo '<img src="images/admin/'.$picture.'" width="120px" height="120px"' ?> > </a>
								</div>
			
								
							
							</div>
                            <br>
                            <br>
                <form method="post" enctype="multipart/form-data">
                            <div class="col-md-4">
									<div class="form-group">
										<label>Profile Picture</label>
										<div class="custom-file mb-3">
											<input type="file" name="p_image" required>
										</div>
									</div>
								</div>

                <input  type="submit" class="btn btn-primary buttonedit ml-2" name="save_prt" value="Save">
				<a href="admin_profile.php" class="btn btn-secondary">Back</a>
                </form>
						</div>
						<br>
						
						<div class="tab-content profile-tab-cont">
							<div class="tab-pane fade show active" id="per_details_tab">
								<div class="row">
									<div class="col-lg-6">

										<div class="card">

											
										</div>
	
													</div>
												</div>
											</div>
										</div>
								
				<?php
				}
				?>						
												</div>
											</div>
										</div>
									</div>
								</div>
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