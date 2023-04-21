<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
input[type="submit"] {
	background: RGB(255, 106, 89);
	color: #FFF;
	font-size: 1em;
	padding: 0.5em 1.2em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	display: inline-block;
	text-transform: uppercase;
	border: none;
	outline: none;
	margin-left: 10px;
	width: 50%;
	height: 50px;
}

input[type="submit"]:hover {
	background:#cb0000;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
}

input{
	display:block;
}

#wrapper
{
	width:900px;
	border:2px solid RGB(255, 106, 89);;
	overflow:auto;
}

#left
{
	float:left;
	width:200px;
	padding:15px;
}


#right
{
	float:left;
	padding:5px;	
	border-left:2px solid RGB(255, 106, 89);;
	width:150px;
}

.content{
	float:left;
	padding:5px;
	width:450px;
}

label
{
	display:inline-block;
	width:100px;
	vertical-align:top;
	
}
	</style>

</head>
<body>
<!--start-account-->
	<div class="account">
		<div class="container" style="border:1px solid RGB(255, 106, 89);padding:20px 15px 20px 15px;"> 
			<div class="account-bottom">

				<div class="col-md-6 account-left">
					<form method="post" autocomplete="off" >
						<div class="account-top heading">
						<h3>REGISTER</h3>
					</div>
					<div class="address reg">

						<span>First Name</span>
						<input type="text" style="border-radius:5px;" name="customer_first_name" placeholder="John" value="">


						<span>Last Name </span>
						<input type="text" style="border-radius:5px;" name="customer_last_name" placeholder="William" value="">


						<span>Email Address</span> 
						<input type="email" name="customer_email" style="border-radius:5px;border: 1px solid #242424;outline: none;width: 100%;font-size: 14px;padding: 10px 10px;font-family: 'Lato', sans-serif;margin: 10px 0px 10px 0px;" placeholder="JohnWilliam420@gmail.com" value="" >
						<span style="color:red;"></span>

						<span>Handphone No.</span> 
						<input type="text" placeholder="e.g  0123456789" style="border-radius:5px;" name="customer_phone_num" pattern="0.+" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" value=""  >
						<span style="color:black;">*Only number available</span>
						
						<span style="color:red;"></span>


						<span>Password</span>
						<input type="password" style="border-radius:5px;" name="customer_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{14,}"  >
						
						<span style="color:black;">**Password should consist of a mixture of numbers and both uppercase and lowercase letters with at least 14 characters </span>

						<span>Confirm Password </span>
						<input type="password" style="border-radius:5px;" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{14,}"  >
						<span id="pass_error" style="color:red;"></span>
					</div>
				</div>

				<div class="col-md-6 account-right">
						<div class="account-top heading">
						<h3>YOUR BILLING ADDRESS</h3>
					</div>
					<div class="address reg">
						<span>Address Line 1</span>
						<input type="text" style="border-radius:5px;" name="address1" placeholder="123, Jalan Example 1/20" value=""  >


						<span>Addresss Line 2</span>
						<input type="text" style="border-radius:5px;" name="address2" placeholder="Taman Example" value=""  >


						<span>Postcode</span>
						<input type="text" maxlength="5" style="border-radius:5px;" placeholder="81200" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="postcode" value=""  >
						<span style="color:black;">*Only number available</span>
					
						<span style="color:red;"></span>

						<span>City</span>
						<input type="text" style="border-radius:5px;"  name="city" placeholder="Kota Kinabalu" value=""  >

						<span style="margin-top:25px;">State</span>
						<select class="form-control" id="state" style="border-radius:5px;" name="state"  >
							<option disabled value="" selected>Select State</option>
							<option value="Johor" >Johor</option>
							<option value="Kedah">Kedah</option>
							<option value="Kelantan">Kelantan</option>
							<option value="Malacca">Malacca</option>
							<option value="Perak">Perak</option>
							<option value="Selangor">Selangor</option>
							<option value="Negeri Sembilan">Negeri Sembilan</option>
							<option value="Pahang">Pahang</option>
							<option value="Perlis">Perlis</option>
							<option value="Penang">Penang</option>
							<option value="Sabah">Sabah</option>
							<option value="Sarawak">Sarawak</option>
							<option value="Terengganu">Terengganu</option>
					</select>
		
						<h6 style="margin-top:40px;">By clicking Register, you agree to our Terms and that you have read our Data Use Policy. </h6>
						<span>
							<input type="submit" id="regibtn" name="regbtn" value="Register" style="margin-left:140px;margin-top:20px;" > 
						</span>

					</div>
				</div>
				</form>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-account-->
	
	<script>
	document.getElementById("regibtn").addEventListener("click", function() {
	window.parent.location = "userlogin.php";
});
</script>
	
</body>
</html>