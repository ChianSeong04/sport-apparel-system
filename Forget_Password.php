<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<title>Forget Password</title>
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
			<h2>FORGET PASSWORD</h2>
			<form>
				<div class="form-row">
					<div class="form-group">
						<label><strong>Email Address*</strong></label>
						<br>
						<input type="email" class="form-control input-lg" id="inputEmail4" placeholder="Enter your email address to reset password">
					</div>
				</div>
				<br>
				<div>
					<button type="submit" class="btn btn-outline-dark">Forget Password</button>
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
