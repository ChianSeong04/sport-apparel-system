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
						<h3>FORGET PASSWORD</h3>
					</div>
					<div class="address">
						<span>Email Address*</span>
						<input type="text" style="border-radius:5px;" name="useremail">
						<div style = "margin-top:20px;">
							<input id="resetbtn" type="submit" name="sendbtn" value="RESET PASSWORD">
						</div>
					</div>

				</div>
				</form>
				<div class="col-md-6 account-left">
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!--End Login Box-->


<script>
	document.getElementById("resetbtn").addEventListener("click", function() {
	window.parent.location = "index.php";
});
</script>

</body>
</html>
