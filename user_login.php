<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<title>Login/Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

   </head>
<!-- Header -->
<?php include("header.php") ?>
<!-- Close Header -->
<body>

<div class="container mt-5 mb-5 ">
	<div class="row">
		<div class="col-6">
			<h2>LOGIN</h2>
			<form>
				<div class="form-row">
					<div class="form-group">
						<label><strong>Email Address*</strong></label>
						<br>
						<input type="email" class="form-control input-lg" id="inputEmail4" placeholder="Email">
					</div>
					<br>
					<div class="form-group">
						<label><strong>Password*</strong></label>
						<br>
						<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
					</div>
				</div>
				<br>
				<div>
					<p><a class="forgot_password" href="forget_password.php">Forgot Your Password?</a></p>
					<button type="submit" class="btn btn-outline-dark">LOGIN</button>
					<p class="mt-2">Not a member? <a class="register_link" href="register.php"><strong>Join Us</strong></a></p>
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
