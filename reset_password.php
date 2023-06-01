<?php
		session_start();
		include("session_connect.php");
?>	
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<title>Reset Password</title>
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
<?php include("header.php");
echo $_SESSION["email"];
	
    if(isset($_POST["resetbtn"]))
    {
        $newpass=$_POST["new_pass"];
        $conpass=$_POST["confirm_pass"];
        $email=$_SESSION["email"];
		echo $newpass;
		echo $conpass;
		echo $email;
        if($newpass != $conpass)
        {
            ?>
                <script>Swal.fire({title:"Failed To Reset Password",
                                    icon:"error",
                                    text:"Not matching password. Please try again" ,
                                    button:"Ok"}); </script>
    
    
           <?php
        }
        else
        {
			$result=mysqli_query($connect,"UPDATE customer SET customer_password='$newpass' WHERE customer_email='$email'");
    
    ?>
    <script>Swal.fire({title:"Password Changed!",
                    icon:"success",
                    text:"You Have Change Your Password Successfully",
                    button:"Back To Login"}	).then(function(){window.location.href="user_login.php";}); </script>
    <?php
        }
    }
    
?>
<!-- Close Header -->
<body>

<div class="container mt-5 mb-5 ">
	<div class="row">
		<div class="col-6">
			<h2>RESET PASSWORD</h2>
			<form name="reset_pass_form" method="POST" action="" autocomplete="off">
				<div class="form-row">
					<div class="form-group">
						<label><strong>New Password*</strong></label>
						<br>
						<input type="password"  class="form-control input-lg" name="new_pass" id="new_pass" placeholder="Enter your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
						<label><strong>Confirm Password*</strong></label>
						<br>
						<input type="password" class="form-control input-lg" id="confirm_pass" name="confirm_pass" placeholder="Confirm your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
					</div>
				</div>
				<br>
				<div>
					<button type="submit" name="resetbtn" class="btn btn-outline-dark">Reset Password</button>
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
