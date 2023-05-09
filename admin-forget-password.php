<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
		session_start();
		include("session_connect.php");
?>	
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/admin_styles/admin_style.css">
	<link rel="stylesheet" href="assets/admin_styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
          <img src="images/admin_login_logo.png">
        </div>
	</div>

	<div class="forms">
		<div class="form-content">
			<div class="login-form">
			  <div class="title">Forget Password?</div>
			  <form method="post" autocomplete="off">
				<div class="input-boxes">
				  <div class="input-box">
					<i class="fas fa-envelope"></i>
					<input type="email" name="email" placeholder="Enter your email" required>
				  </div>
				  <div class="button input-box">
					<button class="btn btn-primary btn-block btn-dark" type="submit" name="sendbtn">Reset Password</button>
				  </div>
				</div>
                <div class="text sign-up-text text-color">Remember your password?<a href="admin_superadmin-login.php"><strong>&nbsp;Login</strong></a></div>			  
            </form>
			<?php

if(isset($_POST["sendbtn"])){
$email=$_POST["email"];
$_SESSION["email"]="$email";
$result=mysqli_query($connect,"SELECT * FROM admin WHERE admin_email='$email'");
if(mysqli_num_rows($result) != 0){
	
	$subject = "Admin Reset Password";
	$message = "You can reset your password by clicking on the link below \n\n http://localhost/sport-apparel-system/admin_reset-password.php";
	$sender = "From: Sparta Sport Apparel <chiantian20@gmail.com>";

	mail($email,$subject,$message,$sender);

	?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({title:"Email Sent!",
				icon:"success",
				text:"You may now check your email to reset password"}	); </script>
	<?php
}
else{
	?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal({title:"Please Register",
				text:"Your Email Does Not Exists!",
				icon:"error",
				button:"OK"}).then(function(){window.location.href="admin_superadmin-login.php";}); </script>
	<?php
}
}
?>
			</div>
		</div>
    </div>
  </div>
</body>
</html>