<?php
include("session_connect.php");
session_start();
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-8">
      <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
		
        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		
			<!--Sweet Alert Package-->
	<script src="package/dist/sweetalert2.all.min.js"></script>
	<script src="package/dist/sweetalert2.min.js"></script>
   </head>
	<!-- Header -->
		<?php include("header.php");
			if(!isset($_SESSION["id"]))
			{
				?>
				<script>
						Swal.fire({title:"Please Login First!",
						text:"You are unable to proceed as a guest",
						icon:"error",
						button:"Ok"}).then(function(){window.location.href="user_login.php";}); 
						</script>
				
				<?php
				exit();
			}
			
$phone_check="";
$space="";
if(isset($_POST["save_btn"]))
{
	$cusid=$_SESSION["id"];
	$checking=0;
	$cfname=$_POST["first_name"];
	$clname=$_POST["last_name"];
	$cemail=$_POST["email"];
	$chandp=$_POST["hp_num"];

			$phone_number=strlen($chandp);
					if($phone_number<10) //phone number
					{
						$phone_check="*Phone number must be at least 10 numbers.";
						$space="for spacing";
						$checking=1;
					}

	if($checking==0)
	{
	mysqli_query($connect,"UPDATE customer SET customer_first_name='$cfname',
												customer_last_name='$clname',
												customer_email='$cemail',
												customer_phone_num='$chandp'
												WHERE customer_id='$cusid'; ");
												?>
<script>Swal.fire({title:"Profile Updated!",
				icon:"success",
				button:"Back To My Profile"}	).then(function(){window.location.href="profile.php";}); </script>
												<?php
	}
}
	?>
    <!-- Close Header -->

<body>
    <div class="container mt-5 mb-5 ">
    <h3>Settings</h3>
    <div class="row">
            <div class="col-4">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"><a class="customer_personal_settings" href="profile.php"><i class="fa fa-fw fa-user text-dark mr-3"></i>&nbsp;&nbsp;&nbsp;<strong>Profile</strong></a></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th scope="col"><a class="customer_personal_settings" href="address.php"><i class="fa fa-fw fa-address-book text-dark mr-3"></i>&nbsp;&nbsp;&nbsp;<strong>Address</strong></a></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th scope="col"><a class="customer_personal_settings" href="change_password.php"><i class="fa fa-fw fa-lock text-dark mr-3"></i>&nbsp;&nbsp;&nbsp;<strong>Change Password</strong></a></th>
                        </tr>
                    </thead>
                </table>
            </div>
			<?php
			
			$cusid= $_SESSION["id"];
			
			$result = mysqli_query($connect, "SELECT * FROM customer WHERE customer_id='$cusid'");
			$row = mysqli_fetch_assoc($result);
			?>
            <div class="col-8">
            <form name="edit_profile_form" method="POST" action="" autocomplete="off">
				<div class="form-row">
					<div class="form-group">
						<label><strong>First Name</strong></label>
						<br>
						<input type="text" name="first_name" class="form-control input-lg" value="<?php echo $row['customer_first_name']; ?>" required>
					</div>
					<br>
					<div class="form-group">
						<label><strong>Last Name</strong></label>
						<br>
						<input type="text" name="last_name" class="form-control input-lg" value="<?php echo $row['customer_last_name'];  ?>" required>
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>Email</strong></label>
						<br>
						<input type="email" name="email" class="form-control input-lg" value="<?php echo $row['customer_email'];  ?>" required>
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>Handphone No.</strong></label>
						<br>
						<input type="text" name="hp_num" class="form-control input-lg" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" pattern="0.+" value="<?php echo $row['customer_phone_num'];  ?>" required>
					</div>
				</div>
				<br>
				<div>
					<input type="submit" name="save_btn" class="btn btn-outline-dark" value="Save" > </input>
				</div>
			</form>
            </div>
        </div>
    </div>
</body>
	<!--Footer-->
		<?php include("footer.php") ?>
	<!--Close Footer-->
</html>
