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
	<h2>LOGIN</h2>
	<form>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label><strong>Email Address*<strong></label>
				<br>
				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			</div>
			<br>
			<div class="form-group col-md-6">
				<label><strong>Password*</strong></label>
				<br>
				<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
			</div>
		</div>
		<br>
		<div>
			<p><a class="forgot_password" href="iframe_forget.php">Forgot Your Password?</a></p>
			<p>By logging in, you agree to Sparta Sport Apparel's Privacy Policy and Terms of Use.</p>
			<button type="submit" class="btn btn-outline-dark">LOGIN</button>
			<p>Not a member? <a class="register_link" href="register.php"><strong>Join Us</strong></a></p>
		</div>
	</form>
</div>
	

<!--start-ckeckout-->
	<!-- <div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
				<iframe src="iframe_login.php" style="position:absolute;top:245px; left:30;right:90; bottom:100;width:1500px;height:470px;border:none; margin:0; padding:0;z-index:1" id="my-iframe""></iframe>
				<table style="color:white;user-select:none;z-index:-2;">
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
				
				<script>
					var myIframe = document.getElementById('my-iframe');
					myIframe.contentWindow.document.addEventListener('submit',function(){window.parent.location.href='index.php'});
				</script> -->
				
	<!--end-ckeckout -->

	<!--Footer-->

	<!--Close Footer-->

</body>
<?php include("footer.php") ?>
</html>
