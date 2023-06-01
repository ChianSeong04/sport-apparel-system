<?php
include("session_connect.php");
session_start();
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

		<!--Sweet Alert Package-->
		<script src="package/dist/sweetalert2.all.min.js"></script>
		<script src="package/dist/sweetalert2.min.js"></script>
   </head>
<!-- Header -->
<?php 
include("header.php");

if(isset($_POST["submit_email_btn"])){
$email=$_POST["user_email"];

$_SESSION["email"]="$email";

$result=mysqli_query($connect,"SELECT * FROM customer WHERE customer_email='$email'");
if(mysqli_num_rows($result) != 0){
	
	$subject = "User Password Reset Request";
	$message = "You can reset your password by clicking on the link below \n\n http://localhost:8080/sport-apparel-system/reset_password.php";
	$sender = "From: Sparta Sport Apparel <spartasportapparelfyp@gmail.com>";

	mail($email,$subject,$message,$sender);		

	?>
<script>Swal.fire({title:"Email Sent!",
				icon:"success",
				text:"You may now check your email to reset password"}	); </script>
	<?php
}
else{
	?>
<script>swal({title:"Please Register",
				text:"Your Email Does Not Exists!",
				icon:"error",
				button:"OK"}).then(function(){window.location.href="login.php";}); </script>
	<?php
}
} 
 ?>
<!-- Close Header -->
<body>

<div class="container mt-5 mb-5 ">
	<div class="row">
		<div class="col-6">
			<h2>FORGOT PASSWORD</h2>
			<form name="forget_pass_form" method="POST" action="" autocomplete="off">
				<div class="form-row">
					<div class="form-group">
						<label><strong>Email Address*</strong></label>
						<br>
						<input type="email" name="user_email" class="form-control input-lg" placeholder="Enter your email address to reset password" required>
					</div>
				</div>
				<br>
				<div>
					<input type="submit" name="submit_email_btn" class="btn btn-outline-dark" value="Forget Password"></input>
				</div>
			</form>
		</div>
		<div class="col-6">
			<img class="login_image rounded" src="images/login_image.jpg">
		</div>
	</div>
</div>

</body>
<?php include("footer.php") ?>
</html>
