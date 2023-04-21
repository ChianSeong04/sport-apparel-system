<html>
<head>
<!--login css-->
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="styles/admin_style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--login css-->
</head>
<body>
<!--Start Login Box-->
	<div class="daccount">
		<div class="container"> 
			<div class="account-bottom">
				
				<div class="col-md-6 account-left">
					<form name="login" method="post" autocomplete="off">
					<div class="account-top heading">
						<h3>LOGIN</h3>
					</div>
					<div class="address">
						<span>Email Address*</span>
						<input type="text" style="border-radius:5px;" name="useremail">
					</div>
					<div class="address">
						<span>Password*</span>
						<input type="password" style="border-radius:5px;" name="userpass">
						</div>
						<span style="color:red;"> </span>
					<div class="address">
						<div>
							<input id="loginbtn" type="submit" name="sendbtn" value="Login">
						</div>
						<div class="address">
						<a class="forgot" href="iframe_forget.php">Forgot Your Password?</a>
						</div>
					</div>
				</div>
				</form>
				<div class="col-md-6 account-left">
					<form style="border: 1px solid red; padding:10px;border-radius:5px;">
					<div class="account-top heading">
						<h3>CREATE AN ACCOUNT</h3>
					</div>
					<div class="address new">
						<p>Creating an account is easy. Enter your email address and fill in the form on the next page and enjoy the benefits of having an account. </p>
						<span>
							<p>Get our latest product recommendations for you.
							<br>	Personalise your experience on Mobile, tablet and desktop.
							<br>	Manage your orders and preferences.
							<br>	Access your saved items.
							<br>	Create and share gift lists. </p>
					</div>
					<div class="address new">
						<a href="iframe_register.php">
							<input id="my-button" type=button value='REGISTER NOW' ">
						</a>
					</div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--End Login Box-->

<script>
	document.getElementById("loginbtn").addEventListener("click", function() {
	window.parent.location = "index.php";
});
</script>

</body>
</html>
