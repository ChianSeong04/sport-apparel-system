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
<?php 
include("header.php");

	if(!isset($_SESSION["id"]))
	{
		?>
		<script>Swal.fire({title:"Please Login First!",
				text:"You are unable to proceed as a guest",
				icon:"error",
				button:"Ok"}	).then(function(){window.location.href="user_login.php";}); 
				</script>
		
		<?php
		exit();
	}
	
$pass_check="";
$space="";
$conf_pass_check="";
$new_pass_check="";
if(isset($_POST["save_pass_btn"]))
{
	$cusid=$_SESSION["id"];
    $checking = 0;
	$currPass = $_POST["current_pass"];
    $newPass = $_POST["new_pass"];
    $confPass = $_POST["confirm_pass"];

	$getPass=mysqli_query($connect,"SELECT customer_password FROM customer WHERE customer_id='$cusid'");
    $retPass=mysqli_fetch_assoc($getPass);
  

    if($currPass != $retPass["customer_password"]){
        $pass_check = "Your Current Password is Incorrect. Please Try Again";
		$space="for spacing";
        $checking=1;
    }
    if($newPass != $confPass){
        $conf_pass_check = "New Password do not match. Please Try Again";
		$space="for spacing";
        $checking=1;
    }
    if($newPass == $currPass){
        $new_pass_check = "New Password must not be the same as Current Password.";
		$space="for spacing";
        $checking=1;
    }

	if($checking==0)
	{
	mysqli_query($connect,"UPDATE customer SET customer_password = '$newPass'
												WHERE customer_id='$cusid'; ");
												?>
<script>Swal.fire({title:"Password Changed!",
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
			$cusid=$_SESSION["id"];
			$result = mysqli_query($connect, "SELECT * FROM customer WHERE customer_id='$cusid'");
			$row = mysqli_fetch_assoc($result);
			?>
            <div class="col-8">
            <form name="change_pass_form" method="POST" action="" autocomplete="off">
				<div class="form-row">
					<div class="form-group">
						<label><strong>Current Password*</strong></label>
						<br>
						<input type="password" name="current_pass" class="form-control input-lg" value="<?php echo isset($_POST["current_pass"]) ? $_POST["current_pass"] : ''; ?>" required>
						<span style="color:red;"><?php echo $pass_check;?> </span>
					</div>
					<br>
					<div class="form-group">
						<label><strong>New Password*</strong></label>
						<br>
						<input type="password" name="new_pass" class="form-control input-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{14,}" required>
						<span style="color:red;"><?php echo $new_pass_check;?></span>
                        <p>*Password should consist of a mixture of numbers and both uppercase and lowercase letters with at least 14 characters</p>
					</div>
                    <div class="form-group">
						<label><strong>Comfirm Password*</strong></label>
						<br>
						<input type="password" name="confirm_pass" class="form-control input-lg">
						<span style="color:red;"><?php echo $conf_pass_check;?></span>
					</div>
				</div>
				<br>
				<div>
					<button type="submit" name="save_pass_btn" class="btn btn-outline-dark">Save</button>
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
