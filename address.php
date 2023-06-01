<?php include("session_connect.php");
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
<?php 
include("header.php");

			/*if(!isset($_SESSION["id"]))
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
			}*/		
		
$check_phone="";
$postcode_check="";
$space1="for spacing purpose";
$space2="for spacing";
if(isset($_POST["save_btn"]))
{
	$cusid=1;//$_SESSION["id"];
	$checking=0;
	$adds1=$_POST["address_1"];
	$adds2=$_POST["address_2"];
	$contactnum=$_POST["contact_num"];
	$state=$_POST["state"];
	$postc=$_POST["postcode"];
	$city=$_POST["city"];

	$phone_number=strlen($contactnum);
	if($phone_number<10) //phone number
	{
		$check_phone="*Phone number must be at least 10 numbers.";
		$space1="for spacing purpose for spacing";
		$checking=1;
	}

	$postcode_number=strlen($postc);
							if($postcode_number<5) //postcode
							{
								$postcode_check="*Postcode must be at least 5 numbers.";
								$space2="for spacing purpose for spacing";
								$checking=1;
							}


	if($checking==0)
	{
	mysqli_query($connect,"UPDATE customer_address SET delivery_address_line1='$adds1',
														delivery_address_line2='$adds2',
														contact_number='$contactnum',
														state = '$state',
														postcode='$postc',
														city='$city'
												WHERE customer_id='$cusid'; ");
												?>
<script>Swal.fire({title:"Address Updated!",
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
			$cusid=1;//$_SESSION["id"];
			$result = mysqli_query($connect, "SELECT * FROM customer_address JOIN customer ON customer_address.customer_id = customer.customer_id WHERE customer_address.customer_id='$cusid'");
			$row = mysqli_fetch_assoc($result);
			
			?>
            <div class="col-8">
            <form name="edit_address_form" method="POST" action="" autocomplete="off">
				<div class="form-row">
					<div class="form-group">
						<label><strong>Address Line 1</strong></label>
						<br>
						<input type="text" name="address_1" class="form-control input-lg" value="<?php echo $row['delivery_address_line1']; ?>" required>
					</div>
					<br>
					<div class="form-group">
						<label><strong>Address Line 2</strong></label>
						<br>
						<input type="text" name="address_2" class="form-control input-lg" value="<?php echo $row['delivery_address_line2']; ?>" required>
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>Contact Number</strong></label>
						<br>
						<input type="text" name="contact_num" class="form-control input-lg" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" pattern="0.+" value="<?php echo $row['contact_number']; ?>" required>
						<span style="color:red;"><?php echo $check_phone; ?></span>
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>State</strong></label>
						<br>
						<select name="state" class="form-select" aria-label="Default select example" required>
                            <option value="Johor" <?php if(strtolower($row['state']) =="johor") echo "selected";?> >Johor</option>
							<option value="Kedah" <?php if(strtolower($row['state']) =="kedah") echo "selected";?> >Kedah</option>
							<option value="Kelantan" <?php if(strtolower($row['state']) =="kelantan") echo "selected";?> >Kelantan</option>
							<option value="Malacca" <?php if(strtolower($row['state']) =="malacca") echo "selected";?> >Malacca</option>
							<option value="Perak" <?php if(strtolower($row['state']) =="perak") echo "selected";?> >Perak</option>
							<option value="Selangor" <?php if(strtolower($row['state']) =="selangor") echo "selected";?> >Selangor</option>
							<option value="Negeri Sembilan" <?php if(strtolower($row['state']) =="negeri sembilan") echo "selected";?> >Negeri Sembilan</option>
							<option value="Pahang" <?php if(strtolower($row['state']) =="pahang") echo "selected";?> >Pahang</option>
							<option value="Perlis" <?php if(strtolower($row['state']) =="perlis") echo "selected";?> >Perlis</option>
							<option value="Penang" <?php if(strtolower($row['state']) =="penang") echo "selected";?> >Penang</option>
							<option value="Sabah" <?php if(strtolower($row['state']) =="sabah") echo "selected";?> >Sabah</option>
							<option value="Sarawak" <?php if(strtolower($row['state']) =="sarawak") echo "selected";?> >Sarawak</option>
							<option value="Terengganu" <?php if(strtolower($row['state']) =="terengganu") echo "selected";?> >Terengganu</option>
					</select>
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>Postcode</strong></label>
						<br>
						<input type="text" name="postcode" class="form-control input-lg" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $row['postcode']; ?>" required>
						<span style="color:red;"><?php echo $postcode_check;?></span>
					
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>City</strong></label>
						<br>
						<input type="text" name="city" class="form-control input-lg" value="<?php echo $row['city']; ?>" required>
					</div>
				</div>
				<br>
				<div>
					<input type="submit" name="save_btn" class="btn btn-outline-dark"></input>
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
